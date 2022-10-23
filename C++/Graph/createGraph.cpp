//creating a graph using adjancey matrix
#include<bits/stdc++.h>
#include<iostream>

struct Graph{
    int V;
    int E;
    int **Adj;//since we need 2D matrix
};
struct Graph *adjMatrixOfGraph()
{
    /* data */
    int i , u , v;
    struct Graph *G = (struct Graph*) malloc(sizeof(struct Graph));
    if (!G)     
    {
        /* code */
        printf("Memory Error");
        return;
    }
    scanf("Number of Vertices: %d , Number of Edges: %d" , &G->V , &G->E );
    G->Adj= malloc(sizeof(G->V * G->V));
    for(u=0; u<G->V; u++)
    {
        for (v  = 0; v < G->V; v++)
        {
            /* code */
            G->Adj[v][v] =0;
        }
        
    }

    for ( i = 0; i < G->E; i++)
    {
        /* code */
        //read an edge
        scanf("Reading edge: %d %d" , &u , &v);
        //for undirected graphs set both the bits
        G->Adj[u][v] =1;
        G->Adj[v][u] = 1;
    }
    return G;
    


    

    
    

};

int main()
{
    
    return 0;
}
