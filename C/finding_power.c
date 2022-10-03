

/*
This code is contributed by ATTA-E-MUSTAFA in hacktoberfest 2022.
*/

// This program prints the power of the number!


#include<stdio.h>


int power(int base,int expo);

int main()
{
    
    
 int base,expo;
 
 printf("Enter the base: ");
 
 scanf("%d",&base);
 
  printf("Enter the exponent: ");
 
 scanf("%d",&expo);
 
int y = power(base,expo);
    
    
    printf("THe power is %d",y);
    
}


int power(int base,int expo){
    
    int n;
    
    if(expo>1){
    
    return n = base * power(base,expo-1);
    
    }
    
}