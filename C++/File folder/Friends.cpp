//file reading
#include <iostream>
#include <fstream>
#include <string>
using namespace std;
int main()
{
	ifstream inputFile;
	inputFile.open("Friends.txt");
	string name;
	cout<<"Reading the data from the file"<<endl;
	if(!inputFile.is_open())
	{
		cout<<"Error while opening file"<<endl;
	}
	else{
		getline(inputFile,name);
	cout<<name<<endl;
	getline(inputFile,name);
	cout<<name<<endl;
	
	getline(inputFile,name);
	cout<<name<<endl;
	
	inputFile.close();
	}
	
	return 0;
}
