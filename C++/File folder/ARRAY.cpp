#include <iostream>
using namespace std;
int main()

{
	const int LETTER=5;
	char letter[LETTER]={'a','b','c','d','e'};
	for(int i=0; i<LETTER; i++)
	{
		cout<<static_cast<int>(letter[i])<<" ";
	}
	
	return 0;
	
}

