#Stadium Profit
def SeatCost(x, y, z):
    a = x * 15
    b = y * 12
    c = z * 9
    sum = a + b + c 
    return sum



def main():
    A = int(input("Enter the number of seats sold of class A: "))
    B = int(input("Enter the number of seats sold of class B: "))
    C = int(input("Enter the number of seats sold of class C: "))
    
    print("Total income =", SeatCost(A,B,C))



main()