/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author MAHREEN ASAMA
 */
public class BritishStyleMilkShake implements MilkShakeShop{

    @Override
    public ChocolateShake createChocolateShake() {
        return new BritishChocoShake();
    }
    
}
