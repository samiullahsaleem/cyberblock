# Find the LCM of two numbers

def LCM(a, b):
    """Returns LCM of two numbers"""
    i = 2
    while i <= a*b:
        ai = i % a
        bi = i % b
        if ai == 0 and bi == 0:
            return i
        i += 1


def main():
    a, b = 6, 15
    print(LCM(a, b))


main()
