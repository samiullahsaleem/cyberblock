//Geting the names of three friends and saving them in file
#include <iostream>
#include <fstream>
#include <string>
using namespace std;
int main()
{
	ofstream outputFile;
	outputFile.open("Friends.txt");
	string name1,name2,name3;
	cout<<"Writing the data to the file"<<endl;
	//Get the names of three friends
	cout<<"name1:"<<endl;
	getline(cin,name1);
	
	cout<<"name12:"<<endl;
	getline(cin,name2);
	
	cout<<"name3:"<<endl;
	getline(cin,name3);
	
	outputFile<<name1<<endl;
	outputFile<<name2<<endl;
	outputFile<<name3<<endl;
	
	outputFile.close();
	cout<<"Done";
	return 0;
	
	}
