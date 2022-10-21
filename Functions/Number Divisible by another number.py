# Find the numbers divisible by another number and display it.
import random
def CheckDiv(a,n):
    """Check number a is divisible by 2nd no."""
    i = 0
    c = 0
    l = len(a)
    s = [0] * l
    while i < l:
        if a[i] % n == 0:
            s[c] = a[i]
            c += 1
        i += 1

    # Making another array to remove extra zeros in 's'.
    i = 0
    x = [0] * c
    while i < c:
        x[i] = s[i]
        i += 1
    return x,s

def main():
    r1, r2, r3, r4, r5, r6 = random.randint(1,1000), random.randint(1,1000), random.randint(1,1000), random.randint(1,1000), random.randint(1,1000), random.randint(1,1000)
    a =[r1, r2, r3, r4, r5, r6]
    print(a)
    n = int(input('Enter '))
    print(CheckDiv(a, n))

main()
