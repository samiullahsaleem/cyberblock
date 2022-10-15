/*
Tayyab Nasir
0218-BSCS-2019
E2
*/


#include<iostream>
#include<stack>
#include<cstdlib>
using namespace std;
class Stack {
public:
	void push(int item);
	void Pop();
	bool isEmpty();
	bool isFull();
	int Peek();
	int top;
	int size1=200;
	char* a;
	void evaluatePostFix(char arr[],int size);
	void ShowResult(char arr[],int size);
	Stack()
	{
		top = -1;
		a = new char[size1];
    }
	~Stack()
	{
		delete[]a;
	}
};
int main()
{
	char arr[]={"12 38 + 5 *"};
	Stack* obj = new Stack();
	obj->evaluatePostFix(arr, 10);
	return 0;
}

void Stack:: push(int item)
{
	if (top >= -1 && top < size1 - 1)
	{
		a[++top] = item;
	}
//	else
		//cout << "Stack Overflow";

}
void Stack::Pop()
{
	int item;
	if (isEmpty()==true)
	//cout << "Stack Underflow";
	item = a[top--];
	//cout<<"Item removed "<<item<<"\n";
}
bool Stack::isEmpty()
{
	if (top == -1)
	{
		return true;
	}
	else return false;
}
bool Stack::isFull()
{
	if (top == size1 - 1)
		return true;
	else return false;
}
int Stack::Peek()
{
	if (top < size1 - 1)
	return a[top];
}
void Stack::evaluatePostFix(char arr[],int size)
{
bool flag=true;
char oper;
int Result,i=0;
stack<int> tempStack;
while(arr[i]!='\0')
{
	if(arr[i]==' '&&isdigit(arr[i-1]))
	{
		int SecondLast=arr[i-1]-'0';
		Pop();
		int Val=SecondLast;
		if(isdigit(arr[i-2]))
		{
		int last=arr[i-2]-'0';
		Pop();
		Val=(last*10)+SecondLast;
        }
		tempStack.push(Val);
    
	 }
	else if(arr[i]!=' '&&!isdigit(arr[i]))
	{
		oper =arr[i];
		flag=false;
	}
	else
	push(arr[i]);
	if(flag==false)
	{
		int beforeTop=tempStack.top();
		tempStack.pop();
		int Top=tempStack.top();
		tempStack.pop();
		switch(oper)
		{
			case '+': Result=Top+beforeTop; tempStack.push(Result); break;
			case '-': Result=Top-beforeTop; tempStack.push(Result); break;
			case '*': Result=Top*beforeTop; tempStack.push(Result); break;
			case '/': Result=Top/beforeTop; tempStack.push(Result); break;
		}
		}
		flag=true;
		    i++;
		}	
		cout<<tempStack.top();
	}
