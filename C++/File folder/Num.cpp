#include <iostream>
#include <fstream>
using namespace std;
int main()
{
int x=10;
int y=20;
int z=30;

         ofstream  File;
         File.open("Num.txt");

	   File<<x<<endl;
	   File<<y<<endl;
	   File<<z<<endl;

         File.close();
      
         return 0;
}
