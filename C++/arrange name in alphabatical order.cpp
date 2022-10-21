//this program arrange and display name in alphabatical order
#include<iostream>
#include<string>
using namespace std;
int main()
{
	string temp;
	string arr[5] = { "Zaid","Aslam","Mohammad","Ali","Farman" }; //name can also input from user or from file
	for (int i = 0; i < 4; i++)				//loop for arrange 
	{
		for (int j = i + 1; j < 5; j++)
		{
			if (arr[i] > arr[j])
			{
				temp = arr[i];
				arr[i] = arr[j];
				arr[j] = temp;
			}
		}
	}
	for (int i = 0; i < 5; i++)
	{
		cout << arr[i] << endl;
	}
}