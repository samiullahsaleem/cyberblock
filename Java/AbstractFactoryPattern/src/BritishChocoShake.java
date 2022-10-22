/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author MAHREEN ASAMA
 */
public class BritishChocoShake implements ChocolateShake{

    @Override
    public void addMilk() {
        System.out.println("BritishChocoShake.addMilk()");
    }

    @Override
    public void addIngredients() {
        System.out.println("BritishChocoShake.addIngredients()");
    }

    @Override
    public void blendShake() {
        System.out.println("BritishChocoShake.blendShake()");
    }

    @Override
    public void presentShake() {
        System.out.println("BritishChocoShake.presentShake()");
    }
    
}
