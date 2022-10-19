

#include<iostream>
using namespace std;

int main()
{
	// interger array of five elements
	int marks[5];

	// assigning values
	cout << "Please enter the marks of student 1 : " ;
	cin >> marks[0] ;
	
	cout << "Please enter the marks of student 2 : " ;
	cin >> marks[1] ;
	
	cout << "Please enter the marks of student 3 : " ;
	cin >> marks[2] ;
	
	cout << "Please enter the marks of student 4 : " ;
	cin >> marks[3] ;
	
	cout << "Please enter the marks of student 5 : " ;
	cin >> marks[4] ;
	
	
	// accessing array values	
	cout << "marks[0] :" << marks[0] << endl; 
	cout << "marks[1] :" << marks[1] << endl; 
	cout << "marks[2] :" << marks[2] << endl; 
	cout << "marks[3] :" << marks[3] << endl; 
	cout << "marks[4] :" << marks[4] << endl; 

	
		
	cout << "size of marks array : " << sizeof(marks) << endl;
	
	return 0;
}
