// CPP program to show the implementation of List
#include <iostream>
#include <iterator>
#include <list>
using namespace std;
  
// function for printing the elements in a list
void showlist(list<int> g)
{
    list<int>::iterator it;
    for (it = g.begin(); it != g.end(); ++it)
        cout << '\t' << *it;
    cout << '\n';
}
  
// Driver Code
int main()
{
  
    list<int> gqlist1, gqlist2;
    
    for (int i = 0; i < 10; ++i) {
        gqlist1.push_back(i * 2);//push at back
        gqlist2.push_front(i * 3);//push at front
    }
    cout << "\nList 1 (gqlist1) is : ";
    showlist(gqlist1); //This will print - 0    2    4    6    8    10    12    14    16    18
  
    cout << "\nList 2 (gqlist2) is : ";
    showlist(gqlist2);//This will print - 27    24    21    18    15    12    9    6    3    0

  
    cout << "\ngqlist1.front() : " << gqlist1.front();//0
    cout << "\ngqlist1.back() : " << gqlist1.back();//18
  
    cout << "\ngqlist1.pop_front() : ";
    gqlist1.pop_front(); //This will delete 0 from front
    showlist(gqlist1); //2    4    6    8    10    12    14    16    18
  
    cout << "\ngqlist2.pop_back() : ";
    gqlist2.pop_back();//This will delete 0 from back
    showlist(gqlist2);//27    24    21    18    15    12    9    6    3

  
    cout << "\ngqlist1.reverse() : ";
    gqlist1.reverse();//This will reverse the list
    showlist(gqlist1);// 18    16    14    12    10    8    6    4    2
  
    cout << "\ngqlist2.sort(): ";
    gqlist2.sort();//This will sort the list in increasing order
    showlist(gqlist2);//3    6    9    12    15    18    21    24    27
  
    return 0;
}
