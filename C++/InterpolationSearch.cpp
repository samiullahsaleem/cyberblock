#include<iostream>
using namespace std;

//Interpolation search
void interpolationSearch(int arr[], int n, int x)
{
    int lo = 0, hi = (n - 1);

    while (lo <= hi && x >= arr[lo] && x <= arr[hi])
    {
        if (lo == hi)
        {
            if (arr[lo] == x) cout << "Element found at index " << lo;
            return;
        }
        int pos = lo + (((double)(hi - lo) /
            (arr[hi] - arr[lo])) * (x - arr[lo]));

        if (arr[pos] == x)
        {
            cout << "Element found at index " << pos;
            return;
        }

        if (arr[pos] < x) lo = pos + 1;

        else hi = pos - 1;
    }
    cout << "Element not found.";
}

int main()
{
    int arr[] = { 10, 12, 13, 16, 18, 19, 20, 21,
                22, 23, 24, 33, 35, 42, 47 };
    int n = sizeof(arr) / sizeof(arr[0]);

    int x = 18;
    interpolationSearch(arr, n, x);

    x = 17;
    interpolationSearch(arr, n, x);
    return 0;
}
