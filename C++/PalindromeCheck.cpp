#include<iostream>
#include<string>
#include"stack.h"
#include"stack.cpp"
using namespace std;

bool palindromeCheck(string& palindrome)
{
	stack <char>palinStack;

	//storing all characters in stack from left to right ignoring punctuations 
	for (int i = 0; i < palindrome.length(); i++)
		if (palindrome[i] >= 'A' && palindrome[i] <= 'Z' || palindrome[i] >= 'a' && palindrome[i] <= 'z' || int(palindrome[i]) >= 48 && int(palindrome[i]) <= 57)
			palinStack.push(palindrome[i]);

	//storing all characters in stack from  right to left ignoring punctuations
	stack <char>palinStack1;
	for (int i = palindrome.length() - 1; i >= 0; i--)
		if (palindrome[i] >= 'A' && palindrome[i] <= 'Z' || palindrome[i] >= 'a' && palindrome[i] <= 'z')
			palinStack1.push(palindrome[i]);


	//comparing both stacks from top to bottom
	int check = 0;
	for (int i = 0; i <= palinStack.getTop(); i++)
	{
		char elem1 = palinStack.pop(), elem2 = palinStack1.pop();
		if (elem1 == elem2 || elem1 + 32 == elem2 || elem1 - 32 == elem2) //+- 32 to compare small and capital letters
			check = 0;
		else
		{
			check = 1;
			break;
		}
	}

	return check==0? true:false;

}
int main()
{
	string palindrome;
	cout << "Enter you string: ";
	getline(cin, palindrome); //for single word and full phrase
	bool palinCheck = palindromeCheck(palindrome);
	if (palinCheck == true)
		cout << "this is palindrome";
	else
		cout << "this is not palindrome";
	return 0;
}
