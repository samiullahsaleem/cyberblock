#include<iostream>
#include<algorithm>
using namespace std;
int main(){
    
    int arr[]={23, 4, 234,432,53,5,3,543,5443}, n=9, k=3;
    sort(arr, arr+n);
    
    for(int i=0; i<k; i++){
        cout<<arr[n-1-1]<<" ";
    }
    
    return 0;
}