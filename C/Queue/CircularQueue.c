#include <stdio.h>
#include <stdlib.h>

struct queue
{
    int size;
    int front;
    int rear;
    int *Q;
};

void create(struct queue *q, int x)
{
    q->size = x;
    q->front = q->rear = -1;
    q->Q = (int *)malloc(sizeof(int) * q->size);
}
void enQueue(struct queue *q, int val)
{
    if ((q->rear + 1) % q->size == q->front)
    {
        printf("The Queue is full\n");
    }
    else
    {
        q->Q[(q->rear + 1) % q->size] = val;
        q->rear = (q->rear + 1) % q->size;
    }
}
int deQueue(struct queue *q)
{
    int x = -1;
    if (q->front == q->rear)
    {
        printf("Queue is empty\n");
    }
    else
    {
        x = q->Q[q->front];
        q->front = (q->front + 1) % q->size;
    }
    return x;
}
void display(struct queue q)
{
    int i = (q.front + 1) % q.size;
    while (i != (q.rear + 1) % q.size)
    {
        printf("%d ", q.Q[i]);
        i = (i + 1) % q.size;
    }
    printf("\n");
}
// void display(struct queue q)
// {
// int i=q.front+1;
// do
// {
// printf("%d ",q.Q[i]);
// i=(i+1)%q.size;
// }while(i!=(q.rear+1)%q.size);
// printf("\n");
// }

int main()
{
    struct queue q;
    create(&q, 6);
    enQueue(&q, 5);
    enQueue(&q, 4);
    enQueue(&q, 3);
    enQueue(&q, 2);
    display(q);
    deQueue(&q);
    display(q);

    return 0;
}