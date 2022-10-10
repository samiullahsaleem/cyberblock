#include<iostream>
using namespace std;

int main(){
    int arr[5], size, insert, i, pos;
    cout<<"Enter Total Number of array"<<endl;
    cin>>size;
    cout<<"Enter array elements"<<endl;
    for(i=0; i<size; i++){
        cin>>arr[i];
    }
    // Now showing the elements
    for(i=0; i<size; i++){
        cout<<arr[i]<<" ";
    }

    //Now insertion Function
    cout<<"Enter Element to be inserted"<<endl;
    cin>>insert;
    
    cout<<"Enter position or index number";
    cin>>pos;
    
    for(i=size; i>pos; i--){
        arr[i]= arr[i-1];
    }
    arr[pos]= insert;
    
    cout<<"New array is:"<<endl;
    for(i=0; i<size+1; i++){
        cout<<arr[i]<<" ";
    }
    
    // Deletion in an array
    
    
    return 0;
}