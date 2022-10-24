def main():
    base = int(input("Enter base number: "))
    exponent = int(input("Enter exponent: "))
    print(power(base, exponent))

def power(x, y, i=1):
    if i > y:
        return 1
    return x * power(x, y, i+1)

if __name__ == "__main__":
    main()
