#include <iostream>
using namespace std;
int main()
{
	int* ptr;
	int* rev;
	int size;
	cout << "Enter the size : ";
	cin >> size;
	ptr = new int[size];
	for (int i = 0; i < size; i++)
	{
		cout << "Enter the element:";
		cin >> ptr[i];
	}
	rev = new int[size];
	int x = 0;
	for (int i = size - 1; i >= 0; i--)
	{
		rev[x] = ptr[i];
		x++;
	}
	//reversed array
	for (int i = 0; i < size; i++)
	{
		cout << "reversed array : ";
		cout << rev[i] << endl;
	}
	delete[] ptr;
	ptr = nullptr;
	delete [] rev;
	rev= nullptr;
	return 0;
}
