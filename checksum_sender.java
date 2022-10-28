package checksum_sender;
 
import java.io.*;
import java.net.*;
import java.util.*;
 
public class Checksum_Sender
{
    
    private int MAX = 100;
     
    private Socket socket = null;
    private ServerSocket servsock = null;
    private DataInputStream dis = null;
    private DataOutputStream dos = null;
     
    public Checksum_Sender(int port) throws IOException
    {
        servsock = new ServerSocket(port);
         
        
        socket = servsock.accept();
         
        dis = new DataInputStream(socket.getInputStream());
        dos = new DataOutputStream(socket.getOutputStream());
         
        while (true)
        {
            int i, l, sum = 0, nob;
            Scanner sc = new Scanner(System.in);
            System.out.println("Enter data length");
            l = sc.nextInt();
             
           
            int data[] = new int[MAX];
             
           
            int c_data[] = new int[MAX];
             
            System.out.println("Enter data to send");
             
            for (i = 0; i < l; i++)
            {
                data[i] = sc.nextInt();
                 
                
                nob = (int)(Math.floor(Math.log(data[i]) / Math.log(2))) + 1;
                 
               
                c_data[i] = ((1 << nob) - 1) ^ data[i];
                 

                sum += c_data[i];
            }
             
            data[i] = sum;
            l += 1;
             
            System.out.println("Checksum Calculated is : " + sum);
            System.out.println("Data being sent along with Checksum.....");
             
            
            dos.writeInt(l);
             

            for (int j = 0; j < l; j++)
                dos.writeInt(data[j]);
             
            if (dis.readUTF().equals("success"))
            {  
                System.out.println("Thanks for the feedback!! Message received
                                   Successfully!");
                break;
            }
             
            else if (dis.readUTF().equals("failure"))
            {
                System.out.println("Message was not received successfully!");
                break;
            }
        }
         
        
        dis.close();
        dos.close();
        socket.close();
    }
 
    
    public static void main(String args[]) throws IOException
    {
        Checksum_Sender cs = new Checksum_Sender(45678);
    }
}