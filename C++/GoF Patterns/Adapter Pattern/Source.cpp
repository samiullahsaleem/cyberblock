#include<iostream>
using namespace std;

class ShirtStyle
{
private:
	string style;
public:
	ShirtStyle(string s)
	{
		style = s;
	}

	void setStyle(string s)
	{
		style = s;
	}

	string getStyle()
	{
		return style;
	}
};

class Dress
{
public:
	ShirtStyle getShirt()
	{
		return ShirtStyle(" Shirt");
	}
};

class DressMaker
{
public:
	virtual ShirtStyle getSimpleStyle() = 0;
	virtual ShirtStyle getFormalStyle() = 0;
	virtual ShirtStyle getArmyStyle() = 0;
};

class DressChanger : public DressMaker
{
private:
	Dress dress;
	ShirtStyle changeDress(ShirtStyle ss, string style)
	{
		return ShirtStyle(style + ss.getStyle());
	}
public:
	ShirtStyle getSimpleStyle()
	{
		return dress.getShirt();
	}
	ShirtStyle getFormalStyle()
	{
		ShirtStyle s = dress.getShirt();

		return changeDress(s, "Plain Dress");
	}
	ShirtStyle getArmyStyle()
	{
		ShirtStyle s = dress.getShirt();

		return changeDress(s, "Army Print");
	}
};

int main()
{
	int choice;
	ShirtStyle* SS;
	DressMaker* DM = new DressChanger();
	cout << "Enter 1 if you Want Simple Shirt for your Game Character\n";
	cout << "Enter 2 if you Want Fromal Shirt for your Game Character\n";
	cout << "Enter 3 if you Want Army Shirt for your Game Character\n";
	cin >> choice;
	if (choice == 1)
	{
		SS = new ShirtStyle(DM->getSimpleStyle());
		cout << SS->getStyle() << "\n";
	}
	if (choice == 2)
	{
		SS = new ShirtStyle(DM->getFormalStyle());
		cout << SS->getStyle() << "\n";
	}
	if (choice == 3)
	{
		SS = new ShirtStyle(DM->getArmyStyle());
		cout << SS->getStyle() << "\n";
	}
	return 0;
}