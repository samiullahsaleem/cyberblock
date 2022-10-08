import java.util.*;
import javax.swing.*;

public class LCS{
	public static String printLCS(String s1, String s2){
		int[][] dp=new int[s1.length()+1][s2.length()+1];
		int max=0;
		int[] max_index=new int[2];

		for(int i=1; i<s1.length()+1;i++)
		{
			for(int j=1;j<s2.length()+1;j++)
			{
				if (s1.charAt(i-1)==s2.charAt(j-1))
				{
					dp[i][j]=dp[i-1][j-1]+1;
				}
				else{
					dp[i][j]=0;
				}
				if(dp[i][j]>max){
					max=dp[i][j];
					max_index[0]=i;
					max_index[1]=j;
				}
			}
		}

		String lcs="";
		for(int t=max; t>=1;t--){
			lcs=s1.charAt(max_index[0]-1)+lcs;
			max_index[0]=max_index[0]-1;
		}
		
		return lcs;
	}

	public static void main(String args[]){
		Scanner in =new Scanner(System.in);
		System.out.print("Enter String no 1: ");
		String s1=in.nextLine();
		System.out.print("Enter String no 2: ");
		String s2=in.nextLine();
		//String s1="abcdgh";
		//String s2="acdghr";
		String LCS=printLCS(s1,s2);
		System.out.println("The longest common substring is: "+LCS);
		
	}
	

}