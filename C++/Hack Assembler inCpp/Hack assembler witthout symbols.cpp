#include <iostream>
#include <string>
#include <fstream>
#include <sstream>
#include <cstdlib>
using namespace std;

void remove_comments (string name1,string name2);
string parsing (string s);
string instruction_type(string ins,string num_part,string char_part,string special_part);
string A_instructions(string ins,string num_part,string char_part);
string decToBinary(int n);
string C_instructions(string ins);
string computation (string ins, int p);
string destination (string tmp3, int p);
string jump(string tmp4, int p);

string instruction_type(string ins,string num_part,string char_part,string special_part)
{
    if(special_part[0]=='@')     /// detecting A-type instructions
    {
        if(special_part[0]=='@' && (special_part.length()!=1 ||ins.length()==1))     /// detecting error in A-type instructions
        {
           return "1";
        }
        else
        {
           return  A_instructions(ins,num_part,char_part);
        }
    }
    else
    {
          return C_instructions(ins);
    }
}
string A_instructions(string ins,string num_part,string char_part)
{
    int number=0;
    if(char_part.length()==0)          /// contition to check whether A-instruction has symbol (variable or label) or not
        {
            stringstream temp(num_part);
            temp>>number;                       /// conversion from string to int
        }
    else if (char_part.length()>0)
        {
            return "1";
        }
        string MSB="0";
        string resultant =MSB+decToBinary(number);      /// converting A-type instructions
        return resultant;
}
string decToBinary(int n)
{
    string a="";
    for (int i = 14; i >= 0; i--)
    {
        int k = n >> i;
        if (k & 1)
            {
                a=a+"1";
            }
        else
           {
            a=a+"0";
           }
    }
    return a;
}
string C_instructions(string ins)
{
    int i;
    string MSB ="111";
    string zeros= "000";
    string resultant;
    for (i=0;i<ins.length();i++)  ///Detecting C-type instructions
    {
        if(ins[i]=='=')               /// converting dest=comp
        {
            return resultant= MSB+computation(ins,i)+destination(ins,i)+zeros;
        }
        else if (ins[i]==';')        /// converting comp;jump
        {
            return resultant= MSB+computation(ins,i)+zeros+jump(ins,i);
        }
    }
    if ((ins[0]=='(' && ins[ins.length()-1]==')') || ins=="" || ins=="\n")
    {
        return resultant="0";
    }
    else
    {
        return "1";
    }
}
string computation (string ins, int p)
{
    string r;
    string a="0";
    string val;
    if(ins[p]=='=')
    {
        r = ins.substr(p+1, ins.length()-1);
    }
    else if(ins[p]==';')
    {
        r = ins.substr(0, p);
    }
    if (r=="0")
    {
        val="101010";
    }
    else if(r=="1")
    {
        val="111111";
    }
    else if(r=="-1")
    {
        val="111010";
    }
    else if(r=="D")
    {
        val="001100";
    }
    else if(r=="A"|| r=="M")
    {
        val="110000";
    }
    else if(r=="!D")
    {
        val="001101";
    }
    else if(r=="!A"||r=="!M")
    {
        val="110001";
    }
    else if(r=="-D")
    {
        val="001111";
    }
    else if(r=="-A"||r=="-M")
    {
        val="110011";
    }
    else if(r=="D+1")
    {
        val="011111";
    }
    else if(r=="A+1"||r=="M+1")
    {
        val="110111";
    }
    else if(r=="D-1")
    {
        val="001110";
    }
    else if(r=="A-1"||r=="M-1")
    {
        val="110010";
    }
    else if(r=="D+A"||r=="A+D"||r=="M+D"||r=="D+M")
    {
        val="000010";
    }
    else if(r=="D-A"||r=="D-M")
    {
        val="010011";
    }
    else if(r=="A-D"||r=="M-D")
    {
        val="000111";
    }
    else if(r=="D&A"||r=="A&D"||r=="M&D"||r=="D&M")
    {
        val="000000";
    }
    else if(r=="D|A"||r=="A|D"||r=="M|D"||r=="D|M")
    {
        val="010101";
    }
    else
    {
        val="1";
    }
    for (int i=0;i<r.length();i++)
    {
        if(r[i]=='M')
        {
            a="1";
            break;
        }
    }
    return a+val;
}
string destination (string tmp3, int p)
{
    string d;
    string val_d;
    d = tmp3.substr(0,p);
    if(d=="M")
    {
        val_d="001";
    }
    else if(d=="D")
    {
        val_d="010";
    }
    else if(d=="MD"||d=="DM")
    {
        val_d="011";
    }
    else if(d=="A")
    {
        val_d="100";
    }
    else if(d=="AM"||d=="MA")
    {
        val_d="101";
    }
    else if(d=="AD"||d=="DA")
    {
        val_d="110";
    }
    else if(d=="AMD"||"MAD"||"DMA"||"DAM"||"ADM"||"MDA")
    {
        val_d="111";
    }
    else
    {
        val_d="1";            //to detect error
    }
    return val_d;
}
string jump(string tmp4, int p)
{
    string j;
    string val;
    j = tmp4.substr(p+1,tmp4.length()-1);
    if(j=="JGT")
    {
        val="001";
    }
    else if(j=="JEQ")
    {
        val="010";
    }
    else if(j=="JGE")
    {
        val="011";
    }
    else if(j=="JLT")
    {
        val="100";
    }
    else if(j=="JNE")
    {
        val="101";
    }
    else if(j=="JLE")
    {
        val="110";
    }
    else if(j=="JMP")
    {
        val="111";
    }
    else
    {
      val="1";         // to detect error
    }
    return val;
}
void remove_comments (string name1,string name2)
{
 fstream file_r;
 fstream file_w;
 file_r.open(name1.c_str(),ios::in);
 file_w.open(name2.c_str(),ios::out);
 if (!file_r)
    {
        cout<<"ERROR ! Could not open the file "<<name1<<" properly."<<endl;
        exit(0);
    }
 else
   {
      int line_no=0;
      while (file_r.eof()==0)
       {
           string line;
           string cleaned_line;
           string machine_ins;
           string  error ="0";
           getline(file_r,line);
           for (int i=0;i<line.length();i++)
           {
               if(line[i]=='/' &&line[i+1]=='/')
               {
                   break;
               }
               else if (line[i]=='/' &&line[i+1]!='/')
               {
                   error ="1";
               }
                else if(line[i]!='/'&& line[i]!=' '&& line[i]!='\t'&& line[i]!='\n' &&line!="")
                {
                    cleaned_line.push_back(line[i]);
                }
           }
           if(error=="0")
           {
             machine_ins =parsing(cleaned_line);
           }
           if (machine_ins.length()==16)
           {
               file_w<<machine_ins<<endl;
           }
           else if(machine_ins=="0")
           {
               error="0";
           }
           else if (machine_ins=="1"||machine_ins.length()<16)
           {
                cout<<"There is some error at line "<<line_no<<endl;
                file_w<<"There is some error at line "<<line_no<<endl;
                return;
           }
           line_no=line_no+1;
        }
        cout<<"Process completed successfully !!"<<endl;
       file_r.close();
       file_w.close();
       return;
   }
}

string parsing (string line)
{
    string num, cha, special;
    for (int i=0;i<line.length();i++)
    {
        if (line[i]>='0'&&line[i]<='9')
        {
            num.push_back(line[i]);
        }
        else if((line[i] >= 'A' && line[i] <= 'Z') || (line[i] >= 'a' && line[i] <= 'z'))
        {
            cha.push_back(line[i]);
        }
        else
        {
            special.push_back(line[i]);
        }
    }
    return instruction_type(line,num,cha,special);
}
int main()
{
    string c;
    cout <<"Enter the input file name with .asm extension"<< endl;
    cin>>c;
    string f;
    cout <<"Enter the output file name with .hack extension"<< endl;
    cin>>f;
    remove_comments(c,f);
    return 0;
}
