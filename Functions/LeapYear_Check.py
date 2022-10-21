# If a year is divisble by 100 and not by 400 then it is not a leap year. E.g 1800 is not a leap year nor 1900 but 2000 is a leap year.

def is_leap(year):
    """Check whether the year entered is leap or not"""
    leap = False
    if year % 100 == 0:
        leap = False
        if year % 400 == 0:
            leap = True
    elif year % 4 == 0:
        leap = True
        return leap
    return leap


year = int(input('Enter:    '))
a = is_leap(year)
print(a)

