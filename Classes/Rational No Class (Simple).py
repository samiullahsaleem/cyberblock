'''Rational numbers are pair of integers p and q to represent a ratio as p/q. The q should not be 0
is the condition. You have to provide the self explanatory python example code as answer that
how can we use the rational number'''

class rational:
    p = 0
    q = 0

def main():
    r1 = rational()
    r2 = rational()
    print("Write the p/q forms of two rational numbers for their product")
    print("1st rational number")
    r1.p = int(input("p = "))
    r1.q = int(input("q = "))
    print("2nd rational number")
    r2.p = int(input("p = "))
    r2.q = int(input("q = "))
    n = r1.p * r2.p
    d = r1.q * r2.q
    num = n/d
    print("Product =",num)


main()
