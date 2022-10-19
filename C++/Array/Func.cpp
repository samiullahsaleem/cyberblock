//#include <iostream> 
//using namespace std; 
//void qualify();
//void noQualify();
// void qualify(int sal)
// {
// if (sal>=2)
// {
// 	cout<<"Qualified"<<endl;
// 	
// }	
// }
// 
// void noQualified()
// 
// 
// 
// 	{
// 		cout<<"No qualified"<<endl;
//	 }
//	 
//	 
// 
//int main() 
// { 
// double salary; 
// int years; 
// cout << "This program will determine if you qualify\n"; 
// cout << "for our credit card.\n"; 
// cout << "What is your annual salary? "; 
// cin >> salary; 
// cout << "How many years have you worked at your "; 
// cout << "current job? "; 
// cin >> years; 
// if (salary >= 17000.0 && years >= 2) 
// qualify(years); 
// else 
// noQualify(); 
// 
//
// return 0; 
// } 

//#include <iostream>
//using namespace std;
//void displayValue(int);
//int main()
//{
//	
//	cout<<"I am passing 5 to displayValue"<<endl;
//displayValue(5);
//displayValue(20.0);
//displayValue(25+25);
//displayValue(1005);
//cout<<"Now I am back in main"<<endl;
//}
//
//void displayValue(int num)
//{
//	cout<<"The value is :"<<num<<endl;
//}




//#include <iostream>
//using namespace std;
//void show(int, int,int);
//int main()
//{
//	int value1,value2,value3;
//	cout<<"Enter the values for 1,2 and 3"<<endl;
//	cin>>value1>>value2>>value3;
//	
//	show(value1,value2,value3);
//	return 0;
//}
//
//void show(int num1,int num2,int num3)
//{
//	cout<<(num1+num2+num3)<<endl;
//	
//}

//#include <iostream>
//using namespace std;
//void num(int);
//int main()
//{
//	int value;
//	cout<<"Input a value:"<<endl;
//	cin>>value;
//	num(value);
//	cout<<"Now the value is:"<<value<<endl;
//	
//}
//
//void num(int num)
//{
//	num = 0;
//	cout<<"num is : "<<num<<endl;
//	
//}


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
		 while(choice < ADULT_CHOICE || choice > QUIT_CHOICE)
		 {
		 	cout<<"Please enter a valid choice!!!"<<endl;		 }
					cin>>choice; 
					 
			 }
				while(choice != QUIT_CHOICE);
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
					 		break;
					 	
					 }
					 
					 }
					 }			

