
#include<iostream>
using namespace std;

const int rows = 3;
const int cols = 4;
	
void getData(int[][cols], int);
void showData(int[][cols], int);
int sum(int[][cols], int);

int main()
{	
	int marks[rows][cols];
	
	getData(marks , rows);
	showData(marks , rows);
	int result = sum(marks , rows);
	
	return 0;
}



void getData(int data[][cols] , int rows)
{
	// initilization using user input
	for(int i=0; i<rows; i++)
	{
		for(int j=0; j<cols; j++)
		{
				cout << "Please enter value for marks[" << i << "]["<< j << "]: " ;
				cin >> data[i][j];
		}
		
	}
}



void showData(int data[][cols] , int rows)
{
	// Printing
	for(int i=0; i<rows; i++)
	{
		for(int j=0; j<cols; j++)
		{
				cout << "marks[" << i << "]["<< j << "]: "  << data[i][j] << endl;
		}
		
	}
}


int sum(int data[][cols] , int rows)
{
	int sum = 0;
	for(int i=0; i<rows; i++)
	{
		for(int j=0; j<cols; j++)
		{
				sum = sum + data[i][j];
		}
		
	}
	
	return sum;
}
