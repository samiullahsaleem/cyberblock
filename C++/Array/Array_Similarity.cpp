

#include<iostream>
using namespace std;

int main()
{
	// interger array
	int number[5] = {10, 20, 30, 40, 50};
	int data[5] = {10, 20, 30, 40, 60};
	
	cout << "Address of number : " << number << endl;
	cout << "Address of data : " << data << endl;
	
	// Match array references
	if(number == data)	
			cout << "The arrays are equal. " << endl;
	else
			cout << "The arrays are not equal." << endl;

	// Matching array elements one by one.
	bool flag = true;
	int index;
	for (int i=0; i<5; i++)
	{
		if(data[i] != number[i])
		{
			flag = false;
			index = i;
		}
	}
	
	if(flag)
		cout << "The array elements are equal. " << endl;
	else
		{
		cout << "The array elements are not equal." << endl;
		cout << "Mismatched index is : " << index << endl;	
		}
		
		
		
	return 0;
}
