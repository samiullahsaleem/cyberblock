#include<bits/stdc++.h>

using namespace std;

int BinaryToDecimal(int n)
{
	int  ans=0;
	int x=1;
	while(n>0)
	{
		int y=n%10;
		ans += x*y;
		x*=2;
		n/=10;
	}	

	return ans;
}
int OctalToDecimal(int n)
{
	int  ans=0;
	int x=1;
	while(n>0)
	{
		int y=n%10;
		ans += x*y;
		x*=8;
		n/=10;
	}	

	return ans;
}

int hexadecimalToDecimal(string n)
{
   int ans =0;
   int x=1;

   int s= n.size();
   for (int i = s-1; i>=0; i--)
   {
   	if(n[i] >='0'  && n[i] <='9')
   	{
   		ans += x*(n[i]-'0');

   	}
   	else if (n[i] >='A' && n[i]<='F')
   	{
   		ans+=x*(n[i]-'A' + 10);
   	}
   	x *=16;
   }

   return ans;
}   

int decimalToBinary(int n)
{
    int x=1;
    int ans=0;
    while(x<=n)
    	x*=2;
    x/=2;

    while(x>0)
    {
    	int LastDigit = n/x;
    	n -= LastDigit*x;
    	x/=2;
    	ans = ans*10 + LastDigit;
    }
    return ans;

}

int decimalToOctal(int n)
{

	int x=1;
    int ans=0;
    while(x<=n)
    	x*=8;
    x/=8;

    while(x>0)
    {
    	int LastDigit = n/x;
    	n -= LastDigit*x;
    	x/=8;
    	ans = ans*10 + LastDigit;
    }
    return ans;
}

string decimalToHexadecimal(int n)
{
    int x=1;
    string ans="";
    while(x <= n)
    	x*=16;
    x/=16;

    while(x>0)
    {
    	int LastDigit= n/x;
    	n -=LastDigit*x;
    	x/=16;

    	if (LastDigit<=9)

    	ans= ans+ to_string(LastDigit);
        else
        {
        	char c= 'A' + LastDigit -10;
        	ans.push_back(c);
        }	

    }	
    return ans;

}
int main(int argc, char const *argv[])

{
	int n;
	cin>>n;

	cout<<decimalToHexadecimal(n)<<endl;
	
	
	return 0;

}