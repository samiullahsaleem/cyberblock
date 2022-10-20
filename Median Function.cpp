#include<iostream>
#include<iomanip>
#include<string>
using namespace std;

double Find_Median(int* arr, const int size)
{
	if (size % 2 == 0)
	{
		int mid = size / 2;
		double average = (arr[mid] + arr[mid - 1]) / 2.0;
		return average;
	}
	else
	{
		int mid = size / 2;
		return arr[mid];
	}
}
int main()
{
		int* arr = nullptr;
		int size;
		cout << "Enter the size of an array" << endl;
		cin >> size;
		arr = new int[size];
		cout << "Start Entering Elements of Array"
			<< endl;
		for (int i = 0; i < size; i++)
		{
			cin >> arr[i];
		}
		cout << endl;
		cout << "Here is the Median of the Array: " << Find_Median(arr, size) << endl;
		delete[]arr;
		arr = nullptr;
		cout << "Press any key to continue.......";
		cin.ignore();
		cin.get();
}