

#include<iostream>
using namespace std;

int main()
{	
	// decalre + initialize
	int marks[5] = {50, 60, 70, 80, 90 };

	int index;	
	cout << "Please enter the roll number for which you want to see the marks " ;
	cin >> index ;

	if (index >=1 && index < 6)		// boundary check
	{
		cout << marks[index-1];
	}
	else
	{
		cout << "Error: You entered wrong roll number... Please try again" << endl;
	}
	
	
	return 0;
}
