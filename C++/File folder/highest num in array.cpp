#include <iostream>
#include <iomanip>
using namespace std;
void doublevalue(const int [], int);
void showvalue(int [], int);
int main()
{
	const int SIZE=5;
	int num[SIZE]={1,2,3,4,5};
	showvalue(num,SIZE);
	cout<<endl;
	doublevalue(num,SIZE);
	cout<<endl;
	showvalue(num,SIZE);
	return 0;
}
void showvalue(int n[],int size)
{
	for(int i=0;i<size;i++)
	{
		cout<<n[i]<<endl;
	}
}

void doublevalue(const int n[],int size)
{
	
	for(int i=0;i<size;i++)
	{
		n[i]*= 2;
			cout<<n[i]<<endl;
	}

}
