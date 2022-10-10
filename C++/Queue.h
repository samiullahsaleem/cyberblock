#pragma once
template<class type>
class Queue {
	type* queue;
	int size;
	int front;
	int rear;
	int count;
public:
	Queue()
	{
	size = 1;
	queue = new type[size];
	front = -1;
	rear = -1;
	count = 0;
    }
	Queue(int s);
	void enQueue(type data);
	type deQueue();
	bool isFull();
	bool isEmpty();
	void Resize();

	void showStructure();
};