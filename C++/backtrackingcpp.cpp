#include<iostream>
using namespace std;
void subset(int arr[],int n)
{
	for (size_t i = 0; i <(1<<n); i++)
	{
		for (size_t j = 0; j < n; j++)
		{
			if (i & (i << j))
			{
				cout << arr[j] << " ";
			}
		}
		cout << endl;

	}
}
int main()
{
	cout << "How many numbers enter: "; int n; cin >> n;
	int* arr= new int[n];
	for (size_t i = 0; i < n; i++)
	{
		cin >> arr[i];
	}
	subset(arr, n);
	delete[]arr;
	arr = 0;
}