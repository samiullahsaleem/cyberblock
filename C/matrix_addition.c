#include<stdio.h>

/*This C program shows the addition of the two 2x2 matrix*/

int main(void)
{
    // Matrix addition
    int A[2][2], B[2][2];
    // Take inputs for matrix A elements
    printf("-------------------------------------\n\n");
    for(int i=0; i<2; i++){
        for(int j=0; j<2; j++){
            printf("Matrix A[%d][%d]: ",i,j);
            scanf("%d",&A[i][j]);
        }
    }
    printf("-------------------------------------\n\n");
    for(int i=0; i<2; i++){
        for(int j=0; j<2; j++){
            printf("Matrix B[%d][%d]: ",i,j);
            scanf("%d",&B[i][j]);
        }
    }
    printf("-------------------------------------\n\n");
    // Displaying Matrix A & B
    for(int i=0; i<2; i++){
        for(int j=0; j<1; j++){
            printf("|  %d  %d  |", A[i][j], A[i][j+1]);
        }
        printf("\n");
    }
    printf("   +   \n");
    for(int i=0; i<2; i++){
        for(int j=0; j<1; j++){
            printf("|  %d  %d  |", B[i][j], B[i][j+1]);
        }
        printf("\n");
    }

    // Displaying Addtion
    printf("--------------Addition--------------\n\n");
    for(int i=0; i<2; i++){
        for(int j=0; j<1; j++){
            printf("| %d  %d |", A[i][j]+B[i][j], A[i][j+1]+B[i][j+1]);
        }
        printf("\n");
    }
    printf("\n");

    return 0;
}