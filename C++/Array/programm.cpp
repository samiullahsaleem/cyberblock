#include <iostream>
#include <iomanip>
using namespace std;
void showmenue();
void showfees(double,int);
int main()
{
int choice;
int months;
const int ADULT_CHOICE=1,
       CHILD_CHOICE=2,
       SENIOR_CHOICE=3,
      QUIT_CHOICE=4;

const double ADULT = 40.0,
             CHILD = 20.0,
		 SENIOR = 30.0;
		 
		 cout<<fixed<<showpoint <<setprecision(2);
		 
		 
		 do 
		 {
		 showmenue();
		 cin>>choice;
		 while (choice < ADULT_CHOICE || choice > QUIT_CHOICE)
		 {
		 	cout<<"Please enter a valid choice!!!"<<endl;		 }
					cin>>choice; 
					 
		 }
			 
			 if(choice != QUIT_CHOICE)
				
				{
					   cout<<"For how many months?"<<endl;	
					 cin>>months;
					 
					 
					 switch (choice)
					 {
					 	case ADULT_CHOICE:
					 		showfees(ADULT,months);
					 		break;
					 		
					 	case CHILD_CHOICE:
					 		showfees(CHILD,months);
					 		break;
					 		
					 	case SENIOR_CHOICE:
					 		showfees(SENIOR,months);
					 	
					 	
					 }
					 
				}
			}
			
					 while (choice != QUIT_CHOICE);
					 return 0;
					 
				}
				
			void showmenue()
				{
					cout<<"Health club membership Menue";
					<<"1. Standard Adult Membership";
	                        <<"2.Child Membership ";
	                        <<"3.Senior Citizen Membership";
	                        <<"4.Quit the programm";
	                        <<"Ënter your choice:"<<endl; 
				}
				
				
				void showfees(double memberRate, int months)
				{
					cout<<"Total charges are:$ "<<(memberRate * months)<<endl;
				}
				
				
