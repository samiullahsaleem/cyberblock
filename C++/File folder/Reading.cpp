//file reading
#include <iostream>
#include <fstream>
#include <string>
using namespace std;
int main()
{
	ifstream inputFile;
	inputFile.open("Friend.txt");
	string name;
	cout<<"Reading the data from the file"<<endl;
	
	inputFile>> name;
	cout<<name<<endl;
	
	inputFile>> name;
	cout<<name<<endl;
	
	inputFile>> name;
	cout<<name<<endl;
	
	inputFile.close();
	return 0;
}
