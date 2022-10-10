#include"Queue.h"
#include<iostream>
using namespace std;

template<class type>
Queue<type>::Queue(int s) 
{
	size = s;
	queue = new type[size];
	front = 0;
	rear = 0;
	count = 0;
}
template<class type>
void Queue<type>::enQueue(type elem) 
{
	if (!isFull()) 
	{	
		queue[rear] = elem;
		rear = (rear + 1) % size;
		count++;
	}
	else 
	{
		this->Resize();
		queue[rear] = elem;
		rear = (rear + 1) % size;
		count++;
	}
}
template<class type>
type Queue<type>::deQueue()
{

	if (isEmpty() == false)
	{
		type f = queue[front];
		front = (front + 1) % size;
		count--;
		return f;
	}
	else
		return - 1;
}
template<class type>
bool Queue<type>::isFull()
{
	if (count == size)
		return true;
	else
		return false;
}
template<class type>
bool Queue<type>::isEmpty() 
{
	if (count == size)
		return true;
	else
		return false;
}
template<class type>
void Queue<type>::Resize() 
{
	int index = 0;
	int newSize = size;
	size *= 2;
	type* temp = queue;
	queue = new type[size];
	for (int i = front; index!=count; i=(i+1)%newSize)
	{
		queue[index++] = temp[i];
	}
	front = 0;
	rear = index;
}
template<class type>
void Queue<type>::showStructure()
{
	for (int i = front; i !=rear; i = (i + 1) % size)
	{
		cout << queue[i];
		if (i == rear - 1)
			cout << "              <--rear";
		cout << endl;
	}
	cout << endl;
}