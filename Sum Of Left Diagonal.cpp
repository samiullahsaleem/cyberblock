#include<iostream>
using namespace std;
const int ROWS = 3;
const int COLS = 3; 
int main()
{
	int arr[ROWS][COLS],sum_left = 0;
	int sum_right=0;
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
				sum_left = sum_left + arr[i][j];
			}
			if((i+j) == SIZE-1)
			{
				sum_right += matrix[i][j];
			}

	}
	cout << "Sum Of Left Diagonal Elements:" << sum_left <<endl;
	cout << "Sum Of Right Diagonal Elements:" << sum_right <<endl;
	return 0;
	

}
