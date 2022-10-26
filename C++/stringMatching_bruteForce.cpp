#include<iostream>
using namespace std;

main(){
	string T= "Syed Saad";
	string P= "aa";
	int i,j;
	for( i=0; i<T.size()-P.size()+1; i++)
	{		
		for( j=0; j<P.size() && P[j]==T[i+j]; j++)
		{}
		if(j==P.size())
				cout<<"Fount at: "<<i;
	}	
}