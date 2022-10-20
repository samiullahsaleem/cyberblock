#include<iostream>
using namespace std;
 int rows,col;
cout<<"enter the number of rows:"<<endl;
cin>>rows;
cout<<"enter the number of columns:"<<endl;
cin>>col;
int main()
{
	int arr[rows][col],sum = 0;
	cout << "Enter the Nmubers Of Diagonal:" << endl;
	for (int i = 0; i < rows; i++)
	{
		for (int j = 0; j < col;j++)
		{
			cin >> arr[i][j];
		}
	}
	cout <<"Diagonal Matrix is:" << endl;
	for (int i = 0; i < rows; i++)
	{
		for (int j = 0; j < cols;j++)
		{
			cout<<arr[i][j]<<" ";
		}
		cout << endl;
	}
	for (int i = 0; i < rows; i++)
	{
		for (int j = 0; j < col;j++)
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
