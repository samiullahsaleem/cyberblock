#include <iostream>
using namespace std;

struct fraction
{
	int numerator;
	int denominator;
};

fraction operator+(const fraction& left, const fraction right)
{
	fraction sum;
	int lcm;
	lcm = (left.denominator > right.denominator) ? left.denominator : right.denominator;
	while (1)
	{
		if (lcm % left.denominator == 0 && lcm % right.denominator == 0)
			break;
		lcm++;
	
	cout << lcm << endl;
	sum.denominator = lcm;
	sum.numerator = (left.numerator * (lcm / left.denominator)) + (right.numerator * (lcm / right.denominator));
	return sum;
}

int main()
{
	fraction f1, f2;
	cout << "enter first fraction (format : a/b) : ";
	cin >> f1.numerator;
	cin.ignore();
	cin >> f1.denominator;
	cout << "enter second fraction (format : a/b) : ";
	cin >> f2.numerator;
	cin.ignore();
	cin >> f2.denominator;
	fraction f3 = f1 + f2;
	cout << "Sum is : " << f3.numerator << "/" << f3.denominator << endl;
	return 0;
}