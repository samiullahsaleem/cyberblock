#include<iostream>
#include<climits>
using namespace std;

int main(){
    
    int arr[100], i, largest, secondelargest, size;
    cout<<"Enter Size of an array"<<endl;
    cin>>size;
    
    cout<<"Enter Elements in the array"<<endl;
    for(i=0; i<size; i++){
        cin>>arr[i];
    }
    largest= arr[0];
    for(i=0; i<size; i++){
        if(arr[i]>largest){
            largest=arr[i];
        }
    }
    
    secondelargest = arr[0];
    for(i=0; i<size; i++){
        if(arr[i]>secondelargest && arr[i] != largest)
        {
            secondelargest=arr[i];
        }
        
    }
   cout<<"The seconde largest Element in the array is"<<secondelargest<<endl;
    
    return 0;
}
