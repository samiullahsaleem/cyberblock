#include<stdio.h>
int main()
{
    int r1,c1,r2,c2,k,**p,**q,**r,**s,i,j,count1=0,count2=0,t[100][3];
    printf("Enter the number of rows of the first matrix:");
    scanf("%d",&r1);
    printf("Enter the number of columns of the first matrix:");
    scanf("%d",&c1);
    printf("Enter the number of rows of the second matrix:");
    scanf("%d",&r2);
    printf("Enter the number of columns of the second matrix:");
    scanf("%d",&c2);
    p=(int**)malloc(r1*(sizeof(int)));
    q=(int**)malloc(r2*(sizeof(int)));
    for(i=0;i<r1;i++)
    {
        *(p+i)=(int*)malloc(c1*sizeof(int));
    }
    for(i=0;i<r2;i++)
    {
        *(q+i)=(int*)malloc(c2*sizeof(int));
    }
    printf("Enter the elements of the first matrix:");
    for(i=0;i<r1;i++)
    {
        for(j=0;j<c1;j++)
        {
            scanf("%d",(*(p+i)+j));
            if(*(*(p+i)+j)!=0)
            {
                count1++;
            }
        }
    }
    printf("Enter the elements of the second matrix:");
    for(i=0;i<r2;i++)
    {
        for(j=0;j<c2;j++)
        {
            scanf("%d",(*(q+i)+j));
            if(*(*(q+i)+j)!=0)
            {
                count2++;
            }
        }
    }
    printf("The first original matrix is:\n");
    for(i=0;i<r1;i++)
    {
        for(j=0;j<c1;j++)
        {
            printf("%d  ",p[i][j]);
        }
        printf("\n");
    }
    printf("\nThe second original matrix is:\n");
    for(i=0;i<r2;i++)
    {
        for(j=0;j<c2;j++)
        {
            printf("%d  ",q[i][j]);
        }
        printf("\n");
    }

    {     //forming the triplet form of the first matrix
          r=(int**)malloc((count1+1)*sizeof(int));
          for(i=0;i<(count1+1);i++)
          {
               *(r+i)=(int*)malloc(3*sizeof(int));
          }
          k=1;
          r[0][0]=r1;
          r[0][1]=c1;
          r[0][2]=count1;
          for(i=0;i<r1;i++)
          {
              for(j=0;j<c1;j++)
              {
                  if(p[i][j]!=0)
                  {
                      r[k][0]=i;
                      r[k][1]=j;
                      r[k][2]=p[i][j];
                      k++;

                  }
              }
          }

          printf("The triplet form of the first matrix is:\n");
          for(i=0;i<(count1+1);i++)
          {
              for(j=0;j<3;j++)
              {
                  printf("%d  ",*(*(r+i)+j));
              }
              printf("\n");
          }
     }
    printf("\n\n");
   {     //forming the triplet format of the second matrix
         s=(int**)malloc((count2+1)*sizeof(int));
          for(i=0;i<(count2+1);i++)
          {
               *(s+i)=(int*)malloc(3*sizeof(int));
          }
          k=1;
          s[0][0]=r2;
          s[0][1]=c2;
          s[0][2]=count2;
          for(i=0;i<r2;i++)
          {
              for(j=0;j<c2;j++)
              {
                  if(q[i][j]!=0)
                  {
                      s[k][0]=i;
                      s[k][1]=j;
                      s[k][2]=q[i][j];
                      k++;
                  }
              }
          }
          printf("The triplet form of the second matrix is:\n");
          for(i=0;i<(count2+1);i++)
          {
              for(j=0;j<3;j++)
              {
                  printf("%d  ",s[i][j]);
              }
              printf("\n");
          }

    }
    i=j=k=1;
    t[0][0]=*(*(s+0)+0);
    t[0][1]=*(*(s+0)+1);
    if(r[0][0]==s[0][0] && r[0][1]==s[0][1])
    {
        while(i<=count1 && j<=count2)
        {
            if(r[i][0]==s[j][0])//comparing the first column of the two triplet matrices
            {
                if(r[i][1]>s[j][1])//comparing the second column of the matrices
                {
                    t[k][0]=s[j][0];//filling the resultant matrix
                    t[k][1]=s[j][1];
                    t[k][2]=s[j][2];
                    j++;
                    k++;
                }
                else if(r[i][1]<s[j][1])
                {
                    t[k][0]=r[i][0];
                    t[k][1]=r[i][1];
                    t[k][2]=r[i][2];
                    i++;
                    k++;
                }
                else if(r[i][1]==s[j][1])
                {
                    t[k][0]=r[i][0];
                    t[k][1]=r[i][1];
                    t[k][2]=r[i][2]+s[j][2];
                    i++;
                    j++;
                    k++;
                }
            }
            else if(r[i][0]<s[j][0])
            {
                t[k][0]=r[i][0];
                t[k][1]=r[i][1];
                t[k][2]=r[i][2];
                k++;
                i++;
            }
            else if(r[i][0]>s[j][0])
            {
                t[k][0]=s[j][0];
                t[k][1]=s[j][1];
                t[k][2]=s[j][2];
                k++;
                j++;
            }
        }
        while(i<=count1) // adding the remaining rows from triplet form of matrix 1 to the resultant matrix
        {
            t[k][0]=r[i][0];
            t[k][1]=r[i][1];
            t[k][2]=r[i][2];
            i++;
            k++;
        }
        while(j<=count2)// adding the remaining rows from triplet form of matrix 2 to the resultant matrix
        {
            t[k][0]=s[j][0];
            t[k][1]=s[j][1];
            t[k][2]=s[j][2];
            j++;
            k++;
        }
        t[0][2]=k-1;
    }
    else
        printf("Sparse matrix addition condition not satisfied.");

    printf("\nThe resultant matrix is:\n");
    for(i=0;i<k;i++)
    {
        for(j=0;j<3;j++)
        {
            printf("%d   ",t[i][j]);
        }
        printf("\n");
    }
    return 0;
}
