

#include<iostream>
using namespace std;

int main()
{
	// interger array of five elements
	int number[5] = {	15, 25, 35, 45, 55 };

	int sum = 0;		
	for(int var:number)
	{
		sum = sum + var;
	}	
	cout << "Sum :" << sum << endl;
	cout << "Avg :" << sum/5.0 << endl;
	
	int add=0;
	for(int i=0; i<=4; i++)
	{
		add = add + number[i];
	}
	cout << "Add :" << add << endl;
	cout << "Avg :" << add/5.0 << endl;

	return 0;
}
