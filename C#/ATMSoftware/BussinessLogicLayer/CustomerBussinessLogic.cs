using ATMDataAccessLayer;
using ATMBussinessObjects;
using System;
using System.Collections.Generic;

namespace ATMBussinessLogicLayer
{
    public class CustomerBussinessLogic
    {
        public static bool DepositTransaction(Customer c, Transaction deposit)
        {
            deposit.AccountNum = c.AccountNum;
            deposit.Date = DateTime.Now.ToString("dd/MM/yyyy");
            deposit.TransactionType = "deposit";
            deposit.RecipientAccount = -1; //if recepient is not valid set -1
            c.Balance += deposit.Amount;
            return ATMDataLayer.DepositAmount(c, deposit);
        }
        public static bool TransferTransaction(Customer c, Customer receipt, Transaction transfer)
        {
            transfer.AccountNum = c.AccountNum;
            transfer.Date = DateTime.Now.ToString("dd/MM/yyyy");
            transfer.TransactionType = "transfer";
            receipt.Balance += transfer.Amount;
            c.Balance -= transfer.Amount;
            return ATMDataLayer.TransferCash(c, receipt, transfer);
        }
        /// <summary>
        /// if todays withdraw doesn't exceed 20,000 withdraw the demanded amount
        /// </summary>
        /// <param name="c">customer who wants to withdraw</param>
        /// <param name="widthDraw">conatins transaction details</param>
        /// <returns>true if withdraw successfull</returns>
        public static int WithDrawTransaction(Customer c,Transaction widthDraw)
        {
            int AmountDrawnToday = ATMDataLayer.AmountWithDrawnToday(c);
            if(AmountDrawnToday + widthDraw.Amount >= 20000)
                return AmountDrawnToday;
            widthDraw.AccountNum = c.AccountNum;
            widthDraw.RecipientAccount = -1; //if recepient is not valid set -1
            widthDraw.Date = DateTime.Now.ToString("dd/MM/yyyy");
            widthDraw.TransactionType = "widthDraw";
            c.Balance -= widthDraw.Amount;
            return ATMDataLayer.WithDrawAmount(c,widthDraw)?1:0;
        }
        /// <summary>
        /// given a user, compares the data to get user from table, user extracted from db 
        /// will have ID that will be used for identification purposes.
        /// </summary>
        /// <param name="user">a user with username & pincode</param>
        /// <returns>user with same data and id from table</returns>
        public static ATMUser GetUserWithId(ATMUser user)
        {
            List<ATMUser> list = ATMDataLayer.ReadUsers();
            foreach(ATMUser u in list)
            {
                if(u.LoginName==user.LoginName && u.PinCode == user.PinCode)
                    return u;
            }
            return null;
        }
        /// <summary>
        /// maps the user(parent,primary) to customer(child,scondary), where foriegn key matches
        /// </summary>
        /// <param name="user">given user whoes account is required</param>
        /// <returns>matching customer from child Customer table</returns>
        public static Customer GetCustomer(ATMUser user)
        {
            List<Customer> list = ATMDataLayer.ReadCustomers();
            foreach(Customer c in list)
            {
                if(c.UserID == user.Id)
                    return c;
            }
            return null;
        }
        /// <summary>
        /// returns customer with specific account number from list of customers 
        /// </summary>
        /// <param name="accNum">given account number</param>
        /// <returns>customer with given account number</returns>
        public static Customer GetCustomerByAccountNumber(int accNum)
        {
            List<Customer> list = ATMDataLayer.ReadCustomers();
            foreach(Customer c in list)
            {
                if(c.AccountNum == accNum)
                    return c;
            }
            return null;
        }
    }
}
