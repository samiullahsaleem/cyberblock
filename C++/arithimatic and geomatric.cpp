#include<iostream>
using namespace std;
int main()
{
	int size;
	cout<<"Enter the size of the array: ";
	cin>>size;
	int* arr=new int [size];
	
	for(int i=0 ; i<size ; i++)
	{
		cin>>arr[i];
	}
	int temp = arr[1]-arr[0];
	int flag = 1;
	
	for(int i=2 ; i<size ; i++)
	{
		if(arr[i]-arr[i-1]!=temp)
		{
			flag=0;
			break;
		}
	}
	if(flag ==0)
	{
		int temp = arr[1]/arr[0];
		int f = 1;
		for(int i=2 ; i<size ; i++)
		{
			if(arr[i]/arr[i-1]!=temp)
			{
				f=0;
				break;
			}
		}
		if(f==0)
		{
			cout<<"Array is neither arithimatic nor geomatric!!!"<<endl;
		}
		else
		{
			cout<<"Array is geomatric..."<<endl;
		}
	}
	else
	{
		cout<<"The array is arithimatic..."<<endl;
	}

}