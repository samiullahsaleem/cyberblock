#include<iostream>
#include<algorithm> // for reverse function of string
#include<string>
using namespace std;
int main()
{
    string str;
    cout<<"Enter the Sentence : "<<endl;
    getline(cin,str);
    for (int end=0,start=0;end<=str.size();end++)
    {
        if(str[end]==' ' || str[end]=='\0')
        {
            reverse(str.begin()+start,str.begin()+end);
            start = end+1;
        }
    }
    cout<<"The Sentence In Reverse Order is : "<<endl;
    cout<<str;
}