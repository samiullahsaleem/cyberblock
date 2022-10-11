print("\n   WELCOME TO MACHINE!")
money = int(input("\nEnter  Money  In The Form Of RS 10,20,50,100:  "))
print("\n")
if money == 10 or money == 20 or money == 50 or money == 100:
    while True:
        # MENU
        print("Press 1 For Lays : Rs20")
        print("Press 2 For Patato Stick : Rs10")
        print("Press 3 For Wavy : Rs25")
        print("Press 4 For Pringels : Rs80")
        print("Press 5 For 500ml Coka Cola : Rs40")
        print("press 6 for 500ml Pepsi : Rs40")
        print("press 7 for Kitkat : Rs45")
        print("press 8 for Nimko : Rs35")
        print("press 9 for Milo : Rs60")
        print("press 10 for Marshmello : Rs100")
        # CHOSE THE ITEMS NUMBER
        choice = int(input("\nENTER PRODUCT NUMBER TO PURCHASE: "))
        if choice == 1:
            if money > 20 or money == 20:
                choice_2 = int(input("Enter 1 to Continue and 0 to Terminate   "))
                if choice_2 == 1:
                    money = money - 20
                    print("\n YOUR CHOICE IS Lays  and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        elif choice == 2:
            if money > 10 or money == 10:
                choice_2 = int(input("enter 1 to continue and 0 to terminate   "))
                if choice_2 == 1:
                    money = money - 10
                    print("your choice is potato sticks  and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        elif choice == 3:
            if money > 25 or money == 25:
                choice_2 = int(input("enter 1 to continue and 0 to terminate   "))
                if choice_2 == 1:
                    money = money - 25
                    print("your choice is wavy  and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        elif choice == 4:
            if money > 80 or money == 80:
                choice_2 = int(input("enter 1 to continue and 0 to terminate   "))
                if choice_2 == 1:
                    money = money - 80
                    print("your choice is Pringels  and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        elif choice == 6:
            if money > 40 or money == 40:
                choice_2 = int(input("enter 1 to continue and 0 to terminate   "))
                if choice_2 == 1:
                    money = money - 40
                    print("your choice is 500ml Pepsi  and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        elif choice == 7:
            if money > 45 or money == 45:
                choice_2 = int(input("enter 1 to continue and 0 to terminate   "))
                if choice_2 == 1:
                    money = money - 45
                    print("your choice is Kitkat  and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        elif choice == 8:
            if money > 35 or money == 35:
                choice_2 = int(input("enter 1 to continue and 0 to terminate   "))
                if choice_2 == 1:
                    money = money - 35
                    print("your choice is Nimko and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        elif choice == 9:
            if money > 60 or money == 60:
                choice_2 = int(input("enter 1 to continue and 0 to terminate   "))
                if choice_2 == 1:
                    money = money - 60
                    print("your choice is Milo  and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        elif choice == 10:
            if money > 100 or money == 100:
                choice_2 = int(input("enter 1 to continue and 0 to terminate   "))
                if choice_2 == 1:
                    money = money - 100
                    print("your choice is Marshmello and your left money is ", money)
                elif choice_2 == 0:
                    print("exiting...")
                else:
                    print("invalid choice, please try again!")
            else:
                print("you don't have enough money to buy that!")
        choice_3 = str(input("Do you want to buy something else? yes or no:  "))
        if choice_3 == "yes":
            continue
        else:
            break
    print("\n    Goodbye")
else:
    print("\n enter valid money enter money only in the form of 10 20 50 100")

