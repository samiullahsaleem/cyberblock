#include <bits/stdc++.h>
using namespace std;

/*
1. Heapify function
    - Initialize largest as root.
    - left = 2\*i + 1.
    - right = 2\*i + 2.
    - If left child is larger than root.
    - If right child is larger than largest so far.
    - If largest is not root.
    - Recursively heapify the affected sub-tree.
*/

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
2. Build heap function.
    - Index of last non-leaf node
    - Perform reverse level order traversal from last non-leaf node and heapify each node
*/
void buildHeap(int arr[], int n)
{
    int startIdx = (n - 2) / 2;

    for (int i = startIdx; i >= 0; i--) {
        heapify(arr, n, i);
    }
}
