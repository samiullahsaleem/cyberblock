//BSEF19M012 - IQRA SARWAR
/// <summary>
/// "Transaction" is the Image of "TransactionHistory" table from database.
/// </summary>
namespace ATMBussinessObjects
{
    public class Transaction
    {
        public int Id { get; set; }
        public int AccountNum { get; set; }
        public string TransactionType { get; set; }
        //stores the account to which transaction is being made. i.e. In money transfer receipient account #
        public int RecipientAccount { get; set; }
        public int Amount { get; set; }
        public string Date { get; set; }
        public int UserId { get; set; }
        public string HolderName { get; set; }

    }
}
