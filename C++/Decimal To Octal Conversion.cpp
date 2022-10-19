#include <iostream>
using namespace std;

long decimalToOctal(long n);
int main() {
    long decimal;
    cout << "Enter a number in decimal: ";
    cin >> decimal;
    cout << "Decimal number : " << decimal << endl;
    cout << decimal << " In Octal number = " << decimalToOctal(decimal);

    return 0;
}

// Function that converts a decimal number to octal number
long decimalToOctal(long num) {
    int remainder;
    long octal = 0, i = 1;

    while (num != 0) {
        remainder = num % 8;
        num = num / 8;
        octal = octal + (remainder * i);
        i = i * 10;
    }
    return octal;
}