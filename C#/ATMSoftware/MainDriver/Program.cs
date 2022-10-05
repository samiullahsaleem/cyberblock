//BSEF19M012 - IQRA SARWAR
using System;
using ATMPresentationLayer;

namespace ATM_Software
{
    class Program
    {
        static void Main()
        {
            Console.BackgroundColor = ConsoleColor.Yellow;
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("`````~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Welcome To ATM Software! ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~`````");
            Console.ResetColor();
            //Displaying main menu to Login OR register as Admin
            ATMView.DisplayMenu();
        }
    }
}
