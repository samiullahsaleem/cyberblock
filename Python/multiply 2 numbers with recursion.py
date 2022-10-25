def main():
    x = int(input("Enter 1st number: "))
    y = int(input("Enter 2nd number: "))
    print(multiply(x, y))

def multiply(x, n):
    if n == 0:
        return 0
    return x + multiply(x, n-1)

if __name__ == "__main__":
    main()
