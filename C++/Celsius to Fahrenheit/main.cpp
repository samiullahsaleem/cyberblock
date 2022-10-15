#include <iostream>
using namespace std;
int main()
{
    float celsius, fahrenheit;

    cout << "Enter the temperature in Celsius: ";
    cin >> celsius;
    fahrenheit = (celsius * 9.0) / 5.0 + 32;
    cout << "The temperature in degree Fahrenheit: " << fahrenheit << endl;
    return 0;
}