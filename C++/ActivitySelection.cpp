#include<iostream>
using namespace std;

main(){
	int x, size;
	cout<<"Enter size: ";
	cin>>size;

	int *job = new int[size];
	int *start = new int[size];
	int *end = new int[size];
	
	for(int i=0;i<size;i++){
		job[i] = i+1; 
	}
	
	cout<<"Enter profit and weight according to object: \n";
	
	for(int i=0;i<size;i++){
		cout<<"\nStart time(in number) for Job:"<<job[i]<<" ";
		cin>>start[i];
		cout<<"\nEnd time(in number) for Job:"<<job[i]<<" ";
		cin>>end[i];
	}
	
	for(int i=0;i<size-1;i++)
	{
		for(int j=0;j<size-i-1;j++)
		{
		 	if(end[j] > end[j+1]){
		 		swap(job[j],job[j+1]);
		 		swap(start[j],start[j+1]);
		 		swap(end[j],end[j+1]);
			 }
		}
	}
	int j = 0;
	cout<<"\nJob selected: "<<job[0];
	for(int i=1;i<size;i++){
		if(start[i] >= end[j] ){
			cout<<"\nJob selected: "<<job[i];
			j = i;
		}
	}	
}
