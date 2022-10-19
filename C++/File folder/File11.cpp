//specifying the fie name by user itself
#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ifstream F;
	string filename;
	int num;
	//get the filename by the user
	 cout << "Enter the filename";	`
	cin>>filename;
	F.open("filename");
	if (F)
	{
		while(F>>num)
		{
			cout<<num<<endl;
		}
	}
	else{
		cout<<"Error opening file"<<endl;
		
	}
	
	return 0;
	}
