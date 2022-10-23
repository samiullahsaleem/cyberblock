public class StackSloveHanoiApp {



    public static void main(String[] args) {

        StackArrayClass A = new StackArrayClass(5, "A");

        StackArrayClass B = new StackArrayClass(5, "B");

        StackArrayClass C = new StackArrayClass(5, "C");

        SloveHanoiClass obj = new SloveHanoiClass();



        A.push('R');

        A.push('Q');

        A.push('P');

        A.display();

        C.display();

        obj.SloveHanoi(A.getTop() + 1, A, B, C);

        A.display();

        C.display();

    }

}



class StackArrayClass {



    private int maxsize;

    private char[] stackData;

    private int top;

    private String name;



    public String getName() {

        return name;

    }



    public int getTop() {

        return top;

    }



    public StackArrayClass(int s, String name) {

        this.maxsize = s;

        this.name = name;

        this.stackData = new char[s];

        this.top = -1;

    }



    public boolean isEmptyStack() {

        return top == -1;

    }



    public boolean isFullStack() {

        return top == maxsize - 1;

    }



    public void push(char item) {

        if (isFullStack()) {

            System.out.println("Stack is full, Cannot push into stack");

        }

        this.stackData[++(this.top)] = item;

    }



    public char pop() throws Exception {

        if (isEmptyStack()) {

            throw new Exception("Stack is empty, Cannot pop from stack");

        }

        return this.stackData[(this.top)--];

    }



    public void display() {

        System.out.println();

        System.out.println("Starting to print "+this.getName()+" Stack data ->");

        for (int i = top; 0 <= i; i--) {

            System.out.println(this.stackData[i]);

        }

        System.out.println("End printing Stack data.");

        System.out.println();

    }



}



class SloveHanoiClass {



    public void SloveHanoi(int n, StackArrayClass A, StackArrayClass B, StackArrayClass C) {

        if (n == 0) {

            return;

        }



        char item = ' ';

        SloveHanoi(n - 1, A, C, B);

        try {

            C.push(A.pop());



        } catch (Exception e) {

            System.out.println(e.getMessage());

        }

        System.out.println(" Move item  from " + A.getName() + " to " + C.getName());

        SloveHanoi(n - 1, B, A, C);

    }



}

