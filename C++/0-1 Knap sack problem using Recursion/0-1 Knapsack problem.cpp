#include <iostream>

using namespace std;

double knapsack(int n,double v[],double w[],double W)
{
    double max_benefit;

    if (n==0||W<=0)
    {
        max_benefit=0;
    }
    else
      {
        if(w[n-1]>W)
        {
            max_benefit=knapsack(n-1,v,w,W);
        }
       else
       {
            double with=knapsack(n-1,v,w,W-w[n-1])+v[n-1];
            double without= knapsack(n-1,v,w,W);
            if(with>without)
            {
                max_benefit=with;
            }
            else
            {
                max_benefit=without;
            }
        }
      }
  return max_benefit;
}

int main()
{
    int n=9;
    cout << "Enter the total number of items. " << endl;
   // cin>>n;
   // cout<<"Enter the value of each item one by one. "<<endl;
    double value[]={2,3,3,4,4,5,7,8,8};
    double weight[]={3,5,7,4,3,9,2,11,5};
   // for(int i=1;i<=n;i++)
   // {
   //     cin>> value[i];
   // }
   // cout<<"Enter the weight of each item one by one. "<<endl;
   // for(int i=1;i<=n;i++)
   // {
   //      cin>>weight[i];
   // }
    // cout<<"Enter the capacity of the knapsack."<<endl;
     double capacity=15;
    // cin>>capacity;
     cout<<"The maxmum value of 0/1 knap-sack can be: "<< knapsack(n,value,weight,capacity)<<endl;

    return 0;
}
