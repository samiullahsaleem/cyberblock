#include <stdio.h>
#include <limits.h> 
// Replace each element of the specified array with the
// least greater element on its right
void replace(int nums[], int n)
{
    // traverse the array from the beginning
    for (int i = 0; i < n; i++)
    {
        int successor = -1;
        int diff = INT_MAX;
        // check every element on the right for a successor
        for (int j = i + 1; j < n; j++)
        {
            if (nums[j] > nums[i] && (nums[j] - nums[i] < diff))
            {
                successor = nums[j];
                diff = nums[j] - nums[i];
            }
        }
        nums[i] = successor;
    }
    // print the resultant array
    for (int i = 0; i < n; i++) {
        printf("%d ", nums[i]);
    }
}
int main()
{
    int nums[] = { 8,58,71,18,31,32,63,92,43,3,91,93,25,80,28};
    int n = sizeof(nums)/ sizeof(nums[0]);
    //call replace function
    replace(nums, n);
    return 0;
}