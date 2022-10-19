

#include<iostream>
using namespace std;

int main()
{
	int marks[5];
	string name[5];
	
	for (int i=0; i<5; i++)
	{
		cout << "Please enter the name of student : " ;
		cin >> name[i];
		
		cout << "Please enter the marks of " << name[i] << " : ";
		cin >> marks[i];
		
	}
	
	for(int i=0; i<5; i++)
		cout << name[i] << "---" << marks[i] << endl;
		
	return 0;
}
