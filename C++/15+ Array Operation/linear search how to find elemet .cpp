#include<iostream>
using namespace std;

int main(){
    int arr[200], i,size, n;
    int loc = -1;
    cout<<"Enter Size of the array"<<endl;
    cin>>size;
    cout<<"Enter value in the array"<<endl;
    for(i=0; i<size; i++){
        cin>>arr[i];
    }
    
    cout<<"The values in the array are:"<<endl;
    for(i=0; i<size; i++){
        cout<<arr[i]<<" ";
    }
    
    // finding the element in the array
    
    cout<<"Enter the value to find:";
    cin>>n;
    for(i=0; i<size; i++){
        if(arr[i]==n)
        loc=i;
    }
    if(loc==-1){
        cout<<"Value not found in the array"<<endl;
        
    }
    else{
        cout<<"Value found at index "<< loc;
    }
    return 0;
}