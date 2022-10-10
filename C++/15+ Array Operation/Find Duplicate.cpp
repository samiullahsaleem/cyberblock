#include<iostream>
using namespace std;

int main(){
    int arr[200], n, i, j;
    cout<<"Enter the total size of the array"<<endl;
    cin>>n;
    
    cout<<"Enter Elements"<<endl;
    for(i=0; i<n; i++){
        cin>>arr[i];
    }
    int count=0;
    cout<<"Repeating words are"<<endl;
    for(i=0; i<n; i++){
        for(j=i+1; j<n; j++){
            if(arr[i]==arr[j]){
                cout<<arr[j]<<' ';
            }
        }
    }
    
    return 0;
}