//Using the loop in writing the data
#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ofstream F;
	F.open("Saless.txt");
	int days;
	double sales;
	cout<<"Number of days"<<endl;
	cin>>days;
	
	for(int i=1;i<=days;i++)
	{
		cout<<"Sales for the day"<<i<<":"<<endl;
		cin>>sales;
		
		F<<sales<<endl;
		
		
	}
	
	F.close();
	cout<<"Sales amount is stored to the file"<<endl;
	return 0;
}
