

#include<iostream>
using namespace std;

void printInfo(int[] , int); //prototype
void modify(int[] , int); //prototype

int main()
{
	int size = 5;
	int marks[size];
	string name[size];
	
	for (int i=0; i<size; i++)
	{
		cout << "Please enter the name of student : " ;
		cin >> name[i];
		
		cout << "Please enter the marks of " << name[i] << " : ";
		cin >> marks[i];
	}
	
	printInfo(marks, size); // by ref
	modify(marks, size);
	
	// displaying after modification
	for(int i=0; i<size; i++)
		cout << marks[i];
	
		
	return 0;
}


void printInfo(int val[] , int sz)
{
	cout << "The control enters into printInfo() " << endl;
	
	for(int i=0; i<sz; i++)
		cout << val[i] << endl;
}


void modify(int val[] , int sz)
{
	cout << "The control enters into modify() " << endl;
	
	for(int i=0; i<sz; i++)
		val[i] = 100;
}
