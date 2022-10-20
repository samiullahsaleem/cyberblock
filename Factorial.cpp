#include <iostream>
using namespace std;
int main()
{
	int x;
	cout << "Enter the number you want to find the factorial:";
	cin >> x;
	if (x == 0)
	{
		cout << "1";
	}
	else if (x > 0)
	{
		int fact = 1;
		for (int i = 1; i <= x; i++)
		{
			fact *= i;
		}
		cout << "Factorial of the number is:" << fact;
	}
	else
	{
		cout << "Number is invalid";
	}


}
