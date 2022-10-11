#include<iostream>
using namespace std;
struct COURSE
{
    string title;
    int code;
    int credithrs;
    double gradepoints;

void init(string ti, int cd, int chr, double gp)
{
    title = ti;
    code = cd;
    credithrs = chr;


}
void printcourseinfo()
{
    cout<<"TITLE : "<<title<<"\tCODE : "<<code<<"\tCredit Hours : "<<credithrs<<"\tGrade Points : "<<gradepoints<<endl;
}
};
struct STUDENT
{
    string name;
    int id;
    double cgpa;
    double finalgpa;
    double fgpa;
    double tgp=0;
    COURSE mycourses[9];
void init(string namee, int idn )
{
    name = namee;
     id = idn;

}
void calculatecgpa()
{
    double temp1 = 0 , temp2 = 0;
    for(int i =0; i<9 ; i++)
    {
        temp1 = temp1 + mycourses[i].gradepoints * mycourses[i].credithrs;
        temp2 = temp2 + mycourses[i].credithrs;
        tgp = temp1;
    }
    cgpa = temp1 / temp2;
     fgpa = (cgpa + finalgpa)/2;

}

void printstudentinfo()
{
    cout<<"\nName : "<<name<<"\t\tId Num : "<<id<<"\t\tGPA : "<<cgpa<<"\t\tCGPA : "<<fgpa<<"\t\tTotal Grade Points : "<<tgp<<endl;
    cout<<"\nTitle\t\tCode\t\tCredit Hours\t\tGrade Points"<<endl;
    for(int i =0; i<9; i++)
    {
        mycourses[i].printcourseinfo();
    }
}
};
int main()
{
    STUDENT s;
    cout<<"Enter the Name of the Student : ";
    cin>>s.name;
    cout<<"Enter the Id of the Student : ";
    cin>>s.id;
    cout<<endl;
    for(int i =0; i<9; i++)
    {
        cout<<"Enter the Title of the Course : ";
        cin>>s.mycourses[i].title;
        cout<<"Enter the Code of the Course : ";
        cin>>s.mycourses[i].code;
        cout<<"Enter the Credit Hours of the Course : ";
        cin>>s.mycourses[i].credithrs;
        cout<<"Enter the Grade Points of the Course : ";
        cin>>s.mycourses[i].gradepoints;
        cout<<endl;
    }
    cout<<"Enter your previous GPA : ";
    cin>>s.finalgpa;
    s.calculatecgpa();
    s.printstudentinfo();
    return 0;
}
