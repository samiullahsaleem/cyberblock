#include<iostream>
#include<map>
#include <unordered_map>
using namespace std;

//Maps ,Ordered --> implemented using Red Black Trees
//File created October 4 ,2022 

int chap3()
{

	map<int, string> m;	//key-value pair is stored in maps  keys are unique
	//maps are not contiguos	
	//inserting values in maps takes O(log n) n=current size of map
	//time also depends on size of key so time complexity will be O(key.size() *  log n)
	m[2] = "Hamid";
	m[5] = "Saad";
	m[6] = "Ali";
	m.insert({ 4,"Ahmad" });

	//declaring iterator to print map values
	//auto it = m;
	for (auto &it : m) {
		cout << (it).first << '\t' << (it).second << endl;
	}


	int key;
	cout << "Enter key to find its value : ";
	cin >> key;
	auto x = m.find(key);	//find returns iterator 
	if (x == m.end()) 
		cout << "Element not found : " << endl;
	else
		cout << (*x).second << endl;	//O(log n)

	//removing item from map	O(log n)
	//erase can either take key or iterator to delete from map
	m.erase(3);
	auto tmp = m.find(4);
	if (tmp != m.end())
		m.erase(tmp);
	else
		cout << "Element not found ";

	//Problem Time
	//Given n no of strings print only unique strings in lexicographic order 
	map<string, int> vals;
	int n;
	cout << "Enter the no of strings : ";
	cin >> n;
	for (int i = 0; i < n; i++) {
		string in;
		cin >> in;
		//inserting values in map
		vals[in] = vals[in] + 1;
	}

	for (auto it : vals) {
		cout << it.first << '\t' << it.second << endl;
	}

	//unordered maps -> implemented using HashTables namespace = #include <unordered_map>
	unordered_map<int, string > um;
	//unordered maps - doesnt stores in sorted way
	um[2] = "Hamid";
	um[5] = "Saad";
	um[6] = "Ali";

	//insertion takes place in O(1)
	um.insert({ 4,"Ahmad" });





	return 0;
}
