#include<iostream>
using namespace std;

int main()
{
    int a[5]={1, 2, 3, 4, 5}, pos, i;
    for(i=0; i<5; i++){
        cout<<a[i]<<" ";
    }
    cout<<"Enter the position you want to remove"<<endl;
    cin>>pos;
    
    for(i=pos; i<5; i++)
    {
        a[i]=a[i+1];
    }
    for(i=0; i<4; i++){
        cout<<a[i]<<" ";
    }
    
    return 0;
}