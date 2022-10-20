#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ofstream outputFile;
	outputFile.open("Demofile.txt");
	
	cout<<"Now writing the data to the file"<<endl;
	
	//write four name to the file
	outputFile<<"Studies\n";
	outputFile<<"Misbah Aziz\n";
	outputFile<<"Success\n";
	outputFile<<"Aims\n";
	outputFile<<"Focus\n";
	
	//close file
	outputFile.close();
	
	cout<<"Done"<<endl;
	return 0;
	
}
