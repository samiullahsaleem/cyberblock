/*********************************************************************
 * AMEENA           ADAPTER PATTERN             BSEF19M032
 *********************************************************************/

using System;
using System.Collections.Generic;
namespace Adapter
{
    class money
    {
        decimal m;
       public money(decimal m)
        {
            this.m = m;
        }
        public decimal getmoney()
        {
            return m;
        }
     
    }
    class MoneyChangerCounter
    {
        public money GetMoney(decimal d)
        {
            return new money(d) ;
        }
    }
   interface moneyExchangerAdapter
    {
        public money InDollar(decimal d);
        public money InRs(decimal r);



    }
    class moneyExchangerAdapterImp : moneyExchangerAdapter
    {
        MoneyChangerCounter m = new MoneyChangerCounter();
        public money InDollar(decimal d)
        {

            money mny=new money(d);
            return convert(mny);
        }
        public money InRs(decimal r)
        {
            return m.GetMoney(r);
        }
        public money convert(money mo)
        {
            //convert to rs
            decimal d= mo.getmoney()/170;
            return m.GetMoney(d);
           
        }
    }
 class Program
    {
        static void Main(string[] arg)
        {
            moneyExchangerAdapter adptr=new moneyExchangerAdapterImp();
         
            money inDollar = checkcurrency("dollar",adptr);
            money inRs = checkcurrency("rs", adptr);
            Console.WriteLine("*********Adapter converts dolllar into rupees*******\n");
            Console.WriteLine(" $500 =" + inDollar.getmoney() + " RS");
            Console.WriteLine(" 200Rs =" + inRs.getmoney() + " RS");

        }
       public static money checkcurrency(string str,moneyExchangerAdapter adptr)
        {
            if (str == "rs")  
            {
                return adptr.InRs(200);
            }
            return adptr.InDollar(500);
        }
    }
}
