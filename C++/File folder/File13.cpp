//use of break and continue statements
#include <iostream>
#include <cmath>
using namespace std;
int main()
{
	
//	double value;
//	char choice;
//	cout<<"Enter a number"<<endl;
//	cin>>value;
//	
//	for(int i=0;i<=10;i++)
//	{
//		cout<<value<<"Raised to the power of"<<i<<"is"<<pow(value,i)<<endl;
//		cout<<"Enter Q or q to stop or any other character to continue"<<endl;
//		cin>>choice;
//		if(choice=='Q' || choice=='q')
//		break;
//	}


double value;
char choice;
cout<<"Enter a number : "<<endl;
cin>>value;

for(int i=0;i<10;i++)
{
	cout<<value<<"raised to the power of "<<i<<" is "<<pow(value,i)<<endl;
	cout<<"Enter Q or quit to exit or any other key to continue"<<endl;
          
          cin>>choice;

	if(choice=='Q'|| choice=='q')
	{
		break;
	}

}
return 0;
}
