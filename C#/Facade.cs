/*****Facade pattetrn*****/

using System;
namespace FacadePattern
{
    public class WelcomeTobank
    {
        public WelcomeTobank()
        {
            Console.WriteLine("Welcome to bank");
           
        }
    } 
    public class AcountNumberCheck
    {
        private int accountNumber = 1234;
        public AcountNumberCheck()
        {

            Console.WriteLine("Check Account No");

        }
        public int getAccountNo()
        {
            return accountNumber;
        }
        public bool accountActive(int accNo)
        {
            if (accNo == getAccountNo())
                return true;
            else
                return false;
        }
    }
    public class SecurityCodeCheck
    {
        private int SecurityCode = 12;
        public int getSecurityCode()
        {
            return SecurityCode;
        }
        public bool IscodeCorrect(int SNo)
        {
            if (SNo == getSecurityCode())
                return true;
            else
                return false;
        }
    }
    public class FundsCheck
    {
        private decimal cashInAccount = 100.0m;
        public FundsCheck()
        {
            Console.WriteLine("Check funds");
        }
        public decimal getCashInAccount() { return cashInAccount; } 
        public void decreaseCashAccount(decimal cashWithdraw)
        {
            cashInAccount -= cashWithdraw;
        }
        public void increaseCashAccount(decimal cashDeposite)
        {
            cashInAccount += cashDeposite;
        }
        public Boolean EnoughMoney(decimal cashtoWithdraw)
        {
            if(cashtoWithdraw > getCashInAccount())
            {
                Console.WriteLine("Error you don't have enough money");
                return false;
            }
            else
            {
                decreaseCashAccount(cashtoWithdraw);
                Console.WriteLine("Withdrawal complete");
                return true;
            }
        }
        public void makeDeposite(decimal cashtodeposite)
        {
            increaseCashAccount(cashtodeposite);
            Console.WriteLine("deposite complete..current balance is " + getCashInAccount());

        }
    }
    public class bankAcountFacade
    {
        private int accountNo;
        private int securityCode;
        AcountNumberCheck acctchk;
        SecurityCodeCheck codechk;
        FundsCheck fundchk;
        WelcomeTobank wlc;
        public bankAcountFacade(int newacctno, int newSecurityCode)
        {
            accountNo = newacctno;
            securityCode = newSecurityCode;
            wlc=new WelcomeTobank();
            acctchk = new AcountNumberCheck();
            codechk = new SecurityCodeCheck();
            fundchk = new FundsCheck();



        }
        public int getAccountNo()
        {
            return accountNo;
        }
        public int getsecurityNo()
        {
            return securityCode;
        }
        public void widthdrawCash(decimal m)
        {
            if (acctchk.accountActive(getAccountNo()) && codechk.IscodeCorrect(getsecurityNo()) && fundchk.EnoughMoney(m))
            {
                Console.WriteLine("Transaction Complete");
            }
            else
                Console.WriteLine("Transaction InComplete");
        
        }


        public void depositeCash(decimal m)
        {
            if (acctchk.accountActive(getAccountNo()) && codechk.IscodeCorrect(getsecurityNo()) )
            {
                fundchk.makeDeposite(m);
                Console.WriteLine("Transaction Complete");
            }
            else
                Console.WriteLine("Transaction InComplete");

        }

    }
    class facade
    {
        static void Main(string[] args)
        {
            bankAcountFacade facade = new bankAcountFacade(1234,12);
            facade.depositeCash(132m);

        }
    }
}