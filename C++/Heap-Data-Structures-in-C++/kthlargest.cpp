#include <bits/stdc++.h>
using namespace std;

void k_largest(int* arr, int n, int k)
{
    priority_queue<int, vector<int>, greater<int>> minHeap;

    for (int i = 0; i < n; i++) {
        minHeap.push(arr[i]);

        if (minHeap.size() > k)
            minHeap.pop();
    }

    while (minHeap.size() > 0) {
        cout << minHeap.top() << ' ';
        minHeap.pop();
    }
}