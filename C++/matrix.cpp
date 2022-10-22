#include<iostream>
using namespace std;
int main(){
	int n,n1,n2,n3,a,b,c;
    int a1[1][2],a2[1][3],aa1[1][2],aa2[1][3];
    int b1[2][1],b2[2][2],b3[2][3],bb1[2][1],bb2[2][2],bb3[2][3];
    int c1[3][1],c2[3][2],c3[3][3],cc1[3][1],cc2[3][2],cc3[3][3];
	cout<<"   Select the formate"<<endl;
	cout<<"-------------------------------------------"<<endl;
	cout<<"1.Product of 2 matrices."<<endl;
	cout<<"2.Sum of 2 matrices."<<endl;
	cout<<"3.Determinant of a matrix"<<endl;
	cout<<"-------------------------------------------"<<endl;
	cin>>n;
	 if(n==1){
	 	cout<<"-------------------------------------------"<<endl;
	 	cout<<"1. Product of 3x3 matrices."<<endl;
	 	cout<<"2. Product of 2x2 matrices."<<endl;
	 	cout<<"-------------------------------------------"<<endl;
	 	cin>>n3;
	 	if(n3==1){
	 		cout<<"-------------------------------------------"<<endl;
	 		cout<<"Enter the values of matrix 1 (Raw wise)"<<endl;
	 		cin>>c3[0][0]>>c3[0][1]>>c3[0][2]>>c3[1][0]>>c3[1][1]>>c3[1][2]>>c3[2][0]>>c3[2][1]>>c3[2][2];
	 		cout<<"Enter the values of matrix 1 (Raw wise)"<<endl;
	 		cin>>cc3[0][0]>>cc3[0][1]>>cc3[0][2]>>cc3[1][0]>>cc3[1][1]>>cc3[1][2]>>cc3[2][0]>>cc3[2][1]>>cc3[2][2];
	 		int a=c3[0][0],b=c3[0][1],c=c3[0][2],d=c3[1][0],e=c3[1][1],f=c3[1][2],g=c3[2][0],h=c3[2][1],i=c3[2][2];
	 		int j=cc3[0][0],k=cc3[0][1],l=cc3[0][2],m=cc3[1][0],n=cc3[1][1],o=cc3[1][2],p=cc3[2][0],q=cc3[2][1],r=cc3[2][2];
	 		cout<<"-------------------------------------------"<<endl;
	 		cout<<(a*j)+(b*m)+(c*p)<<" "<<(a*k)+(b*n)+(c*q)<<" "<<(a*l)+(b*o)+(c*r)<<endl;
	 		cout<<(d*j)+(e*m)+(f*p)<<" "<<(d*k)+(e*n)+(f*q)<<" "<<(d*l)+(e*o)+(f*r)<<endl;
	 		cout<<(g*j)+(h*m)+(i*p)<<" "<<(g*k)+(h*n)+(i*q)<<" "<<(g*i)+(h*o)+(i*r)<<" Ans"<<endl;
	 		cout<<"-------------------------------------------"<<endl;
		 }
		 else if(n3==2){
		 	cout<<"-------------------------------------------"<<endl;
		 	cout<<"Enter the values of matrix 1 (Raw wise)"<<endl;
		 	cin>>b2[0][0]>>b2[0][1]>>b2[1][0]>>b2[1][1];
		 	cout<<"Enter the values of matrix 2 (Raw wise)"<<endl;
		 	cin>>bb2[0][0]>>bb2[0][1]>>bb2[1][0]>>bb2[1][1];
		 	int a=b2[0][0],b=b2[0][1],c=b2[1][0],d=b2[1][1],e=bb2[0][0],f=bb2[0][1],g=bb2[1][0],h=bb2[1][1];
		 	cout<<"-------------------------------------------"<<endl;
			 cout<<(a*e)+(b*g)<<" "<<(a*f)+(b*h)<<endl;
		 	 cout<<(c*e)+(d*g)<<" "<<(c*f)+(d*h)<<" Ans"<<endl;
		 	 cout<<"-------------------------------------------"<<endl;
		 }
	 	else{
	 		cout<<"-------------------------------------------"<<endl;
	 		cout<<"You entered a wrong choice"<<endl;
	 		cout<<"-------------------------------------------"<<endl;
		 }
	 }
	 else if(n==2){
	 	cout<<"-------------------------------------------"<<endl;
	 	cout<<"1.Sum of 2x2 matrices"<<endl;
	 	cout<<"2.Sum of 3x3 matrices"<<endl;
	 	cout<<"-------------------------------------------"<<endl;
	 	cin>>n2;
	 	if(n2==1){
	 		cout<<"-------------------------------------------"<<endl;
	 		cout<<"Enter the values of matrix 1 (Raw wise)"<<endl;
	 		cin>>b2[0][0]>>b2[0][1]>>b2[1][0]>>b2[1][1];
	 		cout<<"Enter the values of matrix 2 (Raw wise)"<<endl;
			cin>>bb2[0][0]>>bb2[0][1]>>bb2[1][0]>>bb2[1][1];
	 		int w,x,y,z;
	 		int a=b2[0][0],b=b2[0][1],c=b2[1][0],d=b2[1][1],e=bb2[0][0],f=bb2[0][1],g=bb2[1][0],h=bb2[1][1];
	 		cout<<"-------------------------------------------"<<endl;
	 		cout<<a+e<<" "<<b+f<<endl;
	 		cout<<c+g<<" "<<d+h<<" Ans"<<endl;
	 		cout<<"-------------------------------------------"<<endl;
		 }
		 else if(n2==2){
		 	cout<<"-------------------------------------------"<<endl;
		 	cout<<"Enter the values of matrix 1 (Raw wise)"<<endl;
	 		cin>>c3[0][0]>>c3[0][1]>>c3[0][2]>>c3[1][0]>>c3[1][1]>>c3[1][2]>>c3[2][0]>>c3[2][1]>>c3[2][2];
	 		cout<<"Enter the values of matrix 2 (Raw wise)"<<endl;
			cin>>cc3[0][0]>>cc3[0][1]>>cc3[0][2]>>cc3[1][0]>>cc3[1][1]>>cc3[1][2]>>cc3[2][0]>>cc3[2][1]>>cc3[2][2];
			int a=c3[0][0],b=c3[0][1],c=c3[0][2],d=c3[1][0],e=c3[1][1],f=c3[1][2],g=c3[2][0],h=c3[2][1],i=c3[2][2];
			int j=cc3[0][0],k=cc3[0][1],k1=cc3[0][2],m=cc3[1][0],n=cc3[1][1],o=cc3[1][2],p=cc3[2][0],q=cc3[2][1],r=cc3[2][2];
			cout<<"-------------------------------------------"<<endl;
			cout<<a+j<<" "<<b+k<<" "<<c+k1<<endl;
			cout<<d+m<<" "<<e+n<<" "<<f+o<<endl;
			cout<<g+p<<" "<<h+q<<" "<<i+r<<" Ans"<<endl;
			cout<<"-------------------------------------------"<<endl;
		 }  
		 
		 else{
		 	cout<<"-------------------------------------------"<<endl;
		 	cout<<"You entered a wrong choice"<<endl;
		 	cout<<"-------------------------------------------"<<endl;
		 }
	 	
	 }
	 else if(n==3){
		cout<<"-------------------------------------------"<<endl;
		cout<<"1.of 3x3 matrix."<<endl;
		cout<<"2.of 2x2 matrix"<<endl;
		cout<<"-------------------------------------------"<<endl;
	    cin>>n1;
	    if(n1==1){
	    	cout<<"-------------------------------------------"<<endl;
	    	cout<<"Enter the values of matrix raw wise"<<endl;
	    	cin>>c3[0][0]>>c3[0][1]>>c3[0][2]>>c3[1][0]>>c3[1][1]>>c3[1][2]>>c3[2][0]>>c3[2][1]>>c3[2][2];
	    	int x,y,z,a=c3[0][0],b=c3[0][1],c=c3[0][2],d=c3[1][0],e=c3[1][1],f=c3[1][2],g=c3[2][0],h=c3[2][1],i=c3[2][2];
	    	x=a*((e*i)-(f*h));
	    	y=b*((d*i)-(f*g));
	    	z=c*((d*h)-(e*g));
			cout<<"Determinant="<<x-y+z<<" Ans";
			cout<<"-------------------------------------------"<<endl;
		}
		else if(n1==2){
			cout<<"-------------------------------------------"<<endl;
			cout<<"Enter the values of matrix"<<endl;
			cin>>b2[0][0]>>b2[0][1]>>b2[1][0]>>b2[1][1];
			int a=b2[0][0],b=b2[0][1],c=b2[1][0],d=b2[1][1];
			cout<<"Determinant="<<(a*d)-(b*c)<<" Ans"<<endl;
			cout<<"-------------------------------------------"<<endl;
		}
		else{
			cout<<"-------------------------------------------"<<endl;
			cout<<"You Entered a Wrong Choice"<<endl;
			cout<<"-------------------------------------------"<<endl;
		}
	}
	else{
		cout<<"-------------------------------------------"<<endl;
			cout<<"You Entered a Wrong Choice"<<endl;
			cout<<"-------------------------------------------"<<endl;
	}
	return 0;
}
