# Code
def Factors(n):
    i = 1
    c = 0
    a = [0] * n
    while i <= n:
        if n % i == 0:
            a[c] = i
            c += 1
        i += 1
    return a, c

# Removing garbage data,
# 'a' is the array that contains required data as well as garbage. Data is unto index c.
def removeExtra(a, c):
    i = 0
    x = [0] * c
    while i < c:
        x[i] = a[i]
        i += 1
    return x


def main():
    n = int(input('Enter number: '))
    a, c = Factors(n)
    a = removeExtra(a, c)
    print(a)


main()
