# Find HCF or GCD

def HCF(n1,n2):
    """Returns HCF of two numbers."""
    i = 1
    c = 2
    greater = n1
    if n2 > n1:
        greater = n2
    while i < greater:
        if n1%i == 0 and n2%i == 0:
            c = i
        i += 1
    return c

def main():
    # a = int(input('1st Number: '))
    # b = int(input('2nd Number: '))
    a,b = 16, 24
    print('HCF =',HCF(a,b))
    print(HCF.__doc__)
main()
