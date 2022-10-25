#include <bits/stdc++.h>
using namespace std;

vector<int> k_closest(int* arr, int n, int k, int x)
{
    priority_queue<pair<int, int>> maxHeap;
    vector<int> v;

    for (int i = 0; i < n; i++) {
        maxHeap.push({ abs(arr[i] - x), arr[i] });

        if (maxHeap.size() > k)
            maxHeap.pop();
    }
    while (maxHeap.size() > 0) {
        v.push_back(maxHeap.top().second);
        maxHeap.pop();
    }
    return v;
}