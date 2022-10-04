using System;
using ATMBussinessObjects;
using ATMBussinessLogicLayer;
namespace ATMPresentationLayer
{
    public class CustomerView
    {
        public static void DisplayCustomerMenu(ATMUser user)
        {
            string choice = "";
            while(choice != "5")
            {
                Console.WriteLine("Press 1 to Withdraw Cash.");
                Console.WriteLine("Press 2 to Cash Transfer.");
                Console.WriteLine("Press 3 to Deposit Cash.");
                Console.WriteLine("Press 4 to Display Balance.");
                Console.Write("Press 5 to Exit\nEnter Your choice:");
                choice = Console.ReadLine();
                if(choice == "1")
                {
                    Console.Write("Press 1 for Fast Cash\nPress 2 for Normal Cash\nPlease select a mode of withdrawal:");
                    string mode = Console.ReadLine();
                    user = CustomerBussinessLogic.GetUserWithId(user);
                    Customer c = CustomerBussinessLogic.GetCustomer(user);
                    if(mode=="1")
                    {
                        Console.Write("->500\n->1000\n->2000\n->5000\n->10000\n->15000\n->20000\nSelect one of the denominations of money:");
                        string input = Console.ReadLine();
                        bool status = int.TryParse(input,out int amount);
                        if(!status || amount %500 != 0) //amount should be multiple of 500
                        {
                            Console.WriteLine("Invalid Amount!");
                            continue;
                        }
                        ExecuteWithdraw(c, amount);
                    }
                    else if(mode=="2")
                    {
                        Console.WriteLine("Enter the withdrawal amount:");
                        string input = Console.ReadLine();
                        bool status = int.TryParse(input,out int amount);
                        if(!status)
                        {
                            Console.WriteLine("Invalid Amount!");
                            continue;
                        }
                        ExecuteWithdraw(c, amount);
                    }
                    else
                    Console.WriteLine("Invalid Choice!");
                }
                else if(choice == "2")
                {
                    Transaction transfer = new();
                    Console.WriteLine("Enter amount in multiples of 500: ");
                    string input = Console.ReadLine();
                    bool status = int.TryParse(input,out int amount);
                    if(!status || amount %500 != 0)
                    {
                        Console.WriteLine("Invalid Amount!");
                        continue;
                    }
                    else
                    transfer.Amount = amount;
                    Console.WriteLine("Enter the account number to which you want to transfer:: ");
                    input = Console.ReadLine();
                    status = int.TryParse(input,out int accountNumber);
                    if(!status)
                    {
                        Console.WriteLine("Invalid Account Number!");
                        continue;
                    }
                    transfer.RecipientAccount = accountNumber;
                    user = CustomerBussinessLogic.GetUserWithId(user);
                    Customer receipt = CustomerBussinessLogic.GetCustomerByAccountNumber(transfer.RecipientAccount);
                    Customer c = CustomerBussinessLogic.GetCustomer(user);
                    if(receipt != null && c != null)
                    {
                        Console.Write("You wish to deposit Rs" + amount + " in account held by " + receipt.HolderName + ".\nIf this information is correct please ReEnter the account number:");
                        input = Console.ReadLine();
                        status = int.TryParse(input, out int accountNumber2);
                        if (!status)
                        {
                            Console.WriteLine("Invalid Account Number!");
                            continue;
                        }
                        else if (accountNumber != accountNumber2)
                        {
                            Console.WriteLine("Account Numbers Mis-Matched!");
                            continue;
                        }
                        else if (c.AccountNum == receipt.AccountNum)
                        {
                            Console.WriteLine("Can't transfer to your own account!");
                            continue;
                        }
                        if (!IsCreditEnough(c.Balance, transfer.Amount))
                            continue;
                        if (CustomerBussinessLogic.TransferTransaction(c, receipt, transfer))
                        {
                            Console.WriteLine("Cash Transfered Successfully!");
                            Console.WriteLine("Do you want to print Recreipt (Y/N)?:");
                            string consent = Console.ReadLine();
                            if (consent.ToLower() == "y")
                                PrintReceipt(c, "Cash Transfered : ", amount);
                            else if (consent.ToLower() == "n")
                                Console.WriteLine("Operation Cancelled!");
                            else
                                Console.WriteLine("Invalid Choice!");
                        }
                    }
                    else if(receipt == null)
                        Console.WriteLine("Receipient Don't Exist!");
                }
                else if (choice == "3")
                {
                    Console.WriteLine("Enter amount to deposite");
                    string input = Console.ReadLine();
                    bool status = int.TryParse(input, out int amount);
                    if (!status || amount <= 0)
                    {
                        Console.WriteLine("Invalid Amount");
                        continue;
                    }
                    user = CustomerBussinessLogic.GetUserWithId(user);
                    Customer c = CustomerBussinessLogic.GetCustomer(user);
                    Transaction deposit = new();
                    deposit.Amount = amount;
                    if(CustomerBussinessLogic.DepositTransaction(c,deposit))
                    {
                        Console.WriteLine("Cash Deposit Recorded successfully!");
                        Console.WriteLine("Do you want to print Recreipt (Y/N)?:");
                        string consent = Console.ReadLine();
                        if (consent.ToLower() == "y")
                            PrintReceipt(c, "Cash Deposited : ", amount);
                        else if (consent.ToLower() == "n")
                            Console.WriteLine("Operation Cancelled!");
                        else
                            Console.WriteLine("Invalid Choice!");
                    }
                }
                else if(choice == "4")
                {
                    user = CustomerBussinessLogic.GetUserWithId(user);
                    Customer c = CustomerBussinessLogic.GetCustomer(user);
                    PrintReceipt(c, null, 0);
                }
                else if(choice == "5")
                    Environment.Exit(0);
                else
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("Invalid Choice");
                    Console.ResetColor();
                }
            }
        }
        //check if credit is enough for specific amount withdrawal or transfer
        private static bool IsCreditEnough(int balance,int amount)
        {
            if(balance >= amount)
                return true;
            else
            {
                Console.ForegroundColor = ConsoleColor.Red;
                Console.WriteLine("Not Enough Credit!");
                Console.ResetColor();
                return false;
            }
        }
        private static void ExecuteWithdraw(Customer c,int amount)
        {
            Console.WriteLine("Are you sure you want to withdraw " + amount + " (Y/N)?:");
            string consent = Console.ReadLine();
            if (consent.ToLower() == "y")
            {
                Transaction withDraw = new();
                withDraw.Amount = amount;
                if (IsCreditEnough(c.Balance, withDraw.Amount))
                {
                    int transactionResult = CustomerBussinessLogic.WithDrawTransaction(c, withDraw);
                    if (transactionResult == 1)
                    {
                        Console.WriteLine("Cash Successfully Withdrawn!");
                        Console.WriteLine("Do you want to print Recreipt (Y/N)?:");
                        consent = Console.ReadLine();
                        if (consent.ToLower() == "y")
                            PrintReceipt(c, "withDrawn ", amount);
                        else if (consent.ToLower() == "n")
                            Console.WriteLine("Operation Cancelled!");
                        else
                            Console.WriteLine("Invalid Choice!");

                    }
                    else if (transactionResult == 0)
                        Console.WriteLine("WithDraw Failed");
                    else
                        Console.WriteLine("You have Already widthdrwan " + transactionResult + " Today. You can't withDraw " + amount + " More on same day.");

                }

            }
            else if (consent.ToLower() == "n")
                Console.WriteLine("Operation Cancelled!");
            else
                Console.WriteLine("Invalid Choice!");
        }
        //print receipt of respective transaction type
        private static void PrintReceipt(Customer c,string type,int amount)
        {
            Console.ForegroundColor = ConsoleColor.Yellow;    
            Console.WriteLine("Account # " + c.AccountNum);
            Console.WriteLine("Date " + DateTime.Now.ToShortDateString());
            if(type != null)
            Console.WriteLine(type + amount);
            Console.WriteLine("Balance " + c.Balance);
            Console.ResetColor();
        }
    }
}
