#include <iostream>
using namespace std;

int main()
{
    int num, sum = 0, digit;
    cout << "Enter a positive integer: ";
    cin >> num;

    for (int temp = num; temp != 0;)
    {
        digit = temp % 10;
        sum = sum + (digit * digit * digit);
        temp = temp / 10;
    }

    if (sum == num)
        cout << num << " is an Armstrong number.";
    else
        cout << num << " is not an Armstrong number.";

    return 0;
}