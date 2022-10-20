#include <iostream>
using namespace std;

int main() {
    int r, h, d, s;
    // r - Value of pattern row
    // h - Value of pattern height
    // d - Value of digits
    // s - Value of space

    cout << "-----Enter the height of the pattern-----\n";
    cin >> h;
    cout << "\n-----This the butterfly pattern-----\n\n\n";

    for(r = 1; r <= h - 1; r++) {
        cout << "\t";
        for(d = 1; d <= r; d++)
            cout << d;
        for(s = 1; s <= 2 * (h - r); s++)
            cout << " ";
        putchar('\b');
        for(d = r; d >= 1; d--)
            cout << d;
        putchar('\n');
    }

    for(r = h; r >= 1; r--) {
        cout << "\t";
        for(d = 1; d <= r; d++)
            cout << d;
        for(s = 1; s <= 2 * (h - r); s++)
            cout << " ";
        putchar('\b');
        for(d = r; d >= 1; d--)
            cout << d;
        putchar('\n');
    }
    return 0;
}
