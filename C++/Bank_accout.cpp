#include <iostream>
#include <cctype>
#include <iomanip>
using namespace std;

class account
{
private:
    double balance;
    double interest_rate;
    double interest;
    int transections;

public:
    account()
    {
        balance = 0.0;
        interest_rate = 0.045;
        interest = 0.0;
        transections = 0;
    }
    void deposit_amount(double deposite);
    bool withdraw_amount(double withdraw);
    void calc_interst();
    double get_balance() const
    {
        return balance;
    }
    int get_transections() const
    {
        return transections;
    }
    double get_interest() const
    {
        return interest;
    }
    double get_interest_rate() const
    {
        return interest_rate;
    }
};
void account::calc_interst()
{
    interest = interest_rate * balance;
    balance += interest;
}
void account::deposit_amount(double deposite)
{
    balance += deposite;
    transections++;
}
bool account::withdraw_amount(double withdraw)
{
    if (withdraw < balance)
    {
        balance -= withdraw;
        transections++;
        return true;
    }
    else
    {
        return false;
    }
}

void display();
void make_deposite(account &);
void make_withdrawal(account &);
int main()
{
    account savings;
    char choice = 'a';
    do
    {
        display();
        cin >> choice;
        while (toupper(choice) < 'A' || toupper(choice) > 'G')
        {
            cout << "Please make choice in a range A through G\n";
            cin >> choice;
        }
        switch (choice)
        {
        case 'a':
        case 'A':
            cout << "Your current account balance is: " << savings.get_balance();
            break;
        case 'b':
        case 'B':
            cout << "No of transections you made are: " << savings.get_transections();
            break;
        case 'c':
        case 'C':
            make_deposite(savings);
            break;
        case 'd':
        case 'D':
            make_withdrawal(savings);
            break;
        case 'e':
        case 'E':
            cout << "Interest you earned for this period is: " << savings.get_interest_rate();
            break;
        case 'f':
        case 'F':
            savings.calc_interst();
            cout << "Interest added\n";
            break;
        }
    } while (toupper(choice) != 'G');
    return 0;
}
void display()
{
    cout << "\n              Menu\n";
    cout << "------------------------------------------\n";
    cout << "A) Display the account balance\n";
    cout << "B) Display the number of transections\n";
    cout << "C) Make a deposite\n";
    cout << "D) Make a withdrawal\n";
    cout << "E) Display interest earned for this period\n";
    cout << "F) Add interest for this period\n";
    cout << "G) Exit the program\n\n";
    cout << "Enter your choice: ";
}
void make_deposite(account &acnt)
{
    double dollars;
    cout << "Enter amount you want to deposit: ";
    cin >> dollars;
    cin.ignore();
    acnt.deposit_amount(dollars);
}
void make_withdrawal(account &acnt)
{
    double dollars;
    cout << "Enter amount you want to withdraw: ";
    cin >> dollars;
    cin.ignore();

    if (!acnt.withdraw_amount(dollars))
    {
        cout << "Error! withdrawal amount is too large apply for loan\n";
    }
}
