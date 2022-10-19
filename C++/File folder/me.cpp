#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	const int ARRAY_SIZE=10;
	int num[ARRAY_SIZE];
	int count =0;
	ifstream  inputFile;
	inputFile.open("person.txt");
	
	while(count<ARRAY_SIZE && inputFile>>num[count])
	{
	count++;	
	}
	
	inputFile.close();
	cout<<"Show array on screen"<<endl;
	
	for(count=0;count<ARRAY_SIZE;count++)
	{
		cout<<num[count]<<" "<<endl;

	}
	return 0;
	
}


