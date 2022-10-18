#include<iostream>
/*  iostream provides basic
input and output services for C++ programs */ 
using namespace std;
int main()
// Th execution of program start with the main function
{ // arr is array
int num, rem, arr[10], i=0, tot=0;
//Variable Declarations specify the type followed by the name
//Initialization is the process of assign the value to a variable     
cout<<"Enter the Number: ";
// cout is used to display the same statement in the output.    
cin>>num;
// cin is used to enter the value by the user.    
while(num!=0)
/*The while loop is used to repeat a 
section of code an unknown number of
times until a specific condition is met*/      
    {
    rem = num%10;
    arr[i] = rem;
    num = num/10;
    i++;
    tot++;
    }
    cout<<"\nReverse Number = ";
/* A "For" Loop is used to repeat a specific
 block of code a known number of times*/   
    for(i=0; i<tot; i++)
        cout<<arr[i];
    cout<<endl;
    return 0;
}