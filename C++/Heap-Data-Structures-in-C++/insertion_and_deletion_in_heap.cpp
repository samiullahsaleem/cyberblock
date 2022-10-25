#include <bits/stdc++.h>
using namespace std;

void heapify(int arr[], int n, int i)
{
    int largest = i;
    int l = 2 * i + 1;
    int r = 2 * i + 2;

    if (l < n && arr[l] > arr[largest])
        largest = l;
    if (r < n && arr[r] > arr[largest])
        largest = r;

    if (largest != i) {
        swap(arr[i], arr[largest]);
        heapify(arr, n, largest);
    }
}

/*
To delete root of heap we perform following operations.
    - Get the last element.
    - Replace root with last element.
    - Decrease size of heap by 1.
    - heapify the root node.
*/
void deleteRoot(int arr[], int& n)
{
    int lastElement = arr[n - 1];
    arr[0] = lastElement;
    n = n - 1;
    heapify(arr, n, 0);
}

/*
insert node Function.
    - Insert the element at end of Heap.
    - Increase the size of Heap by 1.
    - Heapify the new node following a Bottom-up approach.
*/

void insertNode(int arr[], int& n, int Key)
{
    arr[n] = Key;
    n = n + 1;
    heapify(arr, n, n - 1);
}

// Bottom-up approach to heapify a subtree.
void heapify(int arr[], int n, int i)
{
    int parent = (i - 1) / 2;
    if (parent >= 0) {
        if (arr[i] > arr[parent]) {
            swap(arr[i], arr[parent]);
            heapify(arr, n, parent);
        }
    }
}
