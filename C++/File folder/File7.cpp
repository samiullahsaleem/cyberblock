//Writing the data to the file
#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ofstream outputFile;
	outputFile.open("Sales.txt");
	int numOfdays;
	double sales;
	
	cout<<"For how many days do you have sales? "<<endl;
	cin>> numOfdays;
	
	for(int i=1;i<=numOfdays;i++)
	{
		cout<<"Sales for the day"<<i<<" "<<endl;
		cin>>sales;
		outputFile <<sales<<endl;
	}
	
	//close file
	outputFile.close();
	cout<<"Data written to the file"<<endl;
	return 0;
}

