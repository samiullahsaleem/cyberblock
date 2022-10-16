#include <iostream>
using namespace std;

void bubbleSort(int *arr)
{
    for(int i = 1; i < 5; i++)
    {
        for(int j = 0; j < 5 - i; j++)
        {
            if(arr[j] > arr[j+1])
            {
                int temp = arr[j];
                arr[j] = arr[j+1];
                arr[j+1] = temp;
            }
        }
    }
}

int main()
{
int arr[5] = {9, 3, 6, 5, 12};

cout << "Unsorted:\n";    
    for(int i = 0; i < 5; i++)
    {
        cout << arr[i];
        if(i < 4)
        cout << ", ";
    }
    cout << endl;

bubbleSort(arr);

cout << "Sorted:\n";    
    for(int i = 0; i < 5; i++)
    {
        cout << arr[i];
        if(i < 4)
        cout << ", ";
    }
    cout << endl;
}