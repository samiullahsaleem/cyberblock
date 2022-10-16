#include <iostream>
using namespace std;
int main()
{
    int host_num, guest_num;
    cout << "Host: ";
    cin >> host_num;
    system("cls");
    cout << "Guest: ";
    cin >> guest_num;

    (host_num == guest_num) ? cout << "Correct! \n" : cout << "Wrong! \n"; //ternary conditional operator
    cout << "The number was " << host_num << endl;
}
