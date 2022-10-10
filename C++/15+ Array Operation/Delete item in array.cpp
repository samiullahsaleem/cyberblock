#include<iostream>
using namespace std;
int main(){
    int arr[50], size, i, del, count=0;
    cout<<"Enter Array Size"<<endl;
    cin>>size;
    
    cout<<"Enter Array Elements"<<endl;
    for(i=0; i<size; i++){
        cin>>arr[i];
    }
    cout<<"Enter Element to be Deleted"<<endl;
    cin>>del;
    
    for(i=0; i<size; i++){
        
        if(arr[i]== del){
            for(int j=i; j<(size-1); j++){
                arr[j]=arr[j+1];
            }
            count++;
            break;
        }
        
    }
    if(count=0){
        cout<<"Element Not Found"<<endl;
    } 
    
    else{
        // now we will printing the new arrary
        cout<<"New array is:"<<endl;
        for(i=0; i<(size-1); i++){
            cout<<arr[i]<<" ";
        }
    }
}