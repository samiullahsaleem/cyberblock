#include <iostream>
#include<string>
using namespace std;
void returnInteger(char ar[]);
int main()
{
	char string[50];
	cout << "Enter String= ";
	cin.getline(string, 50);
	returnInteger(string);
}
void returnInteger(char ar[])
{
	int a = 0;
	for (int i = 0; ar[i] != '\0'; i++)
	{
		if (ar[i] >= '0' && ar[i] <= '9')
		{
			ar[i] -= 48;
			a = (a * 10) + ar[i];
		}
	}
	cout << "Interger from the string is:";
	cout << a;
}
