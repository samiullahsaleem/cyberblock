	//Geting thhe name of file from user and reading
	#include <iostream>
	#include <fstream>
	using namespace std;
	int main()
	{
		ifstream F;
		string filename;
		int num;
		
		cout<<"Enter the file name"<<endl;
cin>>filename;

		F.open(filename.c_str());
		
		if(F)
		{
			while(F>>num )
			{
				cout<<num  <<endl;
			}
			F.close();
		}
		else{
			cout<<"Erorr opening file"<<endl;
			
		}
		
		
		 return 0;
		}	
																			
