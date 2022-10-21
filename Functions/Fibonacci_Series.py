'''Write a program to store 1st 25 Fibonacci numbers in an array, and later compute and print sum
of them.
'''

def Fibonacci(n):
    """Takes the number of terms and return series in an Array"""
    a = [0] * n
    f1 = 1
    f2 = 1
    f = f1 + f2
    a[0] = 1
    a[1] = 1
    c = 2
    i = 2
    while i < n:
        f1 = f2
        f2 = f
        f = f1 + f2
        a[c] = f
        c += 1
        i += 1

    # Finding sum of numbers
    # c = 0
    # s = 0
    # while c < 25:
    #     s = s + a[c]
    #     c += 1
    return a

def main():
    print(Fibonacci.__doc__)
    a = Fibonacci(2)
    print(a)


main()
