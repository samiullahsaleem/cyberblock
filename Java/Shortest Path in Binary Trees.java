
import java.util.*;
import java.lang.*;
import java.io.*;

/* Name of the class has to be "Main" only if the class is public. */
class Codechef
{
	public static void main (String[] args) throws java.lang.Exception
	{
		Scanner scn = new Scanner(System.in);
		int t = scn.nextInt();
		while(t-->0){
		    int a = scn.nextInt();
		    int b = scn.nextInt();
		    int ans = 0;
		    while (a != b) {
		        if (a > b) {
		            a = a / 2;
		        }
		        else if (b > a) {
		            b = b / 2;
		        }
		        ans++;
		    }
		    System.out.println(ans);
		}
	}
}
