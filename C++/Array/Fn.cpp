#include <iostream>
using namespace std;

void showManue()
{
	cout<<"This is Misbah's Fast Food Restaurant"<<endl;
	cout<<"Enter 1 for Ordering Burger"<<endl;
	cout<<"Enter 2 for Ordering Pizza"<<endl;
	cout<<"Enter 3 for Ordering Shawarma"<<endl;;
	cout<<"Enter 4 for Quit"<<endl;
}

void showPrice(int item_price,int quantity)
{
	int total_price = item_price * quantity;
	cout<<"The total price is:"<<total_price<<endl;
	
}

int main()
{
	int burger= 1;
	int pizza = 2;
	int shawarma = 3;
	int quit = 4;
	int choice; 
	int quantity;
	int price;
	
	int burger_rate = 80;
	int pizza_rate = 400;
	int shawarma_rate = 100;
	
	
	do 
	{
		showManue();
		cin>>choice;
		if(choice==1)
		{
			cout<<"HOW MANY BURGERS YOU WANT TO BUY?"<<endl;
			cin>>quantity;
			showPrice(burger_rate,quantity);
		}
		
		if(choice==2)
		{
			cout<<"HOW MANY PIZZAS YOU WANT TO BUY?"<<endl;
			cin>>quantity;
			showPrice(pizza_rate,quantity);
		}
		
		if(choice==3)
		{
			cout<<"HOW MANY SHAWARMAS YOU WANT TO BUY?"<<endl;
			cin>>quantity;
			showPrice(shawarma_rate,quantity);
		}
		
		
	}
	
	while(choice != 4);
	cout<<"Thankyou for selecting Misbah's Food items!!!"<<endl;
	return 0;
}
