#Magic Date
def MagicDate(x,y,z):
    mag = x * y
    if mag == z:
        print("The date is magic")
    else:
        print("The date is not magic")
    return 0

def main():
    month =int(input("Enter a month in numeric form: "))
    date =int(input("Enter date: "))
    year =int(input("Enter the last two digits of a year: "))
    MagicDate(month,date,year)


main()