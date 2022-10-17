#include<iostream>
using namespace std;


class Sandwich
{
public:
	virtual void makeSandwich() = 0;
};

class GrilledCheeseSanwich : public Sandwich
{
private:
	double chicken;
	double cheese;
	double egg;
	double salad;
	int quantity;
public:
	GrilledCheeseSanwich()
	{
		chicken = 10;
		egg = 0;
		cheese = 30;
		salad = 15;
		quantity = 10;
	}
	void makeSandwich()
	{
		cout << "Grilled Sandwich Made with " << chicken << "g Chicken, " << egg << "g Egg, " << cheese << "g Cheese, " << salad << "g Salad\n";
		quantity--;
	}
};

class GrilledChickenSanwich : public Sandwich
{
private:
	double chicken;
	double cheese;
	double egg;
	double salad;
	int quantity;
public:
	GrilledChickenSanwich()
	{
		chicken = 80;
		egg = 0;
		cheese = 0;
		salad = 30;
		quantity = 10;
	}
	void makeSandwich()
	{
		cout << "Grilled Sandwich Made with " << chicken << "g Chicken, " << egg << "g Egg, " << cheese << "g Cheese, " << salad << "g Salad\n";
		quantity--;
	}
};

class Drink
{
public:
	virtual void makeDrink() = 0;
};

class Mint_Margartia : public Drink
{
private:
	int quantity;
public:
	Mint_Margartia()
	{
		quantity = 10;
	}
	void makeDrink()
	{
		cout << "Mint Margarita Made\n";
		quantity--;
	}
};

class ChocolateSmoothie : public Drink
{
private:
	int quantity;
public:
	ChocolateSmoothie()
	{
		quantity = 10;
	}
	void makeDrink()
	{
		cout << "Chocolate Smoothie Made\n";
		quantity--;
	}
};

class Deal
{
public:
	virtual Drink* makeBeverages() = 0;
	virtual Sandwich* makeFood() = 0;
};

class HungerDeal : public Deal
{
public:
	Drink* makeBeverages()
	{
		return new Mint_Margartia();
	}
	Sandwich* makeFood()
	{
		return new GrilledChickenSanwich();
	}
};

class LunchDeal : public Deal
{
public:
	Drink* makeBeverages()
	{
		return new ChocolateSmoothie();
	}
	Sandwich* makeFood()
	{
		return new GrilledCheeseSanwich();
	}
};

class Menu
{
private:
	Sandwich* sandwich;
	Drink* drink;
public:
	Menu(Deal* deals)
	{
		drink = deals->makeBeverages();
		sandwich = deals->makeFood();
	}
	void makeFood()
	{
		drink->makeDrink();
		sandwich->makeSandwich();
	}
};

int main()
{
	int choice;
	Deal* deal;
	Menu* menu;
	cout << "Enter 1 to Make Lunch Deal\nEnter 2 to Make Hunger Deal\n";
	cin >> choice;

	if (choice == 1)
	{
		deal = new LunchDeal();
		menu = new Menu(deal);
		menu->makeFood();
	}
	else if (choice == 2)
	{
		deal = new HungerDeal();
		menu = new Menu(deal);
		menu->makeFood();
	}
	else
	{
		cout << "We have no other deal available\n";
	}
	return 0;
}