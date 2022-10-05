using System;
using ATMBussinessObjects;
using ATMBussinessLogicLayer;
using System.Collections.Generic;
namespace ATMPresentationLayer
{
    public class ATMView
    {
        public static void DisplayMenu()
        {
            //LoginTries list tracks the wrong pinCode inputs for each login attempt 
            List<Tuple<string, int>> LoginTries = new();
            string choice="";
            while (choice != "3")
            {
                Console.WriteLine("Press 1 to Login");
                Console.WriteLine("Press 2 to Register New Admin");
                Console.Write("Press 3 to Exit\nEnter Your choice:");
                choice = Console.ReadLine();
                if (choice == "1")
                {
                    ATMUser user = InputLoginCredentials();
                    Tuple<int, Customer> t = ATMBussinessLogic.LoginVerification(user);
                    if (t.Item1 == 1)
                    {
                        Console.ForegroundColor = ConsoleColor.Green;
                        Console.WriteLine("Login Successful!");
                        Console.ResetColor();
                        if (t.Item2.IsAdmin == 1)
                            AdminView.DisplayAdminMenu();
                        else
                            CustomerView.DisplayCustomerMenu(user);
                    }
                    else if (t.Item1 == 0)
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        LoginTries.Add(new Tuple<string,int>(user.LoginName,1));
                        //check if count of wrong pincode inputs exceeds 3 or not
                        int tries = CheckTriesCount(LoginTries, user.LoginName);
                        Console.WriteLine("Wrong PinCode! You have made "+ tries + " Tries.");
                        if(tries >= 3)
                        {
                            if(ATMBussinessLogic.DisableUser(t.Item2))
                            Console.WriteLine("Your Account is Disabled.Contact Admin.");
                            Console.ResetColor();
                            break;
                        }
                        Console.ResetColor();
                    }
                    else if (t.Item1 == -1)
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        Console.WriteLine("User Don't Exist! Try another UserName.");
                        Console.ResetColor();
                    }
                    else if (t.Item1 == 2)
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        Console.WriteLine("This User is Disabled.");
                        Console.ResetColor();
                    }
                }
                else if (choice == "2")
                    RegisterNewAdmin();
                else if (choice == "3")
                    Environment.Exit(0);
                else
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("Invalid Choice");
                    Console.ResetColor();
                }
            }
        }
        /// <summary>
        /// register a new admin and add in db if valid credentials are provided
        /// </summary>
        /// <param name="IsAdmin">if not specified, user is admin by default</param>
        public static void RegisterNewAdmin(int IsAdmin = 1)
        {
            ATMUser user = new();
            Console.Write("Enter Login Name ");
            string name = Console.ReadLine();
            Console.Write("Enter Pin Code ");
            string pinCode = Console.ReadLine();
            user.LoginName = name;
            user.PinCode = pinCode;
            user.IsAdmin = IsAdmin;
            user.Status = 1; //by default, account is active
            if (UserInputValidation(user))
            {
                if (ATMBussinessLogic.AdminRegistration(user))
                {
                    Console.ForegroundColor = ConsoleColor.Green;
                    Console.WriteLine("Congratulations! You registerd Successfully!");
                    Console.ResetColor();
                }
                else
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("Registration in DataBase Failed!");
                    Console.ResetColor();
                }
            }
        }
        //validate Login name and pincode of user
        public static bool UserInputValidation(ATMUser user)
        {
            if (user.LoginName.Length > 0 && user.PinCode.Length > 4 && ATMBussinessLogic.IsUniqueLoginName(user))
                return true;
            Console.ForegroundColor = ConsoleColor.Red;
            if (!ATMBussinessLogic.IsUniqueLoginName(user))
                Console.WriteLine("Login Name already Taken! Try an Other.");
            if (user.PinCode.Length <= 4 && user.PinCode.Length != 0)
                Console.WriteLine("PinCode must be at least 5 character long!");
            else if (user.LoginName == "" && user.PinCode == "")
                Console.WriteLine("LoginName and PinCode Can't be empty!");
            else if (user.LoginName == "")
                Console.WriteLine("LoginName can't be empty!");
            else if (user.PinCode.Length == 0)
                Console.WriteLine("PinCode Can't be empty!");
            Console.ResetColor();
            return false;
        }
        public static ATMUser InputLoginCredentials()
        {
            ATMUser user = new();
            Console.Write("Enter Login Name ");
            string name = Console.ReadLine();
            Console.Write("Enter Pin Code ");
            string pinCode = Console.ReadLine();
            user.LoginName = name;
            user.PinCode = pinCode;
            return user;
        }
        //return count of invalid login attempts
        private static int CheckTriesCount(List<Tuple<string, int>> LoginTries,string name)
        {
            int count = 0;
            foreach(Tuple<string,int> t in LoginTries)
            {
                if(t.Item1 == name)
                count++;
            }
            return count;
        }
    }
}
