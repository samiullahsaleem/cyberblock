/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author MAHREEN ASAMA
 */
public class OrderShake {
    private ChocolateShake csh;
    
    public OrderShake(MilkShakeShop mss){
        csh=mss.createChocolateShake();
    }
    
    public void getShake(){
        csh.addMilk();
        csh.addIngredients();
        csh.blendShake();
        csh.presentShake();
    }
}
