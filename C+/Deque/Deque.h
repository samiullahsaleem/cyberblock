#pragma once
class Deque
{
	private:
		int* q;
		int maxSize;
		int currSize;
		int back, front;
	public:
	Deque(int n);
	~Deque();
	bool isEmpty();
	bool isFull();
	void makeEmpty();
	void display();
	bool insertAtBack(int val);
	bool removeFromFront(int& val);
	bool removeFromBack(int& val);
	bool insertAtFront(int val);

};

