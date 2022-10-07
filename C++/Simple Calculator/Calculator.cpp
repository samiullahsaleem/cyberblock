#include<iostream>
#include "Operations.h"
#include "Maths.h"
using namespace std;
int main()
{
	char choice;

	int input;
	cout << "Enter 1 for add function" << endl;
	cout << "Enter 2 for subtraction function" << endl;
	cout << "Enter 3 for division function" << endl;
	cout << "Enter 4 for multiplication function" << endl;
	cout << "Enter 5 for takemod function" << endl;
	cout << "Enter 6 for takepower function" << endl;
	cout << "Enter 7 for takesquareroot function" << endl;
	cout << "Enter 8 for takesin function" << endl;
	cout << "Enter 9 for takecos function" << endl;
	cout << "Enter 10 for taketan function" << endl;
	cout << endl;
	double a, b;
	int a1, b1;
	do {
		cout << "Enter the number for which functionality you want to use calculator :";
		cin >> input;
		if (input < 7 && input > 0 && input != 5)
		{
			cout << "Enter 1st number : ";
			cin >> a;
			cout << "Enter 2nd number : ";
			cin >> b;
		}
		else if (input > 6 && input < 11)
		{
			cout << "Enter that number : ";
			cin >> a;
		}
		else if (input == 5)
		{
			cout << "Enter 1st number : ";
			cin >> a1;
			cout << "Enter 2nd number : ";
			cin >> b1;
		}
		else
			cout << "Enter valid number as above ";

		if (input == 1)
		{
			double sum;
			add(a, b);
			sum = add(a, b);
			cout << "sum of " << a << " and " << b << " is " << sum << endl;
		}
		if (input == 2)
		{
			double sub;
			sub = subtract(a, b);
			cout << "subtraction of " << a << " and " << b << " is " << sub << endl;
		}

		if (input == 3)
		{
			double div;
			div = divide(a, b);
			cout << "division of " << a << " and " << b << " is " << div << endl;
		}
		if (input == 4)

		{
			double mul;
			mul = multiply(a, b);
			cout << "multiplication of " << a << " and " << b << " is " << mul << endl;
		}
		if (input == 5)
		{
			double mod;
			mod = takemod(a1, b1);
			cout << "division of " << a << " and " << b << " is " << mod << endl;
		}
		if (input == 6)
		{
			double power;
			power = pow(a, b);
			cout << "power of " << a << " and " << b << " is " << power << endl;
		}
		if (input == 7)
		{
			double sqr;
			sqr = takesquareroot(a);
			cout << "squareroot of " << a << " is " << sqr << endl;
		}
		if (input == 8)
		{
			double sin_value;
			sin_value = takesin(a);
			cout << "sin value of " << a << " is " << sin_value << endl;
		}
		if (input == 9)
		{
			double cos_value;
			cos_value = takecos(a);
			cout << "sin value of " << a << " is " << cos_value << endl;
		}
		if (input == 10)
		{
			double tan_value;
			tan_value = takesin(a);
			cout << "tan value of " << a << " is " << tan_value << endl;
		}

		cout << "enter y to reuse your calculator ";
		cin >> choice;
	} while (choice == 'y' || choice == 'Y');




	return 0;
}