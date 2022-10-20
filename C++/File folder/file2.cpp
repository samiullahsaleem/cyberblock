//This programm writes the data to the single line in the file
#include <iostream>
#include<fstream>
using namespace std;
int main()
{
	ofstream outputFile;
	outputFile.open("DemoFile1.txt");
	
	//Now writing the data to the file
	
	cout<<"Now writi9ing the data to the file"<<endl;
	
	//Write names to the  file
	outputFile<<"Misbah Aziz";
	outputFile<<"Tariq Aziz";
	outputFile<<"Danish Aziz";
	outputFile<<"Tanveer Aziz";
	
	//closing the file
	outputFile.close();
	cout<<"Done\n";
	return 0;
	
}

