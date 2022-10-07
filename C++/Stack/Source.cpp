// Name: Sami Ullah Saleem
// Roll Number: BITF20M012
// Section: Morning
#include <iostream>
#include "Stack.h"
using namespace std;
void addingLargeNumbers(char [], char[]);
int main()
{

	char in1[40];
	char in2[40];
	char ch;
	cout << "Please Enter your First Input: ";
	cin.get(in1, 40);
	cin.get(ch);
	cout << "Please Enter your Second Input: ";
	cin.get(in2,40);
	addingLargeNumbers(in1, in2);
	
	return 0;
}
void addingLargeNumbers(char sr1[40], char sr2[40])
{
	int sum = 0;
	int carry = 0;
	Stack s1,s2,s3;
	int v1 = 0, v2 = 0;
	int i = 0;
	while (i < strlen(sr1))
	{
		s1.push((sr1[i] - '0'));
		i++;
	}
	int j = 0;
	while (j < strlen(sr2))
	{
		s2.push((sr2[j] - '0'));
		j++;
	}
	while (!(s1.isEmpty()) || !(s2.isEmpty()))
	{
		s1.pop(v1);	
		s2.pop(v2);
		carry += v1 + v2;
		s3.push(carry % 10);	
		carry = carry / 10;
		v1 = 0;
		v2 = 0;
	}
	if (carry != 0)
	{
		s3.push(carry);
	}
	cout << "Sum Of Two Numbers is: ";
	while (!s3.isEmpty())
	{
		s3.pop(v1);
		cout << v1;
	}

}