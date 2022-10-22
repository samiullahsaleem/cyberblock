/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author MAHREEN ASAMA
 */
public class AmericanChocoShake implements ChocolateShake{

    @Override
    public void addMilk() {
        System.out.println("AmericanChocoShake.addMilk()");
    }

    @Override
    public void addIngredients() {
        System.out.println("AmericanChocoShake.addIngredients()");
    }

    @Override
    public void blendShake() {
        System.out.println("AmericanChocoShake.blendShake()");
    }

    @Override
    public void presentShake() {
        System.out.println("AmericanChocoShake.presentShake()");
    }
    
}
