#include<iostream>
using namespace std;

class Weapon
{
public:
	virtual void reload() = 0;
	virtual void fire() = 0;
};

class Pistol : public Weapon
{
private:
	int bullets;
public:
	Pistol()
	{
		bullets = 11;
	}
	void reload()
	{
		cout << "Reloading Pistol\n";
	}
	void fire()
	{
		cout << "Firing from Pistol\n";
		bullets--;
	}
};

class Sinper : public Weapon
{
private:
	int bullets;
public:
	Sinper()
	{
		bullets = 5;
	}
	void reload()
	{
		cout << "Reloading Sniper\n";
	}
	void fire()
	{
		cout << "Firing from Sniper\n";
		bullets--;
	}
};

class TargetRange
{
public:
	void useWeapon()
	{
		Weapon *ammunation = selectWeapon();
		ammunation->reload();
		ammunation->fire();
	}
	virtual Weapon* selectWeapon() = 0;
};

class  ShortTargetRagne : public TargetRange
{
public:
	Weapon* selectWeapon() override
	{
		return new Pistol();
	}
};

class  LongTargetRagne : public TargetRange
{
public:
	Weapon* selectWeapon()
	{
		return new Sinper();
	}
};


int main()
{
	TargetRange* TR;
	int choice;
	cout << "Enter 1 if you want to Select Short Target Range\n";
	cout << "Enter 2 if you want to Select Long Target Range\n";
	cin >> choice;
	if (choice == 1)
	{
		TR = new ShortTargetRagne();
		TR->useWeapon();
	}
	else if(choice == 2)
	{
		TR = new LongTargetRagne();
		TR->useWeapon();
	}
	else
	{
		cout << "WRONG INPUT NO GUN SELECTED\n";
	}
	return 0;
}