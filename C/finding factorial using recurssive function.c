/*
This code is contributed by ATTA-E-MUSTAFA in hacktoberfest 2022.
*/

// This program prints the factorial of the number!

#include <stdio.h>


int factorial(int n);

int main() {
    
    int n;
    
    printf("Enter the number of which factorial you want to find:\n");
    
    scanf("%d",&n);
    
     int y = factorial(n);
    
    printf("%d",y);
}

int factorial(int n){
    
 
    
    if(n>1){
    
    n = n * factorial(n-1);
    
    }
    
    
    return n;
}


