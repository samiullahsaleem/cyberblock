#include <bits/stdc++.h>
using namespace std;

void insertion_Sorting(int arr[], int size)
{
    int element;
    int position;
    int j;
    for (int i = 1; i < size; i++)
    {
        element = arr[i];
        position = i - 1;
        for (j = position; j > -1; j--) // for doing the shifting according to each number of pass.
        {
            if (arr[j] < element)
            { // insertion sorting decending condition.
                arr[j + 1] = arr[j];
                arr[j] = element;
            }
            // if(arr[j]>element){  // insertion sorting ascending condition.
            //     arr[j+1]=arr[j];
            //     arr[j]=element;
            // }
        }
    }
    for (int i = 0; i < size; i++)
    {
        cout << arr[i];
        if (i == size - 1)
        {
            cout << "";
        }
        else
        {
            cout << ",";
        }
    }
}
int main()
{
    int Array[] = {56, 32, 100, 5, 1, 0, 10, 15};
    int size = 8;
    insertion_Sorting(Array, size);
    return 0;
}