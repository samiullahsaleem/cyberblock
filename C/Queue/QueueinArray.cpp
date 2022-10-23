#include <iostream>
#include <stdlib.h>

struct queue
{
    int item[10];
    int first;
    int last;
};

void createQueue(struct queue *q)
{
    q->first = -1;
    q->last = -1;
}

int isEmpty(struct queue *q)
{
    if (q->last > -1)
        return 1;
    else
        return 0;
}

int isFull(struct queue *q)
{
    if (q->last < 10)
        return 1;
    else
        return 0;
}

int main()
{
    return 0;
}