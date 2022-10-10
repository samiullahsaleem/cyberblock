Moving all elements to one side of the array:

Algorithm for moving negative element to one side
1. First initialize i = -1;
2. initailize another varible with 0;
3 use a loop and check if the loop varible is less < pivote i mean 0; then swap the i with j;
------------------------------------------------------------------------------------------

Source Code for Moving elements to one side:
#include<iostream>
using namespace std;

int main(){
    
    int n;
    cout<<"Enter Size of the array"<<endl;
    cin>>n;
    
    int arr[n];
    cout<<"Enter elements in the array"<<endl;
    for(int i=0; i<n; i++){
        cin>>arr[i];
    }
    
    int i=-1;
    int pivote=0;
    
    for(int j=0; j<n; j++){
        if(arr[j]<pivote){
            i++;
            swap(arr[i],arr[j]);
        }
    }
    
    cout<<"The Edited  Elements are"<<endl;
    for(int i=0; i<n; i++){
        cout<<arr[i];
    }
    return 0;
}