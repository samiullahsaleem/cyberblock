import mysqlconnect
import insert
from currency import Currency
import admin
from admin import Admin

flag = True
while flag:
    print("1: To Print All currencies along with values in $USD")
    print("2: To get Value of currency by name")
    print("3: To convert your currency")
    print("4: To add currency data to database")
    print("5: To Update currency value in database")
    print("6: To add new user")
    print("7: To exit")
    choice = input("Enter your choice: ")
    if choice == '1':
        try:
            curen = Currency()
            curen.printAllcurrencies()
        except:
            print("Sorry! We have no currency to print")
    elif choice == '2':
        try:
            curen = Currency()
            name = input("Enter name of currency: ")
            value = curen.getCurrencyValue(name)
            print("Currency value of " + str(name) + " is " + str(value))
        except:
            print("Sorry! We have no cuurency with this name!")
    elif choice == '3':
        try:
            curen = Currency()
            curen.printAllcurrencies()
            amount = int(input("Enter your amount to convert: "))
            fromcurrency = input("Enter currency name you want to convert: ")
            tocurrency = input("Enter currency name to which to convert: ")
            converted = curen.getconvertedCurrency(amount, fromcurrency, tocurrency)
            print("After conversion value is : " + str(converted))
        except:
            print("Sorry! you can't convert this currency: ")
    elif choice == '4':
        try:
            curen = Currency()
            name = input("Enter name of currency : ")
            value = int(input("Enter value of currency in $USD: "))
            curen.AddNewCurrency(name, value)
        except:
            print("Sorry! you can't add currency data")
    elif choice == '5':
        try:
            curen = Currency()
            name = input("Enter name of currency you want to update: ")
            value = int(input("Enter new value of currency in $USD: "))
            curen.updatecurrency(name, value)
        except:
            print("Sorry! you can't update currency data")
    elif choice == '6':
        try:
            admin = Admin()
            name = input("Enter your name to add : ")
            id = int(input("Enter your id to add: "))
            admin.adduser(name, id)
        except:
            print("You can't Add user to Application")
    elif choice == '7':
        flag = False
    




