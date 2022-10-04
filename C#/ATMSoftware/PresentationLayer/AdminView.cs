using System;
using ATMBussinessObjects;
using ATMBussinessLogicLayer;
using System.Globalization;
using System.Collections.Generic;

namespace ATMPresentationLayer
{
    public class AdminView
    {
        public static void DisplayAdminMenu()
        {
            string choice = "";
            while (choice != "6")
            {
                Console.WriteLine("Press 1 to Create New Account.");
                Console.WriteLine("Press 2 to Delete Existing Account.");
                Console.WriteLine("Press 3 to Update Account Information.");
                Console.WriteLine("Press 4 to Search for Account.");
                Console.WriteLine("Press 5 to View Reports");
                Console.Write("Press 6 to Exit\nEnter Your choice:");
                choice = Console.ReadLine();
                if (choice == "1")
                {
                    Customer c = InuptNewAccountInfo();
                    ATMUser user = new();
                    user.LoginName = c.LoginName;
                    user.PinCode = c.PinCode;
                    user.IsAdmin = 0;
                    user.Status = c.Status;
                    ValidateAndRegisterUser(c, ATMView.UserInputValidation(user), user);
                }
                else if (choice == "2")
                {
                    Tuple<int, bool> t = InputAccountNum();
                    if (t.Item2)
                    {
                        Customer c = AdminBussinessLogic.ValidateAccountNumber(t.Item1);
                        if (c != null)
                        {
                            Console.Write("You wish to delete the account held by " + c.HolderName + " If this information is correct please re - enter the account number: ");
                            string input = Console.ReadLine();
                            bool success = int.TryParse(input, out int number);
                            if (!success)
                            {
                                Console.ForegroundColor = ConsoleColor.Red;
                                Console.WriteLine("Invalid Account number!");
                                Console.ResetColor();
                                continue;
                            }
                            else if (number != c.AccountNum)
                            {
                                Console.ForegroundColor = ConsoleColor.Red;
                                Console.WriteLine("Account Number MisMatched");
                                Console.ResetColor();
                                continue;
                            }
                        }
                        else
                        {
                            Console.ForegroundColor = ConsoleColor.Red;
                            Console.WriteLine("No Such Account Exist!");
                            Console.ResetColor();
                            continue;
                        }
                        Console.ForegroundColor = ConsoleColor.Red;
                        if (AdminBussinessLogic.VerifyDeletion(c))
                        {
                            Console.WriteLine("Account Deleted!");
                        }
                        else
                            Console.WriteLine("Account Not Found!");
                        Console.ResetColor();
                    }
                    else
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        Console.WriteLine("Invalid Account Number!");
                        Console.ResetColor();
                    }
                }
                else if (choice == "3")
                {
                    Tuple<int, bool> t = InputAccountNum();
                    if (t.Item2)
                    {
                        Customer c = AdminBussinessLogic.ValidateAccountNumber(t.Item1);
                        if (c != null)
                        {
                            string Heading = string.Format("{0,-10}\t{1,-10}\t{2,-10}\t{3,-10}\t{4,-10}\t{5,-10}", "Account #", "User Id", "Holder's Name", "Type", "Balance", "Status");
                            Console.ForegroundColor = ConsoleColor.Yellow;
                            Console.WriteLine(Heading);
                            Console.ResetColor();
                            PrintCustomer(c);
                            Console.WriteLine("Enter fileds you want to update");
                            Customer updated = InputUpdateParameters();
                            Console.ForegroundColor = ConsoleColor.Red;
                            if (updated.PinCode.Length >= 5 || updated.PinCode.Length == 0)
                            {
                                int UpdateRes = AdminBussinessLogic.UpdateAccount(c, updated);
                                if (UpdateRes == 1)
                                {
                                    Console.ForegroundColor = ConsoleColor.Green;
                                    Console.WriteLine("Account Updation Successful!");
                                }
                                else if (UpdateRes == 0)
                                    Console.WriteLine("Account Updation FAILED!");
                                else if (UpdateRes == 2)
                                    Console.WriteLine("Invalid status!");
                                else if (UpdateRes == -1)
                                    Console.WriteLine("Login Name already taken. You can't update to " + updated.LoginName + ".");
                            }
                            else
                                Console.WriteLine("PinCode must be at least 5 digit!");
                        }
                        else
                        {
                            Console.ForegroundColor = ConsoleColor.Red;
                            Console.WriteLine("No Such Account Exist!");
                        }
                    }
                    else
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        Console.WriteLine("Invalid Account Number!");
                    }
                    Console.ResetColor();
                }
                else if (choice == "4")
                {
                    Customer c = InuptSearchCriteria();
                    bool searchResult = ValidateSearchParameters(c);
                    if (searchResult)
                    {
                        List<Customer> list = AdminBussinessLogic.ExecuteSearchQuery(c);
                        if (list.Count <= 0)
                        {
                            Console.ForegroundColor = ConsoleColor.Red;
                            Console.WriteLine("No Matching Record Found!");
                            Console.ResetColor();
                            continue;
                        }
                        string Heading = string.Format("{0,-10}\t{1,-10}\t{2,-10}\t{3,-10}\t{4,-10}\t{5,-10}", "Account ID", "User ID", "Holder's Name", "Type", "Balance", "Status");
                        Console.ForegroundColor = ConsoleColor.Yellow;
                        Console.WriteLine(Heading);
                        Console.ResetColor();
                        foreach (Customer cus in list)
                            PrintCustomer(cus);
                    }
                }
                else if (choice == "5")
                {
                    Console.WriteLine("Specify Report Type\n1- Accounts By Amount\n2- Accounts By Date");
                    string reportType = Console.ReadLine();
                    PrintReports(reportType);
                }
                else if (choice == "6")
                    Environment.Exit(0);
                else
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("Invalid Choice");
                    Console.ResetColor();
                }
            }
        }
        private static Tuple<int, bool> InputAccountNum()
        {
            Console.Write("Enter Account Number ");
            string input = Console.ReadLine();
            bool success = int.TryParse(input, out int AccountNumber);
            return new Tuple<int, bool>(AccountNumber, success);
        }
        //print the specific details of customer 
        public static void PrintCustomer(Customer c)
        {
            string status = c.Status == 1 ? "Active" : "Disabled";
            string str = string.Format($"{c.AccountNum,-10}\t{c.UserID,-10}\t{c.HolderName,-10}\t{c.Type,-10}\t{c.Balance,-10}\t{status,-10}");
            Console.WriteLine(str);
        }
        private static void PrintReports(string reportType)
        {
            if (reportType == "1")
            {
                Console.WriteLine("Enter Minimum Amount");
                string input = Console.ReadLine();
                bool success = int.TryParse(input, out int minAmount);
                if (!success || minAmount < 0)
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("Inavlid Minimum Amount!");
                    Console.ResetColor();
                    return;
                }
                Console.WriteLine("Enter Maximum Amount");
                input = Console.ReadLine();
                success = int.TryParse(input, out int maxAmount);
                if (!success || maxAmount < 0)
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("Inavlid Maximum Amount!");
                    Console.ResetColor();
                    return;
                }
                Query q = new();
                q.IntA = minAmount;
                q.IntB = maxAmount;
                List<Customer> list = AdminBussinessLogic.BalanceBasedReport(q);
                if (list.Count <= 0)
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("No Matching Record Found!");
                    Console.ResetColor();
                    return;
                }
                string Heading = string.Format("{0,-10}\t{1,-10}\t{2,-10}\t{3,-10}\t{4,-10}\t{5,-10}", "Account ID", "User ID", "Holder's Name", "Type", "Balance", "Status");
                Console.ForegroundColor = ConsoleColor.Yellow;
                Console.WriteLine(Heading);
                Console.ResetColor();
                foreach (Customer cus in list)
                    PrintCustomer(cus);

            }
            else if (reportType == "2")
            {
                Console.ForegroundColor = ConsoleColor.Red;
                Console.WriteLine("Strictly follow dd/MM/yyyy format!");
                Console.ResetColor();
                Console.WriteLine("Enter Starting Date: ");
                string inputStartDate = InputDate();
                Console.WriteLine("Enter Ending Date: ");
                string inputEnd = InputDate();
                if (inputStartDate == "" || inputEnd == "")
                    return;
                Query q = new();
                q.StrA = inputStartDate;
                q.StrB = inputEnd;
                List<Transaction> list = AdminBussinessLogic.DateBasedReport(q);
                if (list.Count <= 0)
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("No Matching Record Found!");
                    Console.ResetColor();
                    return;
                }
                string Heading = string.Format("{0,-10}\t{1,-10}\t{2,-10}\t{3,-10}\t{4,-10}", "TransactionType", "User ID", "HoldersName", "Amount", "Date");
                Console.ForegroundColor = ConsoleColor.Yellow;
                Console.WriteLine(Heading);
                Console.ResetColor();
                foreach (Transaction t in list)
                {
                    string str = string.Format($"{t.TransactionType,-10}\t{t.UserId,-10}\t{t.HolderName,-10}\t{t.Amount,-10}\t{t.Date,-10}");
                    Console.WriteLine(str);
                }
            }
            else
            {
                Console.ForegroundColor = ConsoleColor.Red;
                Console.WriteLine("Invalid Choice!");
                Console.ResetColor();
            }
        }
        //Input data for new account
        public static Customer InuptNewAccountInfo()
        {
            Customer c = new();
            Console.Write("Enter Login Name ");
            c.LoginName = Console.ReadLine();
            Console.Write("Enter Pin Code ");
            c.PinCode = Console.ReadLine();
            Console.Write("Enter Holder's Name ");
            c.HolderName = Console.ReadLine();
            Console.Write("Enter Account Type(Savings,Current) ");
            c.Type = Console.ReadLine();
            Console.Write("Enter Starting Balance ");
            string input = Console.ReadLine();
            bool success = int.TryParse(input, out int number);
            if (success)
                c.Balance = number;
            else
                c.Balance = -1;
            Console.Write("Enter Account Status(1/0 for active/disabled) ");
            input = Console.ReadLine();
            if (int.TryParse(input, out int id))
                c.Status = id;
            else
                c.Status = -1;
            return c;
        }
        //Input data to search on basis of it
        public static Customer InuptSearchCriteria()
        {
            Customer c = new();
            Console.Write("Enter Account ID ");
            string input = Console.ReadLine();
            bool success = int.TryParse(input, out int id);
            if (success)
                c.AccountNum = id;
            else if (input != string.Empty)
                c.AccountNum = -1;
            Console.Write("Enter User ID ");
            input = Console.ReadLine();
            success = int.TryParse(input, out id);
            if (success)
                c.UserID = id;
            else if (input != string.Empty)
                c.UserID = -1;
            Console.Write("Enter Holder's Name ");
            c.HolderName = Console.ReadLine();
            Console.Write("Enter Account Type(Savings,Current) ");
            c.Type = Console.ReadLine();
            Console.Write("Enter Balance ");
            input = Console.ReadLine();
            success = int.TryParse(input, out int number);
            if (success)
                c.Balance = number;
            else if (input != string.Empty)
                c.Balance = -1;
            Console.Write("Enter Account Status(1/0 for active/disabled) ");
            input = Console.ReadLine();
            if (int.TryParse(input, out id))
                c.Status = id;
            else if (input == string.Empty)
                c.Status = Int32.MinValue;
            else
                c.Status = -1;
            return c;
        }
        public static bool ValidateSearchParameters(Customer c)
        {
            Console.ForegroundColor = ConsoleColor.Red;
            bool success = true;
            if (c.UserID == -1)
            {
                Console.WriteLine("Inavlid User Id!");
                success = false;
            }
            if (c.AccountNum == -1)
            {
                Console.WriteLine("Inavlid Account ID!");
                success = false;
            }
            //if type is not blank and other than savings and current return -1
            if (!(c.Type.ToLower() == "savings" || c.Type.ToLower() == "current") && c.Type.Length > 0)
            {
                Console.WriteLine("Inavlid Account Type!");
                success = false;
            }
            //if status is not left blank and other than 0 or 1 return 0
            if (!(c.Status == 1 || c.Status == 0) && c.Status != Int32.MinValue)
            {
                Console.WriteLine("Inavlid Account Status!");
                success = false;
            }
            if (c.Balance == -1)
            {
                Console.WriteLine("Inavlid Account Balance!");
                success = false;
            }
            Console.ResetColor();
            return success;
        }
        //Checking validatiy of account information
        public static void ValidateAndRegisterUser(Customer c, bool validUser, ATMUser user)
        {
            bool validInfo = true;
            Console.ForegroundColor = ConsoleColor.Red;
            if (c.Balance < 0)
                Console.WriteLine("Invalid Balance!");
            if (c.Status != 0 && c.Status != 1)
            {
                Console.WriteLine("Invalid Status!");
                validInfo = false;
            }
            if (!(c.Type.ToLower() == "savings" || c.Type.ToLower() == "current"))
            {
                Console.WriteLine("Inavlid Account type!");
                validInfo = false;
            }
            if (c.HolderName.Length <= 0)
                Console.WriteLine("HolderName Must Exist!");
            Console.ResetColor();
            Console.ForegroundColor = ConsoleColor.Green;
            if (c.Balance < 0 || c.HolderName.Length <= 0)
                validInfo = false;
            if (validInfo)
            {
                if (validUser && ATMBussinessLogic.AdminRegistration(user)) //registering customer in user table
                {
                    c.LoginName = user.LoginName;
                    c.PinCode = user.PinCode;
                    if (AdminBussinessLogic.AddCustomer(c)) //reistering customer in [Customer] table
                    {
                        user = CustomerBussinessLogic.GetUserWithId(user);
                        c = CustomerBussinessLogic.GetCustomer(user);
                        Console.ForegroundColor = ConsoleColor.Green;
                        Console.WriteLine("Account Successfully Created – the account number assigned is:" + c.AccountNum);
                        Console.ResetColor();
                    }
                    else
                        Console.WriteLine("Account Creation Failed!");
                }
            }
            Console.ResetColor();
        }
        public static Customer InputUpdateParameters()
        {
            Customer c = new();
            Console.Write("Enter Login Name ");
            c.LoginName = Console.ReadLine();
            Console.Write("Enter Pin Code ");
            c.PinCode = Console.ReadLine();
            Console.Write("Enter Holder's Name ");
            c.HolderName = Console.ReadLine();
            Console.Write("Enter Account Status(1/0 for active/disabled) ");
            string input = Console.ReadLine();
            if (int.TryParse(input, out int id))
                c.Status = id;
            else if (input == "")
                c.Status = Int32.MinValue;
            else
                c.Status = -1;
            return c;
        }
        //take date input with exception handling
        private static string InputDate()
        {
            string inputStart = Console.ReadLine();
            try
            {
                DateTime startDate = DateTime.ParseExact(inputStart, "dd/MM/yyyy", CultureInfo.InvariantCulture);
            }
            catch (FormatException)
            {
                Console.ForegroundColor = ConsoleColor.Red;
                Console.WriteLine("Inavlid Date Format!");
                Console.ResetColor();
                return "";
            }
            return inputStart;
        }
    }
}
