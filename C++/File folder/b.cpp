#include <iostream>
using namespace std;
int main()
{
	const int SIZE=5;
	int num0[SIZE]={5,6,7,8,10};
	int lowest;
	int count;
	lowest = num0[0];
	for(int i=0;i<SIZE;i++)
	{
		
	if(num0[i]<lowest)
	{
		lowest =num0[i];
	}
	
}
	cout<<lowest;
	return 0;
		



}

