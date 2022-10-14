//bsef19m013
//Osama Sultan
#include<iostream>
#include"stack.h"
#include"stack.cpp"
using namespace std;
bool isBalanced(string s)
{
	//this function will count no of braces and check balancey
	//if all starting braces have thier ending braces the expression is valid
	//else expression is invalid
	int validString = 0;    
	stack<char> myString; //default size is taken as the size of entered string
	for (int i = 0; i < s.length(); i++)
	{
		if (s[i] == '(' || s[i] == '{' || s[i] == '[')
			myString.push(s[i]);  //push starting braces
		else if (s[i] == ')' || s[i] == '}' || s[i] == ']')
		{
			char check;
			check = myString.pop(); //if ending brace found pop and check for corressponding starting brace
			if (s[i] == ')' && check == '(' || s[i] == ']' && check == '[' || s[i] == '}' && check == '{')
			{
				validString++;
			}
			else
			{
				myString.push(check);
				myString.push(s[i]);
				validString = 0;
			}

		}
	}
	return myString.getTop() + 1 == 0 ? true : false;  //if sting is valid stack should be empty
}
void infixToPostfix(string& s)
{
	if (isBalanced(s) == true)
	{
		stack <char> operators;  //stack to store operators of expression
		string output;
		for (int i = 0; i < s.length(); i++)
		{
			if (s[i] == '+' || s[i] == '*' || s[i] == '/' || s[i] == '-' || s[i] == '^'|| s[i] == '(' || s[i] == ')' )
			{
				if (operators.isEmpty() == true)  //if there's nothing in stack then push operator
					operators.push(s[i]);
				else             //else check presedence and associativity 
				{
					if (s[i] == '-' || s[i] == '+')
					{

						//commparing with all high and same presedence on stack top
						for (; operators.Top() == '/' || operators.Top() == '*' || operators.Top() == '^' || operators.Top()=='+'|| operators.Top() == '-';)
							output += operators.pop();
						
						operators.push(s[i]);
					}
					else if (s[i] == '*' || s[i] == '/')
					{
						for (; operators.Top() == '/' || operators.Top() == '^'|| operators.Top() == '*' ;)
							output += operators.pop();
						
						operators.push(s[i]);
					}
					else if (s[i] == '^')
					{
						for (; operators.Top() == '^';)
							output += operators.pop();
						
						operators.push(s[i]);
					}
					else if (s[i] == '(')
					{
						operators.push(s[i]);   // push starting bracket
					}
					else if (s[i] == ')')
					{
						for (;;)  //pop everything after stacrting brace including starting brace 
						{
							if (operators.Top() == '(')
							{
								operators.pop();
								break;
							}
							else
								output += operators.pop(); // store all operators in output expression
						}
					}
				}
			}
			else
				output += s[i];
		}

		for (; operators.isEmpty() != true;)
			output += operators.pop();  //all the left operators will be stored at the end of expression(concatination)

		cout << "\nConverted postfix expression is : ";
		cout << output;
	}
	else
		cout << "String is invalid...!";

	cout << "\n--------------------------------------------\n";
}

void evaluate( string &s,int key)
{
	stack<int> operands;
	if (key == 0) //0 for prefix
	{
		for (int i = s.length() - 1; i >= 0; i--)
		{
			if (s[i] == '/' || s[i] == '*' || s[i] == '+' || s[i] == '-' || s[i] == '^')
			{
				int pop1 = int(operands.pop());
				int pop2 = int(operands.pop());
				switch (s[i])
				{
				case '/':
				{
					operands.push(pop1 / pop2); break;
				}
				case '*':
				{
					operands.push(pop1 * pop2); break;
				}
				case '+':
				{
					operands.push(pop1 + pop2); break;
				}
				case '-': {
					operands.push(pop1 - pop2); break;
				}
				case '^':
				{
					operands.push(pop1 ^ pop2); break;
				}
				default:
					break;
				}
			}
			else
				operands.push(s[i]-48);
		}
		if (operands.getTop() == 0)
		{
			cout << "\nANSWERE :" << operands.Top();
			cout << "\n--------------------------------------------\n";
		}
		else
		{
			cout << "\nExpression is invalid";
			cout << "\n--------------------------------------------\n";
		}
	}
	else if(key == 1) //1 for postfix
	{
		for (int i = 0; i < s.length(); i++)
		{
			if (s[i] == '/' || s[i] == '*' || s[i] == '+' || s[i] == '-' || s[i] == '^')
			{

				// if operators comes pop 2 elements from stack ans apply operation
				int pop1 = int(operands.pop());
				int pop2 = int(operands.pop());
				switch (s[i])  // for checking operators and applying operation
				{
				case '/':
				{
					operands.push(pop2 / pop1); break;
				}
				case '*':
				{
					operands.push(pop2 * pop1); break;
				}
				case '+':
				{
					operands.push(pop2 + pop1); break;
				}
				case '-': {
					operands.push(pop2 - pop1); break;
				}
				case '^':
				{
					operands.push(pop2 ^ pop1); break;
				}
				default:
					break;
				}
			}
			else
				operands.push(s[i] - 48);
		}
		if (operands.getTop() == 0)
		{
			cout << "\nANSWERE :" << operands.Top();
			cout << "\n--------------------------------------------\n";
		}
		else
		{
			cout << "\nExpression is invalid";
			cout << "\n--------------------------------------------\n";
		}
	}


}

int main()
{
	int option =1;  //by defaults its 1 so loop condition works fine

	while (option != 5)
	{

		cout << "Enter \n";
		cout << "1 --> Check expression Validity\n";
		cout << "2 --> infix to postfix convertor\n";
		cout << "3 --> expression evaluation\n";
		cout << "\nEnter your option here : ";
		cin >> option;   //asking users choice
		if (option == 1)   //1 for checking equation validity
		{
			cout << "\n****Expression Vlaidity****\nEnter your expression : ";
			string exp;
			cin >> exp;

			bool balanceCheck = isBalanced(exp);
			if (balanceCheck == true)
			{
				cout << "\nExpression is valid";
				cout << "\n--------------------------------------------\n";
			}
			else
			{
				cout << "\nExpression is Not valid";
				cout << "\n--------------------------------------------\n";
			}

			cout << "4 --> To reuse program\n";
			cout << "5 --> To end program\n";
			cout << "Enter option : ";
			cin >> option;
		}
		else if (option == 2)   // 2 for conversion
		{
			cout << "\n****Infinix to postfix****\nEnter your expression : ";
			string exp;
			cin >> exp;
			infixToPostfix(exp);

			cout << "4 --> To reuse program\n";
			cout << "5 --> To end program\n";
			cout << "Enter option : ";
			cin >> option;
		}
		else if (option == 3)  //3 for evaluation
		{
			cout << "\n****Evaluation****\nEnter your expression : ";
			string exp;
			cin >> exp;
			cout << "Is you expression prefix or postfix : \n";
			cout << "Enter 0 --> prefix or 1 --> postfix : ";
			int option2;
			cin >> option2;
			if (option2 == 0)
				evaluate(exp, 0);
			else if (option2 == 1)
				evaluate(exp, 1);
			else
				cout << "Entered command is invalid";

			cout << "4 --> To reuse program\n";
			cout << "5 --> To end program\n";
			cout << "Enter option : ";
			cin >> option;
			if (option == 4) //4 for reuse
			{
				continue;
			}
			else
			{
				cout << "\noops!wrong command";  //if not 4 then break and end task
				break;
			}

		}
		else if (option == 5)  // if 5 then ended
		{
			cout << "\nProgram ended successfully";
			break;
		}
	}

	system("pause");
	return 0;
}