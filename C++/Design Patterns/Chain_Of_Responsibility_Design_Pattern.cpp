#include <iostream>
#include <vector>
#include <ctime>
using namespace std;

class Base
{
	Base* next;
public:
	Base()
	{
		next = 0;
	}
	void setNext(Base* n)
	{
		next = n;
	}
	void add(Base* n)
	{
		if (next)
			next->add(n);
		else
			next = n;
	}

	virtual void handle(int i)
	{
		next->handle(i);
	}
};

class Handler1 : public Base
{
public:
	void handle(int i)
	{
		if (rand() % 3)
		{
			cout << "H1 passed " << i << "  ";
			Base::handle(i);
		}
		else
			cout << "H1 handled " << i << "  ";
	}
};

class Handler2 : public Base
{
public:
	void handle(int i)
	{
		if (rand() % 3)
		{
			cout << "H2 passed " << i << "  ";
			Base::handle(i);
		}
		else
			cout << "H2 handled " << i << "  ";
	}
};

class Handler3 : public Base
{
public:
	void handle(int i)
	{
		if (rand() % 3)
		{
			cout << "\nThis request can not be handled by any of the handlers.\n";
		}
		else
			cout << "H3 handled " << i << "  ";
	}
};

int main()
{
	srand(time(0));
	Handler1 root;
	Handler2 two;
	Handler3 thr;
	root.add(&two);
	root.add(&thr);
	for (int i = 1; i < 10; i++)
	{
		root.handle(i);
		cout << '\n';
	}
}
