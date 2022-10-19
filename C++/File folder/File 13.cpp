//Programm to store 10 numbers in file
#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ofstream File;
	File.open("Data.txt");
	
	cout<<"Writuing the data to file"<<endl;
	
	
	for(int i=1;i<=10;i++)
	{
	cout<<i<<endl;
	File<<i;	
	}
	
	File.close();
	cout<<"Done"<<endl;
	return 0;
}
