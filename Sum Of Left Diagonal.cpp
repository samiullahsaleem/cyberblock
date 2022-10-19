#include<iostream>
using namespace std;
const int ROWS = 3;
const int COLS = 3; 
int main()
{
	int arr[ROWS][COLS],sum = 0;
	cout << "Enter the Nmubers Of Diagonal:" << endl;
	for (int i = 0; i < ROWS; i++)
	{
		for (int j = 0; j < COLS;j++)
		{
			cin >> arr[i][j];
		}
	}
	cout <<"Diagonal Matrix is:" << endl;
	for (int i = 0; i < ROWS; i++)
	{
		for (int j = 0; j < COLS;j++)
		{
			cout<<arr[i][j]<<" ";
		}
		cout << endl;
	}
	for (int i = 0; i < ROWS; i++)
	{
		for (int j = 0; j < COLS;j++)
		{
			if (i == j)
			{
				sum = sum + arr[i][j];
			}
		}

	}
	cout << "Sum Of Left Diagonal Elements:" << sum<<endl;
	return 0;
	

}