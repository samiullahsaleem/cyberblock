//BSEF19M012 - IQRA SARWAR

/// <summary>
/// "Query" is used to pass query and its possible parameters from bussiness logic layer to data access layer.
/// </summary>
namespace ATMBussinessObjects
{
    public class Query
    {
        public string QueryStr { get; set; }
        public string StrA { get; set; }
        public string StrB { get; set; }
        public int IntA { get; set; }
        public int IntB { get; set; }
    }
}
