#include <iostream>

using namespace std;

int main()
{
   cout<<" Do you want to find whether a number is perfect or not? yes or not?"<<endl;
   string c;
   cin>> c;
   while(c=="yes")
   {

     cout <<" Enter a  number. "<<endl;
     int n;
     cin>>n;
     int j=0;
     int k=0;
     for(int i=1 ; i<n ;i++)
     {
       j=  j+1;

         if(n%j==0)
        {
          k=k+j;
        }

     }
     if(k==n)
     {
         cout<<"It is a perfect number"<<endl;
     }
     else
     {
         cout<<"It is not a perfect number"<<endl;
     }
      cout<<" Do you want to find whether a number is perfect or not? yes or not?"<<endl;
   cin>>c;



   }


    return 0;
}
