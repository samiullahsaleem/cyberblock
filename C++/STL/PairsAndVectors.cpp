#include<iostream>
#include<vector>
using namespace std;

void printVector(vector<int>&);
void printPairVector(vector<pair<int, int>>&);
void VecOfVec(vector<vector<int>>& );

int main()
{
	//pair
	pair<int, string> p1 = { 2 ,"Ali" };
	pair<int, string > &p2 = p1;	//reference copying 

	cout << p1.first << " " << p1.second << endl;
	p1.first = 3;	//changing contents of p1 
	cout << p2.first << " " << p2.second << endl;

	//swapping pairs 
	pair<int, char> pair1 = { 1, 'a' };
	pair<int, char> pair2 = { 2,'b' };

	cout << "Before swap : \n";
	cout << " pair1 :  " << pair1.first << pair1.second << endl;
	cout << " pair2 :  " << pair2.first << pair2.second << endl;


	pair1.swap(pair2);

	cout << "After swap : \n";
	cout << " pair1 :  " << pair1.first << pair1.second << endl;
	cout << " pair2 :  " << pair2.first << pair2.second << endl;


	//vectors --> just like dynamic arrays
	vector<int> v;
	int n;
	cout << "Enter the size of array : ";
	cin >> n;
	cout << "Enter the array elements : " << endl;
	for (int i = 0; i < n; i++)
	{
		int x;
		cin >> x;
		v.push_back(x);
	}
	
	//declaring fixed size vector
	vector<int> v2(4,9);	//all 4 elements are initialized to 9 by default initialized with 0
	v2.push_back(10);

	//copying one vector to other 
	cout << "Before copying vector : \n";
	printVector(v2);
	v2 = v;
	
	cout << "After copying vector : \n";
	printVector(v);

	
	//vector of pairs 
	vector<pair<int, int>> pairVector;
	int size;
	cout << "Enter pair vector size : ";
	cin >> size;
	for (int i = 0; i < size; i++) {
		//input values of vector 
		int x, y;
		cin >> x >> y;
		//adding to vector 
		pairVector.push_back({ x, y });
	}

	cout << "Your pair vector is : " << endl;
	printPairVector(pairVector);

	//array of vectors 

	vector<int> vec[5];
	for (int i = 0; i < 5; i++) {	//outerloop ->for size of array of vectors
		int n;	//size of individual vector
		cout << "Enter size of container vector : ";
		cin >> n;
		cout << "Enter elements : ";
		for (int i = 0; i < n; i++) {
			int x;
			cin >> x;
			vec[i].push_back(x);
		}
	}

	//printing array of vectors -->Make only no of columns variable in context of 2d array
	cout << "You entered the following vectors : " << endl;
	for (int i = 0; i < 5; i++) {
		printVector(vec[i]);
	}



	//vector of vectors --> make both rows and cols variable
	vector<vector<int>> vec2;
	int N;
	cout << "Enter no of vectors (i.e rows of 2d array) : ";
	cin >> N;

	for (int i = 0; i < N; i++)	{
		int n;
		cout << "Enter no of entries of a " << i << "th vector : ";
		cin >> n;
		vector<int> temp;	//temporary vector to store values of single vector and push in vectors of vectors
		for (int i = 0; i < n; i++) {
			int x;
			cin >> x;
			temp.push_back(x);
		}
		vec2.push_back(temp);
	}

	//printing vector of vector 
	VecOfVec(vec2);


	return 0;

}


void printVector(vector<int>& v) {
	for (int i = 0; i < v.size(); i++)
	{
		cout << v[i] << '\t';
	}
	cout << endl;
}

void VecOfVec(vector<vector<int>>& v) {
	for (int i = 0; i < v.size(); i++){
		printVector(v[i]);
	}
}


void printPairVector(vector<pair<int, int>>& vec) {
	for (int i = 0; i < vec.size(); i++) {
		cout << vec[i].first << "\t" << vec[i].second << endl;
	}
}