#include<iostream>
using namespace std;


int main(){
    // array Declaration
    int arr[200];
    int n, i, min, max;
    
    
    // read the total elements of an array
    
    cout<<"Enter the total number of element to read"<<endl;
    cin>>n;
    
    
    //read n elements
    for(i=0; i<n; i++){
        cout<<"Enter element "<<i+1<<endl;
        cin>>arr[i];
    }
    
    max= min=arr[0];
    for(i=0; i<n; i++){
        if(max<arr[i]){
            max=arr[i];
        }
       
        
    }
     cout<<"The maximum value is: "<< max;
    
    // Minimum value 
        for(i=0; i<n; i++){
        if(min>arr[i]){
            min=arr[i];
        }
       
        
    }
    
    cout<<"The minimum value is "<<min;
    
    
    
    
  return 0;   
}




