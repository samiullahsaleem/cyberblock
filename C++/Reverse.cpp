#include <iostream>
using namespace std;
int main()
{
	int* ptr;
	int size;
	cout << "Enter the size : ";
	cin >> size;
	ptr = new int[size];
	for (int i = 0; i < size; i++)
	{
		cout << "Enter the element:";
		cin >> ptr[i];
	}
	for (int i = size-1; i >= 0; i--)
	{
		cout << ptr[i] << "\t";
	}
	delete[] ptr;
	ptr = nullptr;
	return 0;
}
