def main():
    x = int(input("Enter no of lines: "))
    staeric(x)

def staeric(n, j=1):
    if j == n:
        print("*"*n)
        return
    print("*"*j)
    return staeric(n, j+1)

if __name__ == "__main__":
    main()
