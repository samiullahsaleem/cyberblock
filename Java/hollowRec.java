// Hollow rectangle Pattern using the concept of nested loops in Java.
// By Soham Gupta (http://github.com/gupta-soham/) (https://www.linkedin.com/in/soham-gupta-in/)

public class hollowRec {
    public static void hollow_rect(int totRows, int totCols){
        //outer loop
        for(int i = 1; i <= totRows; i++){
            // inner loop - columns
            for(int j = 1; j <= totCols; j++){
                // cell - (i,j)
                if(i == 1 || i == totRows || j == 1 || j == totCols){
                    //boundary cells
                    System.out.print(" * ");
                }
                else {
                    System.out.print("   ");
                }
            }
            System.out.println();
        }
    }
    
    public static void main(String[] args) {
        hollow_rect(4, 5);
    }
}
