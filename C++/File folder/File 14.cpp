
#include <iostream>
#include <fstream>
using namespace std;
int main()
{
	ifstream input;
	input.open("Numbers.txt");
	int num;
	while(input>>num)
	{
		cout<<num<<endl;
	}
	
	//close the file
	input.close();
	return 0;
	
}
