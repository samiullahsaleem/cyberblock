//Programm to store 10 numbers in file
#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ofstream File;
	File.open("Data.txt");
	
	cout<<"Writing the data to file"<<endl;
	
	
	for(int count=1;count<=10;count++)
	{
	cout<<count<<endl;
	File<<count;	
	}
	
	File.close();
	cout<<"Done"<<endl;
	return 0;
}
