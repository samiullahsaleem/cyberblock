import Functions
import random as r
def main():
    num1 = r.randint(1,13)
    type1 = r.randint(0,3)
    num2 = r.randint(1,13)
    type2 = r.randint(0,3)
    print(Functions.numtoeng(num1), "of", Functions.typeconversion(type1))
    print(Functions.numtoeng(num2), "of", Functions.typeconversion(type2))
    if num1 == num2:
        print("Both cards are number ", Functions.numtoeng(num1))
    if type1 == type2:
        print("Both cards are ", Functions.typeconversion(type1))
    if (type1 == 0 or type1 == 1) and (type2 == 0 or type2 == 1):
        print("Both cards are Red")
    elif (type1 == 2 or type1 == 3) and (type2 == 2 or type2 == 3):
        print("Both cards are Black")
    if num1 + 1 == num2 or num1-1 == num2:
        print("Both cards are in sequence")
    
            
main()