using ATMBussinessObjects;
using System;
using ATMDataAccessLayer;
using System.Collections.Generic;

namespace ATMBussinessLogicLayer
{
    public class AdminBussinessLogic
    {
        //delete account if valid accountNumber is provided
        public static bool VerifyDeletion(Customer c)
        {
            return ATMDataLayer.DeleteCustomer(c);
        }
        //update customer with the fields user haven't left blank
        public static int UpdateAccount(Customer old,Customer c)
        {
            ATMUser user = new();
            user.LoginName = c.LoginName;
            user.PinCode = c.PinCode;
            user.Id = old.UserID;
            if (!ATMBussinessLogic.IsUniqueLoginName(user))
                return -1;
            if (c.Status != 0 && c.Status != 1 && c.Status != Int32.MinValue)
                return 2;
            if(c.HolderName!="")
                old.HolderName=c.HolderName;
            if(c.Status > -1)
                old.Status=c.Status;
            if(c.LoginName != "")
                old.LoginName=user.LoginName;
            if (c.PinCode != "")
                old.PinCode = user.PinCode;
            return ATMDataLayer.UpdateCustomer(old) ? 1 :0;
        }
        //forms a query with the parameters which are not left blank to search customers
        public static List<Customer> ExecuteSearchQuery(Customer c)
        {
            bool fetch = false;
            string query="select * from [customer] inner join [User] on [Customer].UserID = [User].Id where";
            if(c.UserID>0)
                {query+= " [Customer].UserID = @uid AND";
                fetch =true;}
            if(c.AccountNum>0)
                {query+= " [Customer].AccountNum = @accNum AND ";
                fetch =true;}
            if(c.HolderName!="")
                {query += " [Customer].HolderName = @holder AND ";
                fetch =true;}
            if(c.Type!="")
                {query += " [Customer].Type = @type AND ";
                fetch =true;}
            if(c.Balance > 0)
                {query += " [Customer].Balance = @balance AND ";
                fetch =true;}
            if(c.Status > -1)
                {query += " [User].Status = @status AND ";
                fetch =true;}
            query+= fetch? " 1 = 1":" 1 = 0";
            Query q = new();
            q.QueryStr = query;
            return ATMDataLayer.SearchCustomers(q,c);
        }
        public static List<Customer> BalanceBasedReport(Query q)
        {
            q.QueryStr = "select * from [customer] inner join [User] on [Customer].UserID = [User].Id where Balance >= @minBalance and Balance <= @maxBalance";
            return ATMDataLayer.BalanceBasedReport(q);
        }
        public static List<Transaction> DateBasedReport(Query q)
        {
            q.QueryStr = "select * from [TransactionHistory] INNER JOIN [Customer] ON Customer.AccountNum = TransactionHistory.AccountNum";
            return ATMDataLayer.DateBasedReport(q);
        }
        public static bool AddCustomer(Customer c)
        {
            if (ATMDataLayer.AddCustomer(c))
                return true;
            return false;
        }
        //check if any customer with given account number exists or not
        public static Customer ValidateAccountNumber(int accountNum)
        {
            List<Customer> list = ATMDataLayer.ReadAccounts();
            foreach (Customer u in list)
            {
                if (u.AccountNum == accountNum)
                    return u;
            }
            return null;
        }
    }
}
