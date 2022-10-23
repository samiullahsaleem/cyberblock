#include<iostream>
using namespace std;


void addition(int a, int b)
{
	cout << "ADDITION: " << endl;
	cout << a << " + " << b << " = " << a + b << endl;
}
void subtraction(int a, int b)
{
	cout << "SUBTRACTION: " << endl;
	cout << a << " - " << b << " = " << a - b << endl;
}
void multiplication(int a, int b)
{
	cout << "MULTIPLICATION: " << endl;
	cout << a << " * " << b << " = " << a * b << endl;
}
void division(int a, int b)
{
	cout << "DIVISION: " << endl;
	cout << a << " / " << b << " = " << a / b << endl;
}
void remainder(int a, int b)
{
	cout << "MODULOUS: " << endl;
	cout << a << " % " << b << " = " << a % b << endl;
}

int main()
{
	int a, b;
	char op;
	cout << "     Calculator    " << endl;
	cout << "Enter any value of a:" << endl;
	cin >> a;
	cout << "Enter any operator:" << endl;
	cin >> op;
	cout << "Enter any value of b:" << endl;
	cin >> b;
	if (op == '+')
	{
		addition(a, b);
	}
	else if (op == '-')
	{
		subtraction(a, b);
	}
	else if (op == '*')
	{
		multiplication(a, b);
	}
	else if (op == '/')
	{
		division(a, b);
	}
	else if (op == '%')
	{
		remainder(a, b);
	}
	else
	{
		cout << "INVALID Operator!!" << endl;
	}


	return 0;


}
