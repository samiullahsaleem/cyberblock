#include<iostream>
#include<iterator>
#include<vector>
using namespace std;

//file created : October 4,2022
// https://www.github.com/MuhammadSaad000/STL
//contents :  Iterators , Range based for loops, Auto Keyword

int chap2()
{
	vector<int> v = { 2,3,5,7,9,11 };
	for (int i = 0; i < v.size(); i++) {
		cout << v[i] << '\t';
	}
	cout << endl;
	
	//declaring iterator 
	vector<int> ::iterator it = v.begin();
	
	//getting value of iterator 
	cout << "Value\tAddress" << endl;
	
	for (it = v.begin(); it != v.end() ; it++) {
		//dereferencing values and address using iterators 
		cout << *it << '\t' << &it << endl;
	}

	cout << "Accessing vector pairs using iterators " << endl;
	vector<pair<int, int>> pV ={{1,2},{2,4},{4,6}};
	vector<pair<int, int>> ::iterator ix ;

	for (ix = pV.begin(); ix != pV.end(); ix++) {
		cout << (*ix).first << '\t' << (*ix).second << endl;
	}


	//range base loop in cpp also valid for containers 
	int arr[5] = { 5,2,1,4,7 };
	for (int &val : arr) {	//->pointing value to data source(arr)
		val = val * val;	//finding square of elements and using pass by reference
		cout << val << '\t';
	}
	cout << endl;
	
	cout << arr[4] << endl;

	//auto keyword -> intellignetly declares datatype of variable at backend helpful while declaring large iterators
	
	auto a = 1.9;
	cout << a << endl;

	return 0;
}