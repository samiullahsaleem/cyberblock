//Program for basic calculator using switch statement...
# include<iostream>
using namespace std;

//Defining Functions
double add(double x,double y)
{
	return(x+y);
}

double sub(double x,double y)
{
	return(x-y);
}

double mul(double x,double y)
{
	return(x*y);
}
double divide(double x, double y)
{
	return(x/y);
}

//Using switch Function
double cal(double x,double y, char z)
{
	switch(z)
	{
		case'+':
			return add(x,y);
			break;
		case'-':
			return sub(x,y);
			break;
		case'*':
			return mul(x,y);
			break;
		case'/':
			return divide(x,y);
			break;
	}
}

//Main body
int main()
{
	double a,b;
	char c;
	cout<<"Enter First Number"<<endl;
	cin>>a;
	cout<<"Enter Second Number"<<endl;
	cin>>b;
	cout<<"Enter an operator"<<endl;
	cin>>c;
	cout<<"The calculated result is:"<<endl;
	cout<<cal(a,b,c)<<endl;
	return 0;
}
