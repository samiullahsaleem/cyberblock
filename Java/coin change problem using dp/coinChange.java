import java.util.*;
import javax.swing.*;
import java.io.*;

public class coinChange {
	public static ArrayList<Integer> coinChangeUsingDP(int C, int[]coins){
		int noOfCoins=coins.length;
		int dpRows=noOfCoins+1;
		int dpColumns=C+1;
		int[][] dp=new int[dpRows][dpColumns];
		for(int j=0;j<dpColumns;j++){
			dp[1][j]=j;
		}
		System.out.println( "Printing initial dp: ");
		System.out.println(dpRows+" "+dpColumns);
		for(int i=0;i<dpRows;i++){
			for(int j=0; j<dpColumns;j++){
				System.out.print(dp[i][j]+" ");
			}
			System.out.println("");
		}
		for(int i=2;i<dpRows;i++){
			for(int j=1;j<dpColumns;j++){
				if(coins[i-1]<=j)
				{
					int include= 1+dp[i][j-coins[i-1]];
					int exclude= dp[i-1][j];
					if(include<exclude)
					{
						dp[i][j]=include;
					}
					else{
						dp[i][j]=exclude;
					}
				}
				else{
					dp[i][j]=dp[i-1][j];
				}
			}
		}
		System.out.println( "Printing filled dp: ");
		for(int i=0;i<dpRows;i++){
			for(int j=0; j<dpColumns;j++){
				System.out.print(dp[i][j]+" ");
			}
			System.out.println("");
		}

		// Traversing the dp to findout which coins are included to get change
		ArrayList<Integer> selectedCoins=new ArrayList<Integer>();
		int i=dpRows-1;
		int j=dpColumns-1;	
		while(i>0 && j>0){
			if(dp[i][j]!=dp[i-1][j])
			{
				selectedCoins.add(coins[i-1]);
				j=j-coins[i-1];
			}
			else{
				i=i-1;
			}
		}
		return selectedCoins;
	}

	public static void main(String args[]){
		 int[] coins=new int[]{1,2,5,10,20};
		int change=11;
		
		ArrayList<Integer> selectedCoins= coinChangeUsingDP(change,coins);
		System.out.println("The minimum number of coins to get the change are: "+selectedCoins.size());
		System.out.println("The coins will be: ");
		for(int i=0;i<selectedCoins.size();i++){
			System.out.println(selectedCoins.get(i));
		}
	}
	

}