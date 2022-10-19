//Programm to check the file opening error
#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ifstream F;
	F.open("info.txt");
	int num;
	
	//check if input fiile exist or not
//	if(F)
//	{
//		while(F>>num)
//		{
//			cout<<num<<endl;
//		}
//	}
//	else{
//		cout<<"File opening error"<<endl;
//	}


if(F.fail())
{
	cout<"File opening error"<<endl;
	
}
else{
	cout<<"Continue"<<endl;
}
	return 0;
}
