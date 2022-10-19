#include <iostream>
using namespace std;
int main()
{
const int SIZE=3;
	int num[SIZE];
	cout<<"Input data"<<endl;
	for(int i=0;i<5;i++)
	{
	cin>>num[i];	
	}
	cout<<"Print array:"<<endl;
	for(int i=0;i<5;i++)
	{
		cout<<num[i]<<" ";
	}
}
