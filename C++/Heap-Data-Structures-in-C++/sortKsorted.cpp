#include <bits/stdc++.h>
using namespace std;

vector<int> k_sorted_array(int* arr, int n, int k)
{
    priority_queue<int, vector<int>, greater<int>> minHeap;
    vector<int> v;

    for (int i = 0; i < n; i++) {
        minHeap.push(arr[i]);
        if (minHeap.size() > k) {
            v.push_back(minHeap.top());
            minHeap.pop();
        }
    }

    while (minHeap.size() > 0) {
        v.push_back(minHeap.top());
        minHeap.pop();
    }
    return v;
}