
import javax.swing.JOptionPane;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author MAHREEN ASAMA
 */
public class Driver {
    private static OrderShake getOrder(){
        OrderShake order = null;
        MilkShakeShop mss;
        System.out.println("---We have Chocolate Shake---");
        System.out.println("Press 'a' to order American Style Chocolate Shake");
        System.out.println("Press 'b' to order British Style Chocolate Shake");
        String type=JOptionPane.showInputDialog("Enter your Choice");
        if(type.equals("a")){
            mss=new AmericanStyleMilkShake();
            order=new OrderShake(mss);
        }
        else if(type.equals("b")){
            mss=new BritishStyleMilkShake();
            order=new OrderShake(mss);
        }
        else{
            System.out.println("---Sorry, we don't have this category---");
        }
        return order;
    }
    public static void main(String[] args) {
        OrderShake order=getOrder();
        order.getShake();
    }
}
