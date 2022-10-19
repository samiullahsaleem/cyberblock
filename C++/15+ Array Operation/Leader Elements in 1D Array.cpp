#include<iostream>
using namespace std;
int main()
{
	const int SIZE = 8;
	int arr[SIZE];
	cout << "Enter 8 elements Value " << endl;
	for (int i = 0; i < SIZE; i++)
	{
		cin >> arr[i];
	}
	for (int i = 0; i < SIZE; i++)
	{
		for (int j = i + 1; j < SIZE; j++)
		{
			if (arr[i] <= arr[j])
			{
				arr[i] = -1;
			}
		}
	}
	cout << "The leader Elements in Array are " << endl;
	for (int i = 0; i < SIZE; i++)
	{
		if (arr[i] != -1)
		{
			cout << arr[i] << " ";
		}
	}
	return 0;
}