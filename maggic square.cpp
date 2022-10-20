#include<iostream>
using namespace std;
int matrix(int n);
int printingmatrix();
int matrixColRow;
int t = 16*matrixColRow;
int magicSquare[50][50]={};
int steps=1;
int main()
{
    int numberMatrix,remainder,matrixnum;

    //taking input from user as diamentions of square
    cout<<"\n\t--------------------------------------------------------------------------------";
    cout<<"\n\t\t\t\t\tMagic Square";
    cout<<"\n\t--------------------------------------------------------------------------------\n";
    cout<<"Enter number for matrix :";
    cin>>matrixnum;

    //making sure that user will input only odd number

    remainder=matrixnum%2;
    if(remainder == 0)
    {
        cout<<"Enter odd number\n";
        main();
    }
    else
    {
        numberMatrix=matrixnum;
        matrix(numberMatrix);
    }
}

//function that will assign values to array according to the conditions
int matrix(int n)
{
    matrixColRow = n;
     magicSquare[n][n]={};
    //declaring i, j and initializing with a conditional value
    // so that it will always place 1 in center of first row
    int i=0;
    int j=n/2;

    int num = 1;

    //loop will run unless/until all values of array is assigned a value
    while ( num <= n*n )
    {

        if (i<0 && j >= n)
        {
            j =n-1;
            i +=2;
        }
        else
        {

            if (j == n)
            {
                j = 0;
            }

            if (i < 0)
            {
                i=n-1;
            }

            if(j<0)
            {
                j+=1;
            }


        }
            //if a number is already preset in array
            //this will change its number position according to the given condition
        if (magicSquare[i][j])
        {
            i+=2;
            j-=1;
            continue;
        }
        else
            magicSquare[i][j] = num;
                printingmatrix();
            num++;
        j++;
        i--;
    }

    // calculating sum of row , diagonal or column by this formula "n*(n*n+1)/2"
    cout<<"Sum of Rows , Column , Diagonal = "<<n*(n*n+1)/2<<"\n";
    cout<<"The magic square of "<<n<<" x "<<n<<" is :\n\n";
    //displaying border or making box outside array


    for(int i=0;i<t;i++)
    {
        cout<<"-";
    }
    cout<<"\n";

    //displaying array elements/content
    printingmatrix();
    return true;
}
//displaying array elements/content
int printingmatrix()
{
    //variable to store steps number
    int laststep =(matrixColRow*matrixColRow)+(1);
    //condition if steps is last step then print final matrix
    if(steps==laststep)
    {
        cout<<"Final Matrix"<<"\n";
    }
    else{
      cout<<"Step "<<steps<<"\n";

    }
        for(int i = 0; i < matrixColRow; i++)
    {

        for (int j = 0; j < matrixColRow; j++)
            cout<<"|\t"<<magicSquare[i][j]<<"\t";
            cout<<"|";
            cout<<"\n";

        for(int i=0;i<(16*matrixColRow);i++)
        {
            cout<<"-";
        }
        cout<<"\n";
    }
    cout<<"\n";
    steps++;
    return true;
}
