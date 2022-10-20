////Using  a loop to read the data
//#include <iostream>
//#include <fstream>
//using namespace std;
//int main()
//{
//	ifstream F;
// F.open("Saless.txt");
// int num;
// 
// //Extract data untill end
// while(F >>num)
// {
// 	cout<<num<<endl;
// 	
// }
// 
// //close file
// F.close();
// return 0;
//	
//}




#include<iostream>
#include <fstream>
using namespace std;
int main()
{
	ifstream F;
	F.open("Saless.txt");
	int num;
	while(F>>num)
	
	{
		cout<<num<<endl;
		
	}
	F.close();
	return 0;
}
