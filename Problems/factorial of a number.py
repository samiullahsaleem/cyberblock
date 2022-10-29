def fac(num):
    if num == 1:
        return 1
    return num * fac(num-1)
    
def main():
    num = int(input("Enter any number: "))
    number = fac(num)
    print(number)
    
main()