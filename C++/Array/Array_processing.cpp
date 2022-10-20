

#include<iostream>
using namespace std;

int main()
{
	// interger array of five elements
	int number[5] = {	15, 25, 35, 45, 55 };

	
	int value = number[2]++;
	cout << value << endl;	// ??? 35?

	for(int var:number)
		cout << var << endl;

	
	int index = 2;
	int value1 = number[index++];
	cout << value1 << endl;	
	
	return 0;
}
