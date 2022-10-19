//File reading and finding the sum
#include <iostream>
#include <fstream>
using namespace std;
int main(){
	ifstream File;
	File.open("Numbers.txt");
	int value1,value2,value3,sum;
	
	//open a file
	File>>value1;
	File>>value2;
	File>>value3;
	
	//close file
	File.close();
	
	cout<<"Numbers extracted from file : " <<value1<<" "<<value2<<" "<<value3<<endl;
	
	//Sum
	sum=value1+value2+value3;
	cout<<"sum: "<<sum<<endl;
	return 0;
	
}

