'''Write a function to verify a string passed as its only parameter is composed of digits only. The
function named isNumber(s) return a Boolean value according
'''

def isNumber(s):
    """Is string consists of only numbers"""
    i = 0
    x = True
    while i < len(s):
        if ord('0') <= ord(s[i]) <= ord('9'):
            x = True
        else:
            x = False
            return x
        i = i + 1
    return x


def main():
    a = str(input("Enter string: "))
    b = isNumber(a)
    print(b)
    print(isNumber.__doc__)

main()

