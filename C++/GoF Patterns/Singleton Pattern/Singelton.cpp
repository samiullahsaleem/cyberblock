#include<iostream>
using namespace std;

class Capital
{
private:
	static Capital* instance;
	Capital(string n)
	{
		this->name = n;
	}
public:
	string name;
	static Capital* getInstance(string n)
	{
		if (instance == NULL)
		{
			instance = new Capital(n);
		}
		return instance;
	}
};

int main()
{
	Capital* C1 = C1->getInstance("Foo");
	Capital* C2 = C2->getInstance("Far");
	cout << C1->name << "\n";
	cout << C2->name << "\n";
	return 0;
}