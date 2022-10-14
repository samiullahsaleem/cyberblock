Largest Sum Contigous Subarray:
Time complexity: O(n)
To solve this problem we will kaden's Algorithm 

we will match every element and stor it in current elemnet if currentsum > than maxsum then we will store currentsum in max sum.



#include<iostream>
using namespace std;
    
    int MaxsubArray(int arr[]){
        int maxSum=0;
        int currSum=0;
        for(int i=0; i<arr.length; i++){
            currSum = currSum+arr[i];
            if(currSum>maxSum){
                maxSum=currSum;
                
            }
            if(currSum<0){
                currSum=0;
            }
        }
        return maxSum;
    }
int main(){
    
    	int arr[]={1, 2, -3,4, 5}, i;
	int n = sizeof(arr)/sizeof(arr[0]);
	cout<<"Given Array is"<<endl;
	for(i=0; i<n; i++)
	cout<<arr[i]<<" ";
	MaxsubArray(arr);

	cout<<"\n updated Array is:"<<endl;
	for(i=0;i<n; i++)
	cout<<arr[i]<<" ";
    
    return 0;
}