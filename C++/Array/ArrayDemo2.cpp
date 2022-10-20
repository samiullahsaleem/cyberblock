

#include<iostream>
using namespace std;

int main()
{
	
	int size;
	cout << "Please enter the strenght of students in your class : ";
	cin >> size;
	
	// interger array of user defined size
	int marks[size];

	// assigning values
	for(int i=0; i<size; i++)
	{
		cout << "Please enter the marks of Student " << (i+1) << ": ";
		cin >> marks[i]; 
	}
	
	// accessing array values	
	for(int i=0; i<size; i++)
	{
		cout << "marks[" << i << "]: "  << marks[i] << endl;
	}
	
	return 0;
}
