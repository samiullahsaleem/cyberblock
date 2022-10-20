import random as r
import Functions

def main():
    num1 = r.randint(1,13)
    type = r.randint(0,3)
    print(Functions.numtoeng(num1), "of", Functions.typeconversion(type))
main()
