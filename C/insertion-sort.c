/*
    Insertion Sort algorithm in C
    Submitted by Ashwin Prasanth (https://github.com/ashwinpra)  

    It works by iteratively selecting a certain element of the array as a "key", and all the 
    elements to the left of key, are compared with the key. 
    
    Doing so, we find the apt position for the key, such that all the elements to the right
    of it are greater than it (i.e., key is in sorted order)

    We then move one index right in the array and select the new element as key

    For a more detailed explanation, you may refer to https://en.wikipedia.org/wiki/Insertion_sort

*/


#include<stdio.h>


void insertSort(int* arr, int n){

    // Looping through the array, choosing each element as key one-by-one
    for(int i=1;i<n;i++){

        int key = arr[i]; // Declaring the key

        // Starting a new loop from one index left of key
        int j=i-1; 
        while(j>=0 && arr[j]>key){
            // Each element is shifted one index to the left
            arr[j+1]=arr[j];
            j--; 
            // This loop terminates when arr[j] <= key, in other words, all the elements to the 
            // right of the key are greater than it 
        }

        // Finally we assign the key in its sorted position
        arr[j+1]=key;
    }
}

// Utility function to print an array "arr" of size "n"
void printArr(int* arr, int n){
    for(int i=0;i<n;i++){
        printf("%d ",arr[i]);
    }
    printf("\n");
}

int main(){

    int n; 
    printf("Enter the number of elements in the array: ");
    scanf("%d",&n);

    int A[n];
    printf("Enter the elements of the array: ");
    for(int i=0; i<n; i++){
        scanf("%d",&A[i]);
    }

    printf("Before sorting: ");
    printArr(A,n);

    insertSort(A,n);

    printf("After sorting: ");
    printArr(A,n);

    return 0;
}