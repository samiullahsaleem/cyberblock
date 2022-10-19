

#include<iostream>
using namespace std;

int main()
{
	// interger array of five elements
	int marks[5];

	// assigning values
	marks[0] = 85;
	marks[1] = 85;
	marks[2] = 85;
	marks[3] = 85;
	marks[4] = 85;
	marks[5] = 85;		// the indexes out of initialization-size
	marks[6] = 85;
	
	marks[10] = 85;
	
	
	// accessing array values	
	cout << "marks[0] :" << marks[0] << endl; 
	cout << "marks[1] :" << marks[1] << endl; 
	cout << "marks[2] :" << marks[2] << endl; 
	cout << "marks[3] :" << marks[3] << endl; 
	cout << "marks[4] :" << marks[4] << endl; 
	cout << "marks[5] :" << marks[5] << endl; 
	cout << "marks[6] :" << marks[6] << endl; 
	cout << "marks[7] :" << marks[7] << endl; 
	cout << "marks[8] :" << marks[8] << endl; 
	cout << "marks[9] :" << marks[9] << endl; 
	cout << "marks[10] :" << marks[10] << endl; 

	
		
	cout << "size of marks array : " << sizeof(marks) << endl;
	
	return 0;
}
