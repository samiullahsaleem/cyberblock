#include <iostream>
/* #include is a preprocessor directive that 
tells the preprocessor to include header files in the program.
< > indicate the start and end of the file name to be included. 
 iostream is a header file that contains functions
 for input/output operations ( cin and cout ).*/
using namespace std;
int main()
/* main() function is the entry point of any C++ program.
 It is the point at which execution of program is started */
{
   int i,j,k;
    cout << "\n\n Display the pattern like a diamond:\n";
    cout << "----------------------------------------\n";
    cout << "Number of rows (half of the diamond): ";
    cin >> k;
   for(i=0;i<=k;i++)  
   /* run loop (parent loop) 
    number of rows */
   {
     for(j=1;j<=k-i;j++)
     /* loop for initially space, 
       before star printing */
     cout<<" ";
     for(j=1;j<=2*i-1;j++)
     // Print i+1 stars 
       cout<<"*";
     cout<<endl;
   } 
   // Repeat again in reverse order 
   for(i=k-1;i>=1;i--)
   /* run loop (parent loop) 
      number of rows */
   {
     for(j=1;j<=k-i;j++)
     /* loop for initially space, 
        before star printing */
     cout<<" ";
     for(j=1;j<=2*i-1;j++) 
     // Print i stars 
       cout<<"*";
     cout<<endl;;
   }
}