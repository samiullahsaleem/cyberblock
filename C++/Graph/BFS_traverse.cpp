/*
 * C Program to Traverse a Graph using BFS
 */
#include <iostream>
#include <conio.h>
using namespace std;
int c = 0, t = 0;
struct node_info
{
    int no;
    int st_time;
}*q = NULL, *r = NULL, *x = NULL;
struct node
{
    node_info *pt;
    node *next;
}*front = NULL, *rear = NULL, *p = NULL, *np = NULL;
void push(node_info *ptr)
{
    np = new node;
    np->pt = ptr;
    np->next = NULL;
    if (front == NULL)
    {
        front = rear = np;
        rear->next = NULL;
    }
    else
    {
        rear->next = np;
        rear = np;
        rear->next = NULL;
    }
}
node_info *remove()
{
    if (front == NULL)
    {
        cout<<"empty queue\n";
    }
    else
    {
        p = front;
        x = p->pt;
        front = front->next;
        delete(p);
        return(x);
    }
}
void bfs(int *v,int am[][7],int i)
{ 
    if (c == 0)
    {
        q = new node_info;
        q->no = i;
        q->st_time = t++;
        cout<<"time of visitation for node "<<q->no<<":"<<q->st_time<<"\n\n";
        v[i] = 1;
        push(q);
    }
    c++;
    for (int j = 0; j < 7; j++)
    {
        if (am[i][j] == 0 || (am[i][j] == 1 && v[j] == 1))
            continue;
        else if (am[i][j] == 1 && v[j] == 0)
        {
            r = new node_info;
            r->no = j;
            r->st_time = t++;
            cout<<"time of visitation for node "<<r->no<<":"<<r->st_time<<"\n\n";
            v[j] = 1;
            push(r);
        }
    }
    remove();
    if (c <= 6 && front != NULL)
        bfs(v, am, remove()->no);
}  
int main()
{
    int v[7], am[7][7];
    for (int i = 0; i < 7; i++)
        v[i] = 0;
    for (int i = 0; i < 7; i++)
    {
        cout<<"enter the values for adjacency matrix row:"<<i+1<<endl;
        for (int j = 0; j < 7; j++)
        {
            cin>>am[i][j];
        }
    }
    bfs(v, am, 0);
    getch();
}
