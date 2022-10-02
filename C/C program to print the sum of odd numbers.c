




/*
This code is contributed by ATTA-E-MUSTAFA in hacktoberfest 2022.
*/

//Program to print the even or odd numbers

#include<stdio.h>

int main(){

    int num,i=0,n=1,sum=0;

    printf("Enter the total odd numbers of which sum you want to print: \n");

    scanf("%d",&num);

    if(num>0){
        while(i<num){
            
            printf("%d",n);
            
            printf("\n");
            
            sum=n+sum;
            
            n = n+2;
            
            i++;
        }
        printf("\nTheir sun is: %d",sum);
    }
}