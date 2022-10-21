def max_num(a, b, c):
    """It takes three numbers as arguments and finds the greatest number"""

    max = a
    if b>a and b>c:
        max = b
    elif c>a and c>b:
        max = c
    return max

print("Enter")
a = int(input("Enter the 1st number:    "))
b = int(input("Enter the 2nd number:    "))
c = int(input("Enter the 3rd number:    "))
x = max_num(a,b,c)
print(x)
