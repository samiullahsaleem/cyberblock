#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	const int SIZE=5;
	int num[SIZE];;
	int count =0;
	ofstream outputFile;
	
	for(count=0;count<SIZE;count++)
	{
		cin>>num[count];
	}
	outputFile.open("Write.txt");
	for(count=0;count<SIZE;count++)
	{
		outputFile<<num[count]<<endl;
	}
	
	outputFile.close();
	cout<<"The numbers are stored in the file:"<<endl;
	
	
}
