#include <iostream>
using namespace std;

struct node
{
  int data;
  node *link;
};

class Circular_linked_list
{

private:
  node *last;

public:
  Circular_linked_list()
  {
    last = NULL;
  }

  void Create(int);                      // Create function
  void Display();                        // Display Function
  void Add_at_Beginning(int);            // Add Node at Beginning function
  void Add_at_Any_Position(int, int);    // Add Node at Any Position function
  void Add_at_End(int);                  // Add Node at End function
  void Delete_at_Beginning();            // Delete Node at Beginning function
  void Delete_at_Any_Position(int, int); // Delete Node at Any Position function
  void Delete_at_End();                  // Delete Node at Any End function
  void Update();                         // Update function function
  void Search(int);                      // Search function function
};

int main()
{
  Circular_linked_list C;
  int flag = 1;
  int option, num, pos, search;

  while (flag == 1)
  {
    cout << "\n\t\t\t Press 1  : Create Node.                 Press 2  : Display.            Press 3 : Add Node at Beginning.";
    cout << "\n\t\t\t Press 4  : Add Node at Any Position.    Press 5  : Add Node at End.    Press 6 : Delete Node at Beginning.";
    cout << "\n\t\t\t Press 7  : Delete Node at Any Position. Press 8  : Delete Node at End. Press 9 : Update Node.";
    cout << "\n\t\t\t Press 10 : Search.                      Press 11 : Exit.";
    cout << "\n\n\t\t\t\t\t\t\t\t Choice Menu: ";
    cin >> option;
    switch (option)
    {
    case 1:
    {
      cout << "\n\t\t\t Enter Value:";
      cin >> num;
      C.Create(num);
      break;
    }
    case 2:
    {
      cout << "\n\t\t\t";
      C.Display();
      break;
    }
    case 3:
    {
      cout << "\n\t\t\t Enter Value:";
      cin >> num;
      C.Add_at_Beginning(num);
      break;
    }
    case 4:
    {
      cout << "\n\t\t\t Enter Add Node at Any Position:";
      cin >> pos;
      cout << "\n\t\t\t Enter Value:";
      cin >> num;
      C.Add_at_Any_Position(num, pos);
      break;
    }
    case 5:
    {
      cout << "\n\t\t\t Enter Value:";
      cin >> num;
      C.Add_at_End(num);
      break;
    }
    case 6:
    {
      C.Delete_at_Beginning();
      break;
    }
    case 7:
    {
      cout << "\n\t\t\t Enter Add Node at Any Position:";
      cin >> pos;
      cout << "\n\t\t\t Enter Value: ";
      cin >> num;
      C.Delete_at_Any_Position(num, pos);
      break;
    }
    case 8:
    {
      C.Delete_at_End();
      break;
    }
    case 9:
    {
      C.Update();
      break;
    }
    case 10:
    {
      cout << "\n\t\t\t Enter Node Number For Search.";
      cin >> search;
      C.Search(search);
      break;
    }
    case 11:
    {
      flag = 0;
      break;
    }
    }
  }
}

void Circular_linked_list::Create(int value)
{

  node *ptr = new node;
  ptr->data = value;
  if (last == NULL)
  {
    last = ptr;
    ptr->link = last;
  }
  else
  {
    ptr->link = last->link;
    last->link = ptr;
    last = ptr;
  }
}

void Circular_linked_list::Display()
{
  node *ptr = new node;
  if (last == NULL)
  {
    cout << "\n\t\t\t Circular Linked List is Empty.";
    return;
  }
  ptr = last->link;
  while (ptr != last)
  {
    cout << "\n"
         << ptr->data << ": " << ptr->link;
    ptr = ptr->link;
  }
  cout << "\n"
       << ptr->data << ": " << ptr->link;
}

void Circular_linked_list::Add_at_Beginning(int value)
{
  if (last == NULL)
  {
    cout << "\n\t\t\t Circular Linked List is Empty.";
    return;
  }
  else
  {
    node *ptr = new node;
    ptr->data = value;
    ptr->link = last->link;
    last->link = ptr;
  }
}

void Circular_linked_list::Add_at_Any_Position(int value, int postion)
{
  if (last == NULL)
  {
    cout << "\n\t\t\t Circular Linked List is Empty.";
    return;
  }
  else
  {
    node *ptr = new node;
    node *pre = new node;
    node *cur = new node;
    ptr->data = value;
    cur = last->link;

    for (int i = 1; i < postion; i++)
    {
      pre = cur;
      cur = cur->link;
    }
    pre->link = ptr;
    ptr->link = cur;
  }
}

void Circular_linked_list::Add_at_End(int value)
{
  if (last == NULL)
  {
    cout << "\n\t\t\t Circular Linked List is Empty.";
    return;
  }
  else
  {
    node *ptr = new node;
    ptr->data = value;
    ptr->link = last->link;
    last->link = ptr;
    last = ptr;
  }
}

void Circular_linked_list::Delete_at_Beginning()
{
  if (last == NULL)
  {
    cout << "\n\t\t\t Circular Linked List is Empty.";
    return;
  }
  else
  {
    node *ptr = new node;
    ptr = last->link;
    last->link = ptr->link;
    delete ptr;
  }
}
void Circular_linked_list::Delete_at_Any_Position(int value, int postion)
{
  if (last == NULL)
  {
    cout << "\n\t\t\t Circular Linked List is Empty.";
    return;
  }
  else
  {
    node *pre = new node;
    node *cur = new node;
    cur = last->link;

    for (int i = 1; i < postion; i++)
    {
      pre = cur;
      cur = cur->link;
    }
    pre->link = cur->link;
  }
}

void Circular_linked_list::Delete_at_End()
{
  if (last == NULL)
  {
    cout << "\n\t\t\t Circular Linked List is Empty.";
    return;
  }
  else
  {
    node *pre = new node;
    node *cur = new node;
    cur = last->link;

    while (cur != last)
    {
      pre = cur;
      cur = cur->link;
    }
    pre->link = cur->link;
    last = pre;
    delete cur;
  }
}

void Circular_linked_list::Update()
{
  int new_num, old_num;
  node *cur = new node;

  cout << "\n\t\t\t Enter Node Old Value: ";
  cin >> old_num;
  cur = last->link;

  while (cur->link != last)
  {
    if (cur->data == old_num)
    {
      cout << "\n\t\t\t Enter New Value: ";
      cin >> new_num;
      cur->data = new_num;
      cout << "\n\t\t\t Node is Update. ";
      return;
    }
    else
    {
      cout << "\n\t\t\t Node is Not Update Because Node is Not found.";
    }
    cur = cur->link;
  }
}

void Circular_linked_list::Search(int num)
{
  node *cur = new node;
  cur = last->link;

  while (cur != last)
  {
    if (cur->data == num)
    {
      cout << "\n\t\t\t Node is Found. ";
      return;
    }
    else
    {
      cout << "\n\t\t\t Node is Not Found.";
    }
    cur = cur->link;
  }
}
