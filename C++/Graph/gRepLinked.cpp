#include<iostream>
using namespace std;

struct Graph
{
    int V;
    int E;
    int *Adj;//head pointer to linked list
};
//Nodes of the linked list

struct ListNode
{
    int vertexNumber;
    struct LiatNode *next;
};

struct Graph *adjListOfGraph(){
    int i , x , y;
    struct ListNode *temp;
    struct Graph *G = (struct Graph*) malloc(sizeof(struct Graph));
    if (!G)     
    {
        /* code */
        printf("Memory Error");
        return;
    }
    scanf("Number of Vertices: %d , Number of Edges: %d" , &G->V , &G->E );
    G->Adj= malloc(sizeof(G->V * G->V));

    for(i=0; i<G->V; i++)
    {
        G->Adj[i] = (struct ListNode* )malloc(sizeof(struct ListNode));
        G->Adj[i] ->vertexNumber = i;
        G->Adj->next = G->Adj[i];
    }

    for(i =0; i<E; i++)
    {
        //read an edge
        scanf("Reading Edge: %d %d", &x , &y);
        temp = (struct ListNode *)malloc(struct ListNode);
        temp ->vertexNumber = y;
        temp ->next = G->Adj[x];
        G->Adj[x] -> next = temp;
        temp = (struct ListNode * )malloc(struct ListNode);
        temp -> vertexNumber = y;
        temp -> next = G->Adj[y];
        G->Adj[y] -> next = temp;
    }
    return G;
}


