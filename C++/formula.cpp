#include <iostream>
using namespace std;
int main()
{
	int vi, vf, a, t;
	cout << "Enter initial velocity: ";
	cin >> vi;
	cout << "Enter acceleration: ";
	cin >> a;
	cout << "Enter time: ";
	cin >> t;
	vf = vi + a * t;
	cout << "The final velocity is " << vf;
	return 0;
}