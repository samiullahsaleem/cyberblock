#include<stdio.h>
#include<conio.h>
int main()
{
    int mat1[3][3], mat2[3][3], matSub[3][3], i, j;
    printf("Enter First 3*3 Matrix Elements: ");
    for(i=0; i<3; i++)
    {
        for(j=0; j<3; j++)
            scanf("%d", &mat1[i][j]);
    }
    printf("Enter Second 3*3 Matrix Elements: ");
    for(i=0; i<3; i++)
    {
        for(j=0; j<3; j++)
            scanf("%d", &mat2[i][j]);
    }
    for(i=0; i<3; i++)
    {
        for(j=0; j<3; j++)
            matSub[i][j] = mat1[i][j] - mat2[i][j];
    }
    printf("\nThe Subtraction Result is:\n");
    for(i=0; i<3; i++)
    {
        for(j=0; j<3; j++)
            printf("%d  ", matSub[i][j]);
        printf("\n");
    }
    getch();
    return 0;
}
