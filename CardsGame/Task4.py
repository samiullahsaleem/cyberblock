from tempfile import tempdir
import Functions
import random as r

def main():
    isTrue = True
    twotype = True
    twoseq = True
    num1 = r.randint(1,13)
    type1 = r.randint(0,3)
    num2 = r.randint(1,13)
    type2 = r.randint(0,3)
    num3 = r.randint(1,13)
    type3 = r.randint(0,3)
    print("Card 1 is ", Functions.numtoeng(num1), "of", Functions.typeconversion(type1))
    print("Card 2 is ", Functions.numtoeng(num2), "of", Functions.typeconversion(type2))
    print("Card 3 is ", Functions.numtoeng(num3), "of", Functions.typeconversion(type3))
    
    if num1 == num2 == num3:
        print("All cards are  ", Functions.numtoeng(num1))
        isTrue = False
    if type1 == type2 == type3:
        print("All cards are same type", Functions.typeconversion(type1) )
        isTrue = False
        twotype = False
    if (type1 == 0 or type1 == 1) and (type2 == 0 or type2 == 1) and (type3 == 0 or type3 == 1):
        print("All cards are Red")
        isTrue = False
    elif (type1 == 2 or type1 == 3) and (type2 == 2 or type2 == 3) and (type3 == 2 or type3 == 3):
        print("All cards are black")
        isTrue = False
    if abs(num1-num2)==1 and abs(num2-num3)==1 or abs(num1-num3)==1 and abs(num2-num3)==1 or abs(num1-num3)==1 and abs(num2-num1)==1:
        print("All cards are in sequence",end=" ")
        twoseq = False
        if type1 == type2 == type3:
            print("and of same type", Functions.typeconversion(type1))
    if twotype:
        if type1 == type2:
            print("Card 1 and Card 2 have same type", Functions.typeconversion(type1))
            isTrue = False
        elif type2 == type3:
            print("Card 2 and Card 3 have same type", Functions.typeconversion(type2))
            isTrue = False
        elif type1 == type3:
            print("Card 1 and Card 3 have same type", Functions.typeconversion(type3))
            isTrue = False
    if twoseq:
        if abs(num1-num2)==1:
            print("Card 1 and Card 2 are in sequence")
        elif abs(num2-num3)==1:
            print("Card 2 and Card 3 are in sequence")
        elif abs(num1-num3)==1:
            print("Card 1 and Card 3 are in sequence")
    if isTrue:
        print("Highest card is", Functions.highestcard(num1,num2,num3))    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
main()