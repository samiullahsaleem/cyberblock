/*
Tayyab Nasir
0218-BSCS-2019
E2
*/


#include<iostream>
#include<stack>
using namespace std;

stack<int> StackSort(stack<int> &s)
{
    stack<int> t;

    while(!s.empty()){
        int min = s.top();
        s.pop();

        while(!t.empty() && t.top() < min)
		{	
            s.push(t.top());
			t.pop();
        }

        t.push(min);
    }
    
    return t;
}

int main()
{
    stack<int> s;
    s.push(30);
    s.push(5);
    s.push(88);
    s.push(2);
    s.push(27);
    s.push(10);

    stack<int> t = StackSort(s);
    
	cout << "Sorted numbers are:\n"; 
  
    while (!t.empty()) 
    { 
        cout << t.top()<< " "; 
        t.pop(); 
    } 


    return 0;
}

