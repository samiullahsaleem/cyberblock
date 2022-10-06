#include <iostream>
using namespace std;

class Node
{
private:
    int data;
    Node *left;
    Node *right;

public:
    Node(int data, Node *left, Node *right)
    {
        this->data = data;
        this->left = left;
        this->right = right;
        
    }

    friend class Tree;
};

class Tree
{
private:
    Node *root;

    void inOrder(Node *root) // Tree traversal
    {
        if (root != NULL)
        {
            inOrder(root->left);
            cout << root->data << "\t";
            inOrder(root->right);   
        }
    }

public:
    Tree()
    {
        root = NULL;
    }
    bool isEmpty()
    {
        return !root;
    }
    void insertNode(int data)
    {
        Node *newNode = new Node(data, NULL, NULL);
        Node *curNode = root;
        Node *preNode = NULL;

        while (curNode != NULL)
        {
            preNode = curNode;
            if (data < curNode->data)
                curNode = curNode->left;
            else
                curNode = curNode->right;
        }

        if (preNode == NULL)
            root = newNode;
        else if (preNode->data > data)
            preNode->left = newNode;
        else
            preNode->right = newNode;
    }
    void inOrder()
    {
        inOrder(root);
    }
    void searchNode(int data)
    {

        if (!isEmpty())
        {
            Node *curNode = root;
            Node *preNode = NULL;

            while (curNode->data != data)
            {
                if (curNode != NULL)
                    break;
                preNode = curNode;
                if (data < curNode->data)
                    curNode = curNode->left;
                else
                    curNode = curNode->right;
            }
            if (curNode->data == data)
                cout << "\nSearch successful\n";
            else
                cout << "\nError! not found\n";
        }
    }
};

int main()
{
    Tree obj;
    cout << obj.isEmpty() << endl;

    obj.insertNode(1);
    obj.insertNode(4);
    obj.insertNode(6);
    obj.insertNode(3);
    obj.insertNode(2);

    obj.inOrder();

    cout << endl;
    cout << obj.isEmpty() << endl;
}