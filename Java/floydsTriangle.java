// Floyds Triangle Pattern using the concept of nested loops in Java.
// By Soham Gupta (http://github.com/gupta-soham/) (https://www.linkedin.com/in/soham-gupta-in/)

public class floydsTriangle {
    public static void floyd(int n){
        int counter = 1;
        for(int i=1; i<=n; i++){
            for(int j=1; j<=i ; j++){
                System.out.print(counter+" ");
                counter++;
                // for printing continuous numbers
                //System.out.print(j+" ");
            }
        System.out.println();
        }
    }

    public static void main(String args[]){
        floyd(5);
    }
}
