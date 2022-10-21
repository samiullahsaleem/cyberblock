//check how many times the array is rotated 
//Time Complexity is O(n)

#include<iostream>
using namespace std;

int main()
{
	int n;
	cout << "Enter no of elements in array ";
	cin >> n;
	int* arr = new int[n];
	for (int i = 0; i < n; i++)
	{
		cin >> arr[i];
	}
	int min = arr[0];
	int count = 0;
	for (int i = 0; i < n; i++)
	{
		//technique used here is Linear Search
		if (min > arr[i])
		{
			count = i;
			break;
		}
	}

	cout << "Array Rotation is : " << count << endl;
	return 0;
}

//Muhammad Saad --> 06-03-22
