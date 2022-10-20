import Functions
import random as r
def main():
    isTrue1 = True   
    isTrue2 = True
    num1 = r.randint(1,13)
    type1 = r.randint(0,3)
    print("Card 1 is ", Functions.numtoeng(num1), "of", Functions.typeconversion(type1))    
    num2 = r.randint(1,13)
    type2 = r.randint(0,3)
    while isTrue1:
        if num2 != num1 or type1 != type2:
            print("Card 2 is ", Functions.numtoeng(num2), "of", Functions.typeconversion(type2))
            isTrue1 = False
        else:
            num2 = r.randint(1,13)
            type2 = r.randint(0,3)
    num3 = r.randint(1,13)
    type3 = r.randint(0,3)
    while isTrue2:
        if num3 != num1 and num3 !=num2 or type3 !=type2 and type3 !=type1:
            print("Card 3 is ", Functions.numtoeng(num3), "of", Functions.typeconversion(type3)) 
            isTrue2 = False
        else:
            num3 = r.randint(1,13)
            type3 = r.randint(0,3)
    
    
   
main()