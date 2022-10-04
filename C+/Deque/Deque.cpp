//	Name: Sami Ullah Saleem
//	Section: Morning
//	Roll Number: BITF20M012
#include "Deque.h"
#include <iostream>
using namespace std;
Deque::Deque(int n)
{
	q = new int[n];
	maxSize = n;
	currSize = 0;
	back = -1;
	front = -1;
}
Deque::~Deque()
{
	delete[] q;
	q = nullptr;
}
bool Deque::isEmpty()
{
	if (currSize == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
bool Deque::isFull()
{
	if (currSize == maxSize)
	{
		return true;
	}
	else
	{
		return false;
	}
}

void Deque::makeEmpty()
{
	currSize = 0;
	front = -1;
	back = -1;
}

void Deque::display()
{
	int i;
	if (isEmpty())
	{
		cout << "Deque is Empty!" << endl;
	}
	cout << "Deque Elements are:" << endl;
	i = front;
	if (front <= back)
	{
		while (i <= back)
			cout << q[i + 1] << " ";
	}
	else
	{
		while (i <= maxSize - 1)
		{
			cout << q[i++] << " ";
		}
		i = 0;
		while (i <= back)
		{
			cout << q[i++] << " ";
		}
	}
	
}


bool Deque::removeFromFront(int& val)
{
	if (isEmpty())
	{
		return false;
	}
	val = q[front];
	if (front == back)
	{
		front = -1;
		back = -1;
	}
	else
	{
		if (front == maxSize - 1)
		{
			front = 0;
		}
		else
		{
			front = front + 1;
			return true;
		}
	}
}

bool Deque::insertAtBack(int val)
{
	if (isFull()) 
	{
		
		return false;
	}
	if (front == -1) 
	{
		front = 0;
		back = 0;
	}
	else if (back == maxSize- 1)
	{
		back = 0;
	}
	else
	{
		back = back + 1;
		currSize++;
	}
	q[back] = val;
	return true;
}

bool Deque::insertAtFront(int val)
{
	if (isFull())
	{
		return false;
	}

	if (front == -1)
	{
		front = 0;
		back = 0;
	}
	else if (front == 0)
	{
		front = maxSize - 1;
	}
	else
	{
		front = front - 1;
		currSize++;
	}
	q[front] = val;
	return true;
}

bool Deque::removeFromBack(int & val)
{
	if (isEmpty())
	{
		return false;
	}
	val = q[back];
	if (front == back)
	{
		front = -1;
		back = -1;
	}
	else if (back == 0)
	{
		back = maxSize - 1;
	}
	else
	{
		back = back - 1;
		return true;
	}
	
}

