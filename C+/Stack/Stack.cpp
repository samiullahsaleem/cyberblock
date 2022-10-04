#include "Stack.h"
#include <string>
#include <iostream>
using namespace std;

Stack::Stack()
{
	stk = new int[SIZE];
	maxSize = SIZE;
	top = -1;
}
int Stack::topI()
{
	return top;
}

bool Stack::isFull()
{
	if (top = maxSize - 1)
	{
		return true;
	}
	else
	{
		return false;
	}
}

bool Stack::isEmpty()
{
	if (top == -1)
	{
		return true;
	}
	else
	{
		return false;
	}
}

bool Stack::push(int val)
{
	if (top != maxSize - 1)
	{
		top++;
		stk[top] = val;
		return true;
	}
	else
	{
		false;
	}

}

bool Stack::pop(int& val)
{
	if (isEmpty())
	{
		return false;
	}
	else
	{
		val = stk[top];
		top--;
		return true;
	}
}
 
bool Stack::getTop(int & val) 
{
	if (!(isEmpty()))
	{
		return false;
	}
	else
	{
		val = stk[top];
		return true;
	}

}

Stack::~Stack()
{
	if (stk!=nullptr)	{
		delete[] stk;
		stk = nullptr;
	}
}