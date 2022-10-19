#include <iostream>
using namespace std;
void displayMessage();
int main()
{
cout<<"Main starting!!"<<endl;
for(int i=0; i<5; i++)
{
	displayMessage();
}
	cout<<"Back in main"<<endl;
	return 0;
}

void displayMessage()
{
	cout<<"Display message on screen!!!"<<endl;
}

