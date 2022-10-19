//Program to find string is lapindromestring str;
#include<iostream>
#include<conio.h>
using namespace std;
int main()
{
	string str;
	cout << "Enter the string: ";
	cin >> str;
	int len = str.length();
	int flag = 1;
	for (int i = 0; i < len / 2; i++)
	{
		if (str[i] != str[len - i - 1])
		{
			flag = 0;
			break;
		}
	}
	if (flag == 1)
	{
		cout << "Lapindrome String" << endl;
	}
	else
	{
		cout << "Not a Lapindrome String" << endl;
	}
	return 0;
}