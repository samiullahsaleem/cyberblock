#include <stdio.h>
#include <stdlib.h>
struct queue
{
    int data;
    struct queue *next;
};

struct queue *head = NULL;
struct queue *tail = NULL;

void enQueue(int val)
{
    if (head == NULL)
    {
        struct queue *temp = (struct queue *)malloc(sizeof(struct queue));
        temp->data = val;
        temp->next = NULL;
        head = temp;
        tail = temp;
    }
    else
    {
        struct queue *temp = (struct queue *)malloc(sizeof(struct queue));
        temp->data = val;
        temp->next = NULL;
        tail->next = temp;
        tail = temp;
    }
}
int deQueue()
{
   if(head==NULL)
   {
    printf("The queue is empty\n");
    return -1;
   }
   else
   {
    int x = head->data;
    struct queue *t;
    t = head;
    head = head->next;
    free(t);
    return x;
   }
}
int peek()
{
    printf("The value of top element is %d", head->data);
    return head->data;
}
void display()
{
    struct queue *p = head;
    while (p != NULL)
    {
        printf("%d ", p->data);
        p = p->next;
    }
    printf("\n");
}
int isEmpty()
{
    if (head == NULL)
        return 1;
    else
        return 0;
}
int main()
{

    enQueue(3);
    enQueue(4);
    enQueue(5);
    printf("%d\n", isEmpty());
    display();
    deQueue();
    display();
    deQueue();
    display();
    deQueue();
    deQueue();
    printf("%d\n", isEmpty());
    enQueue(7);
    system("cls");
    display();
    return 0;
}