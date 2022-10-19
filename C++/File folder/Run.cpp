#include <iostream>
using namespace std;
int main()
{
const int NUM_FISH = 20;
int fish[NUM_FISH];
int x;
cout <<"user is going to enter how many fishes were caught by each fisherman "<<endl;
cout <<"enter fishes caught by fisherman"<<endl;
for (int i=0;i<20;i++)
{
	cin >>fish[i];
	//also can be done in this way
	//cin >>x;
	//fish[i]=x;
}
for(int i=0;i<20;i++)
{
	cout <<"fishes caught by "<<i+1<<" fisherman are "<<fish[i]<<endl;
}
return 0;
}
