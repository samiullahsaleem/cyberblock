import java.util.*;
import javax.swing.*;

public class SelectingBreakpoints{
		public static ArrayList<Integer> SelectBreakPoints(int C, int d, int[] arr)   // C is capacity of tank, d is total distance and arra contains breakpoints
		{
			ArrayList<Integer> selectedStations=new ArrayList<Integer>();
			selectedStations.add(0);
			Arrays.sort(arr);
			int x=0;    	//start
			int maxReach=0;
			
			while(x!=arr[arr.length-1]){
				maxReach=x+C;
				int stationIndex = getStationNo(arr,maxReach);
				if(arr[stationIndex]==arr[arr.length-1])
				{
					return selectedStations;
				}
				x=arr[stationIndex];
				selectedStations.add(stationIndex);
			}
			
			return selectedStations;
		}
		
		public static int getStationNo(int[] arr, int maxReach){
			int station=0;
			for(int i=0; i<arr.length;i++){
				if(arr[i]<=maxReach){
				station=i;
				}
				else{
					return station;
				}	
			}
			
			return station;
		}
		public static int getStationNo(int[] arr, int maxReach){
			int m=arr.length();
			int l=arr
		}
		
   		 
	
	public static void main(String args[]){
		int[] bp=new int[]{0,10,5,25,20,30,35,39,41,40,47,50};
		int capacity=10;
		int d=50;
		ArrayList<Integer> selectedStations= SelectBreakPoints(capacity, d,bp);
		for(int i=0; i<selectedStations.size();i++){
			System.out.println(bp[selectedStations.get(i)]);
		}
			
	}
	

}