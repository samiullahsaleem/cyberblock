//BSEF19M012 - IQRA SARWAR
/// <summary>
/// "Customer" is the Image of "Customer" table from database.
/// </summary>
namespace ATMBussinessObjects
{
    public class Customer : ATMUser
    {
        public string HolderName { get; set; }
        public string Type { get; set; }
        public int Balance { get; set; }
        public int AccountNum { get; set; }
        public int UserID { get; set; }
    }
}
