#include<stdio.h>
#include<stdlib.h>

//WITHOUT SHIFTING
struct queue
{  
    int size;
    int front;
    int rear;
    int *Q;
};
void create(struct queue* q,int x)
{
    q->size=x;
    q->front=q->rear=-1;
    q->Q=(int*)malloc(sizeof(int)*q->size);
}
void inFront(struct queue* q, int val)
{
    if(q->rear<q->size-2)
    {
        for(int i=q->rear;i>q->front;i--)
        { 
            q->Q[i+1]=q->Q[i];
        }
        q->Q[q->front]=val;
    }
}
// void inRear();
// void deFront();
// void deRear();

void display(struct queue* q)
{
    for(int i=q->front+1;i<=q->rear;i++)
    {
        printf("%d ",q->Q[i]);
        printf("d");
    }
    printf("\n");
}
int main()
{   struct queue q;
    create(&q,5);
    inFront(&q,6);
    inFront(&q,6);
    inFront(&q,6);
    display(&q);
  return 0;  
}