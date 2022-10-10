// find kth minmum elenent
#include<bits/stdc++.h>
using namespace std;
int kthSmall(int arr[], int n, int k){
    sort(arr, arr+n);
    int i;
    for(i=0; i<n; i++){
        if(i+1 ==k){
            return arr[i];
        }
    }
}

int main(){
    int n, i, k;
    cout<<"Enter size of the array"<<endl;
    cin>>n;
    cout<<"Enter the kth elemnet"<<endl;
    cin>>k;
    int arr[n];
    for(i=0; i<n; i++){
        cin>>arr[i];
    }
    cout<<"The kth minimum element is "<<kthSmall(arr, n, k);
    
    
    return 0;
}