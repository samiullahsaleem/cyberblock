//	Name: Sami Ullah Saleem
//	Section: Morning
//	Roll Number: BITF20M012
#include <iostream>
#include "Deque.h"
using namespace std;
int main()
{
	bool flag = true;
	int size;
	cout << "Enter the size of Deque: ";
	cin >> size;
	Deque d1(size);
	do
	{
		cout << "What would you like to do?" << endl;
		cout << "1. Insert Value at Front" << endl;
		cout << "2. Insert Value at Back" << endl;
		cout << "3. Remove Value from Front" << endl;
		cout << "4. Remove Value from Back" << endl;
		cout << "5. Display the Deque" << endl;
		cout << "6. Make the Deque Empty" << endl; 
		cout << "7. Exit" << endl;
		int n;
		cin >> n;
		while (n < 1 || n >7)
		{
			cout << "You Entered Invalid Value! Please Try Again!" << endl;
			cin >> n;
		}
		if (n == 7)
		{
			flag = false;
		}
		else if (n == 1)
		{
			int n1;
			cout << "What is the value you would like to insert at Front?" << endl;
			cin >> n1;
			d1.insertAtFront(n1);
		}
		else if (n == 2)
		{
			int n1;
			cout << "What is the value you would like to insert at Back?" << endl;
			cin >> n1;
			d1.insertAtBack(n1);
		}
		else if (n == 3)
		{
			int val1;
			bool flag1 = d1.removeFromFront(val1);
			if (flag1)
			{
				cout << val1 << " has been removed!" << endl;
			}
			else
			{
				cout << "The Deque is empty!" << endl;
			}
		}
		else if (n == 4)
		{
			int val1;
			bool flag1 = d1.removeFromBack(val1);
			if (flag1)
			{
				cout << val1 << " has been removed!" << endl;
			}
			else
			{
				cout << "The Deque is empty!" << endl;
			}
		}
		else if (n == 5)
		{
			d1.display();
			cout << endl;
		}
		else if (n == 6)
		{
			d1.makeEmpty();
		}
	}while(flag);
	




	return 0;
}