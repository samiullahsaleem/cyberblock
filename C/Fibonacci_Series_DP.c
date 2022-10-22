/*
    Fibonacci Series using Dynamic Programming (DP) in C
    Submitted by Ashwin Prasanth (https://github.com/ashwinpra)  

    https://en.wikipedia.org/wiki/Fibonacci_number
*/

#include<stdio.h>

// Function to fill the DP array, such that f[i] stores the i-th Fibonacci number (F_i)
void fillFibDParray(int n, int* f){

    // Initalising the 0th and 1st Fibonacci number
    f[0] = 0; 
    f[1] = 1;

    // For the rest of the numbers, we use the property that F_i = F_(i-1) + F_(i-2)
    for(int i=2;i<n;i++) f[i] = f[i-1] + f[i-2] ;
}

int main()
{
    int number;
    printf("Enter the number of elements: ");    
    scanf("%d",&number);     

    int dp[number];

    fillFibDParray(number,dp);

    for(int i=0;i<number;i++) printf("%d ",dp[i]);

    return 0;
}