#include<iostream>
using namespace std;

main(){
	int inifuel, stop, Distance;
	cout<<"Enter size: ";
	cin>>stop;
	int *stops = new int[stop];
	int *kilom = new int[stop];
	int *fuel = new int[stop];

	for(int i=0;i<stop;i++){
		stops[i] = i+1; 
	}
	
	cout<<"Enter kilometers and fuel according to stops: \n";
	
	for(int i=0;i<stop;i++){
		cout<<"\nkilometers for stops:"<<stops[i]<<" ";
		cin>>kilom[i];
		cout<<"\nfuel for stops:"<<stops[i]<<" ";
		cin>>fuel[i];
	}
	
	cout<<"\n Enter Total Distance to Town: ";
	cin>>Distance;
	cout<<"\n Enter initial Fuel: ";
	cin>>inifuel;
	
	for(int i=0;i<stop;i++){
		kilom[i] = Distance - kilom[i]; 
	}
	
	for(int i=0;i<stop-1;i++)
	{
		for(int j=0;j<stop-i-1;j++)
		{
		 	if(kilom[j] > kilom[j+1]){
		 		swap(stops[j],stops[j+1]);
		 		swap(kilom[j],kilom[j+1]);
		 		swap(fuel[j],fuel[j+1]);
			 }
		}
	}
	
	cout<<"\n\n";	

	int remDis = 0, count=0;

	for(int i=0; i<stop; i++){
		if(i==0){
			remDis = Distance - kilom[i];
			Distance = Distance - kilom[i];
			inifuel = inifuel - kilom[i];	
		}else{
			if(remDis < kilom[i] )
			{
				Distance = Distance - remDis ;
				inifuel = inifuel - remDis ;
			}else{			
			remDis = Distance - ( kilom[i] - kilom[i-1] ) ;
			Distance = Distance - ( kilom[i] - kilom[i-1] );
			inifuel = inifuel - ( kilom[i] - kilom[i-1] ) ;	
			}
		}
		if(Distance==0)
		{
			cout<<"\nTotal Stops: "<<count;
			break;
		}
		inifuel = inifuel + fuel[i];
		count++ ;
	}	
}