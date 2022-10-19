//This program writes content to the file
#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ofstream outputFile;
	outputFile.open("Numbers.txt");
	int num1,num2,num3;
	
	cout<<"Taking the input to the file"<<endl;
	//Taking the input from user
	
	cout<<"Enter number1"<<endl;
	cin>>num1;
	
	cout<<"Enter number2"<<endl;
	cin>>num2;
	
	cout<<"Enter number3"<<endl;
	cin>>num3;
	
	
	//Write the numbers to the file
	outputFile<<num1<<endl;
	outputFile<<num2<<endl;
	outputFile<<num3<<endl;
	cout<<"The numbers are saved in the file"<<endl;
	
	//close file
	outputFile.close();
	cout<<"Done";
	return 0;
	
	
}
