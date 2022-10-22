#include<iostream>

using namespace std;

int main()
{
    int search(int [],int,int);
    int n,i,a[100],e,res;
    cout<<"Enter size of Array :: ";
    cin>>n;
    cout<<"\nEnter elements to the array :: \n";

    for(i=0;i<n;++i)
    {
        cout<<"\nEnter "<<i+1<<" element :: ";
        cin>>a[i];
    }
cout<<"\nEnter element to search :: ";
    cin>>e;

    res=search(a,n,e);

    if(res!=-1)
        cout<<"\nElement found at position "<<res+1<<"\n";
    else
        cout<<"\nElement is not found....!!!";

    return 0;
}

int search(int a[],int n,int e)
{
    int f,l,m;
    f=0;
    l=n-1;
    while(f<=l)
    {
        m=(f+l)/2;
        if(e==a[m])
            return(m);
        else
            if(e>a[m])
                f=m+1;
            else
                l=m-1;
    }

    return -1;
}