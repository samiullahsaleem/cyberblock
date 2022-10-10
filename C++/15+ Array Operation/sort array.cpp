#include<iostream>
using namespace std;
#define MAX 100

int main(){
    // array Declaration
    int arr[MAX];
    int n, i, j;
    int temp;
    
    // read the total elements of an array
    
    cout<<"Enter the total number of element to read"<<endl;
    cin>>n;
    
    // boude checking
    if(n<0 || n>MAX){
        cout<<"Enter inpur valid range"<<endl;
        return -1;
    }
    
    //read n elements
    for(i=0; i<n; i++){
        cout<<"Enter element "<<i+1<<endl;
        cin>>arr[i];
    }
    
    // print the input elements
    cout<<"Unsorted array elements"<<endl;
    for(i=0; i<n; i++){
        cout<<arr[i]<<" ";
        cout<<endl;
    }
    
    // Now we will code for sorting
    for(i=0; i<n; i++){
        
        for(j=i+1; j<n; j++){
            if(arr[i]>arr[j]){
                temp= arr[i];
                arr[i]=arr[j];
                arr[j]=temp;
            }
        }
    }
    
    // now printing sorted array
    cout<<"Sorted Ascending order Array element"<<endl;
    for(i=0; i<n; i++){
        cout<<arr[i]<<" ";
    }
    
    
    
  return 0;   
}




