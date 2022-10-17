#include<stdio.h>
int arr[100],front=-1,rear=-1;
void enqueue(int n)
{
    int a;
    printf("\nEnter the element you want to enter:");
    scanf("%d",&a);
    if(front==-1 && rear==-1)
    {
        front=0;
        rear=0;
        arr[rear]=a;
    }
    else if((rear+1)%n==front){
        printf("\nOverflow!!!");
    }
    else
        {rear=(rear+1)%n;
         arr[rear]=a;
        }
}
void dequeue(int n)
{
    if((front==-1) && (rear==-1))
    {
        printf("\nUnderflow!!!");
    }
    else if(front==rear)
    {
        printf("\nThe deleted element is %d:",arr[front]);
        front=-1;
        rear=-1;
    }
    else{
        printf("\nThe deleted element is %d:",arr[front]);
        front=(front+1)%n;
    }
}
void display(int n)
{

    int i;
    i=front;
    if(front==-1)
    {
        printf("\nThe queue is empty.");
    }
    else{
        printf("\nThe queue is:");
        while(i<rear)
        {
            printf("%d ",arr[i]);
            i=(i+1)%n;
        }

        printf("%d" , arr[rear]);
    }
}
int main()
{
    int n,choice;
    char ch;

    printf("Enter the size of the array:");
    scanf("%d",&n);
    do{
    printf("\nThe options are:");
    printf("\n1.Insert");
    printf("\n2.Delete");
    printf("\n3.Display");
    printf("\nEnter your choice:");
    scanf("%d",&choice);
    switch(choice)
    {
    case 1:
        enqueue(n);
        break;
    case 2:
        dequeue(n);
        break;
    case 3:
        display(n);
        break;
    }
    printf("Do you want to continue? (Y/N)");
    ch=getch();
    }while(ch=='Y'||ch=='y');
    return 0;
}


