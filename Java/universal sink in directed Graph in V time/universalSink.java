import java.util.*;
import javax.swing.*;
import java.io.*;
public class universalSink {
   public static int findUniversalSink(int[][] A){ // overall time complexity= O(V)+O(V)= 2 O(V)= O(V)

	int dim=A[0].length;
	int i=0;
	int j=0;
	while(i<=dim&&j<dim){ // runs V times beacause on every iteration j increases by 1 where V is the number of vertices
		if(A[i][j]==0){
			j=j+1;
		}
		else{
			i=j;
			j=j+1;
		}
	}
	if(j==dim){
		boolean flag=true;
		int k=i;
		for(int m=0;m<k;m++){      // in worst case runs V times when (k=i is the last row of matrix)
			if(A[k][m]==0 &&A[m][k]==1 ){
				flag=true;
			}
			else{
				return -1;
			}	
		}
		return i;	
	}
	 return -1;
	}
	public static void main(String args[]){
		//int[][] A={{0,1,1,1,1},{0,0,0,1,1},{0,1,0,1,1},{0,0,0,0,1},{0,0,0,0,0}};
		int[][] A={{0,1,1,1,1},{0,0,0,0,0},{0,1,0,1,1},{0,1,0,0,1},{0,0,0,0,0}};
		int v= findUniversalSink(A);
		System.out.println("The universal vertex is: "+v);
	}
}