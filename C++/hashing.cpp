#include<iostream>
#include<string>
using namespace std;
//hasing using linear probing technique.

class HashTable
{
private:
	string* table;
	int size;
	int CurSize;
public:
	HashTable(int size1)
	{
		table = new string[size1];
		size = size1;
		CurSize = 0;
	}
	~HashTable()
	{
		delete[]table;
		size = 0;
		CurSize = 0;
	}
	bool isEmpty()
	{
		if (CurSize == 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	bool isFull()
	{
		if (CurSize == size)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	double loadFacotor()
	{
		double a = CurSize;
		double b = size;
		return a / b;
	}
	int hashFunction(string name)
	{

		int sum = 0;
		int i = 0;
		while (name[i])
		{

			sum = sum + int(name[i]);
			i++;
		}
		return sum % size;
	}
	bool insert(string name)
	{
		int key = hashFunction(name);
		if (int(table[key][0]) == 0)
		{
			table[key] = name;
			return true;
		}
		else 
		{
			for (int i = key + 1;i != key;(i + 1) % size)
			{
				if (int(table[i][0]) == 0)
				{
					table[i] = name;
					return true;
				}
			}
		}
		return false;
		

	}
	bool search(string name)
	{
		int key = hashFunction(name);
		if (table[key] == name)
		{
			return true;
		}
		else
		{
			for (int i = key + 1;i != key;i=(i + 1) % size)
			{
				if (table[i] == name)
				{
					return true;
				}
			}
			return false;
		}

	}
	bool remove(string name)
	{
		int key = hashFunction(name);
		if (table[key] == name)
		{
			table[key]="";
			return true;
		}
		else {
			for (int i = key + 1;i != key;(i + 1) % size)
			{
				if (table[i] == name)
				{
					table[i] = "";
					return true;
				}
			}
			return false;
		}
	}
	void display()
	{
		for (int i = 0;i < size;i++)
		{
			if(int(table[i][0])!=0)
				cout << table[i]<<endl;
			else
			{
				cout << "EMPTY" << endl;
			}
		}
	}
};

int main()
{
	int s;
	cout << "Enter the size of hash table: ";
	cin >> s;
	HashTable my(s);
	int choice = 1;
	while (choice != 6)
	{
		cout << "\nEnter 1 to insert a name\n";
		cout << "\nEnter 2 to search for a name\n";
		cout << "\nEnter 3 to Remove a name\n";
		cout << "\nEnter 4 to Display the table\n";
		cout << "\nEnter 5 to display the load factor of the table\n";
		cout << "\nEnter 6 to Exit\n";
		cout << "---------------------------------------------------------";
		cout << "\nEnter your choice: ";
		cin >> choice;
		if (choice < 1 || choice>6)
		{
			cout << "\nYou have input wrong choice please input correct input by running program again: \n ";
			choice = 6;
		
		}
		cout << "\n---------------------------------------------------------\n";

		
		if (choice == 1)
		{
			string name;
			cin.ignore();
			cout << "Enter name: ";
			getline(cin, name);
			my.insert(name);

		}
		else if (choice == 2)
		{
			string name;
			cin.ignore();

			cout << "Enter name to search:";
			getline(cin, name);
			if (my.search(name))
				cout << "name found";
			else
				cout << "name cant found";
		}
		else if (choice == 3)
		{
			string name;
			cin.ignore();
			cout << "Enter name to remove:";
			getline(cin, name);
			my.remove(name);
			cout << "\n name is removed succesfuully:\n";
		}
		else if (choice == 4)
		{
			my.display();
		}
		
		else if (choice == 5)
		{
			cout << "The load factor of our hash table is: " << my.loadFacotor() << endl;
		}

	}
	
	
}