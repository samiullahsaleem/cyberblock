

/*
This code is contributed by ATTA-E-MUSTAFA in hacktoberfest 2022.
*/

// This program prints the absolute value of the number!


#include<stdio.h>



int absolute_fun(int num){
 
 if(num>=0){

     
     printf("The absolute value of the given number %d is = %d",num,num);

 }
 else if(num<0){

     printf("The absolute value of the given number %d is = %d",num,-1 * num);

 }
 
}

int main()
{
    
    
 int num;
 
 printf("Enter the number: ");
 
 scanf("%d",&num);
 
 absolute_fun(num);
    
    
}