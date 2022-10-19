

#include<iostream>
using namespace std;

int main()
{
	// string array of six elements
	string name[6] = {
					 "Marcin",
					 "Florian",
					 "Kristin", 
					 "Zeyd", 
					 "Kimiaki",
					 "Khan",
					 };

	//for(dataType rangeVariable:Array-name)
	for(string &var:name)	// accessing by reference
	{	
		var = "Hassan";
	}	
	
	// accessing by value
	for(string var:name)
	{	
		cout << var << endl;
	}
	return 0;
}
