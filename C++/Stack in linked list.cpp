#include<iostream>
using namespace std;
class Node {
public:
	int data;
	Node* next;
	Node(int d) {   //constructor
		data = d;
		next = nullptr;
	}

	friend class Stack;
};

	class Stack {
	private:
		Node* top;
	public:
		Stack() {
			top = nullptr;
		}


		// is empty func
		bool isEmpty()         
		{
			if (top == NULL)
				return true;
			return false;
		}

		

		
		//insert at Start
		void push(int data)
		{
			Node* ptr = new Node(data);
			if (top == NULL)
			{
				cout << "Stack is empty" << endl;
				 top = ptr;
			}

			else
			{
				Node* temp = top;
				top = ptr;
				ptr->next = temp;

			}

		}
		
		
		

		//Delete At Start
		void Pop()
		{
			if (top == NULL)
			{
				cout << "Stack is Empty " << endl;
			}
			else
			{
				Node* temp = top;
				top = top->next;
				delete temp;
			}
			
		}





		// Display func of linked list
		void displayStack()
		{
			if (top == NULL)
				cout << "Stack is Empty " << endl;
			else
			{
				Node* cur = top;
				while (cur != NULL)
				{
					cout << cur->data << " ";
					cur = cur->next;
				}

			}
		}
		

		
		
			//Destructor of Linked List
		~Stack()
		{
			Node* temp = top;

			while (top != NULL)
			{
				temp = top->next;
				delete top;
				top = temp;
				
			}
		}


	};
	int main() {
		Stack obj;
		if (obj.isEmpty()) cout << "Stack is Empty " << endl;
		obj.insertAtLast(10);
		obj.insertAtLast(20);
		obj.insertAtLast(30);
		obj.insertAtLast(40);
		obj.insertAtLast(50);
		obj.displayList();

		obj.insertAtPos(3, 100);
		obj.displayList();
		cout << endl;
		obj.insertAtPos(1, 25);
		obj.displayList();
		cout << "\n------------" << endl;
		obj.deleteAtStart();
		obj.displayList();
		cout << "\n---------\n" << endl;
		obj.deleteAtLast();
		obj.displayList();
		cout << "\n===========================\n";
		obj.deleteAtPos(3);
		obj.displayList();*/

		obj.delete(30);
		return 0;
	}
