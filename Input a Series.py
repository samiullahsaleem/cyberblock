# Input a Series
def InpSeries():
    print("Enter a series of positive numbers.",end = " ")
    print("(To finish the series, enter a negative number)")
    n = int(input())
    while n>=0:
        # print(n)
        n = int(input())
        if n<0:
            print("Your series is completed.")
    

def main():
    InpSeries()


main()