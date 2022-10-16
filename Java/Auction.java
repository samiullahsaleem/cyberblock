import java.util.HashMap;
import java.util.ArrayList;
public class Auction
{
HashMap<Lot,Bidder> lot_with_bidder = new HashMap<Lot,Bidder>();
ArrayList<Bidder> bid=new ArrayList<Bidder>();
public Auction(Lot l, Bidder b)
{
	bid.add(b);
	lot_with_bidder.put(l,b);
}
public void Higest_value_bidder (Lot lot , Bidder q )
{
	bid.add(q);
	for(Bidder a:bid)
	{
		if(a.get_Bid_Prics()>lot_with_bidder.get(lot). get_Bid_Prics())
		{
			lot_with_bidder.replace(lot,a);
		}
	//	if(q.get_Bid_Prics()>lot_with_bidder.get(lot).get_Bid_Prics())
		//{
       //   lot_with_bidder.replace(lot,q);
		//}
	}
}
public void show_All()
{
	 System.out.println("List of all the bidders who bid against the lot 'Chair' \n");
	for (Bidder o:bid)
	{
		o.Display();
		System.out.println("----------------------------");
	}
}
public void Highest()
{
	for (Lot a:lot_with_bidder.keySet())
	{
		System.out.println("Lot name is :"+a.get_Lot_Name()+"\n"+"Descreptions is :"+ a.get_Description()+"\nThe highest bidder CNIC is "+lot_with_bidder.get(a).get_CNIC()+"\nThe highest bidder Name is "+lot_with_bidder.get(a).get_Name()+"\nThe bidding Amount was "+lot_with_bidder.get(a).get_Bid_Prics());
	}
}
public static void main(String [] ags)
{
	Lot l=new Lot("Chair","For Executive officers in good conditions");
	Auction obj =new Auction(l,(new Bidder("0900","ali",4000)));
	obj.Higest_value_bidder(l,(new Bidder("21191","Suffyan",6000)));
	obj.Higest_value_bidder(l,(new Bidder("34104","ahmed",5000)));
	obj.Higest_value_bidder(l,(new Bidder("223344-","saad",2000)));
	obj.show_All();
	obj.Highest();

}
}