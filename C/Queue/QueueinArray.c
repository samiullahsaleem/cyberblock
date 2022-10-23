#include <stdio.h>
#include <stdlib.h>

struct queue
{
    int size;
    int *Q;
    int front, rear;
};
void create(struct queue *q, int x)
{
    q->front = q->rear = -1;
    q->size = x;
    q->Q = (int *)malloc(sizeof(int) * q->size);
}
void Enqueue(struct queue *q, int val)
{
    if(q->rear==q->size-1&&q->front==-1)
    {
      printf("The Queue is full\n");
    }
    else if(q->rear<q->size-1)
    {   q->rear++;
        q->Q[q->rear]=val;
    }
    else if(q->rear==q->size-1&&q->front>-1)
    {
        int x=q->front+1,n=q->rear;
        for(int i=0;i<=n-x;i++)
        {
            q->Q[i]=q->Q[i+x];
        }
        q->front=-1;
        q->rear=n-x;
        q->Q[q->rear+1]=val;
        q->rear++;
    }
}
int Dequeue(struct queue* q)
{   
    int x=q->Q[q->front];
    q->front=q->front+1;
    return x;
}
void display(struct queue* q)
{
    for(int i=q->front+1;i<=q->rear;i++)
    {
        printf("%d ",q->Q[i]);
    }
    printf("\n");
}
int main()
{   
    struct queue q;
    create(&q,5);
    Enqueue(&q,7);
    Enqueue(&q,4);
    Enqueue(&q,2);
    Enqueue(&q,44);
    display(&q);
    Dequeue(&q);
    Dequeue(&q);
    display(&q);
    Enqueue(&q,6);
    Enqueue(&q,9);
    Enqueue(&q,8);
    display(&q);
    Enqueue(&q,33);
    display(&q);
    
    return 0;
}