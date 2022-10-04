#pragma once
const int SIZE = 40;
class Stack
{
	private:
		int* stk;
		int maxSize;
		int top;
	public:
		Stack();
		bool isFull();
		bool isEmpty();
		bool push(int val);
		bool pop(int& val) ;
		bool getTop(int& val) ;
		int topI();
		~Stack();
};

