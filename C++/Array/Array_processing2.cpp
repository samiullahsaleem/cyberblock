

#include<iostream>
using namespace std;

int main()
{
	// interger array
	int number[10];
	int counter = 0; // maintain the counting of properly initialized elements
	
	//initialize
	for(int i=0; i<5; i++)
	{
		cin >> number[i];
		counter++;
	}
	
	
	cout << "The value of counter : " << counter << endl;
	
	int sum=0;	
	for(int i=0; i<counter; i++)
	{
		sum = sum +  number[i];
	}
		cout << "sum: " << sum << endl;
		
	return 0;
}
