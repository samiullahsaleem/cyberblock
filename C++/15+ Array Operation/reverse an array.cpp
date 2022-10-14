// reverse an array  ;
// we can reverse an array into two ways 
// 1. swapping the indexes of first and last
//2. or to store reverse array into new array

#include<iostream>
using namespace std;

int main(){
    
    int arr[300], size, i,j;
    cout<<"Enter size of array"<<endl;
    cin>>size;
    
    cout<<"Enter elements in the array"<<endl;
    for(i=0; i<size; i++){
        cin>>arr[i];
    }

    // Now reversing the array
    int s=0;
    int e=size-1;
    
    while(s<e){
        swap(arr[s], arr[e]);
        s++;
        e--;
    }
    
    // printing the reverse array
    for(i=0; i<size; i++){
        cout<<arr[i]<<" ";
    }
    return 0;
}