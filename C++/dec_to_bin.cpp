#include<stdio.h>

/* Function Prototype */
long int decimalToBinary(long int n);

/* Main Function */
int main()
{
	 long int decimal, binary;

	 printf("Enter decimal number: ");
	 scanf("%ld", &decimal);

     /* Function Call */
     binary = decimalToBinary(decimal);

	 printf("Decimal (%ld) = Binary (%ld)", decimal, binary);

	 return(0);
}

long int decimalToBinary(long int n)
{
    long int binary=0, rem, num, base=1;
    num = n;
    while(num !=0 )
	 {
	  rem = num%2;
	  binary = binary + base * rem;
	  base = base*10;
	  num = num/2;
	 }

    return binary;
}