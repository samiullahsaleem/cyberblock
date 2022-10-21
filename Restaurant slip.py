#Restaurant slip
def Restaurant(charge):
    tip = charge * (0.15)
    sales_tax = charge * (0.07)
    return tip, sales_tax


def main():
    charge = int(input("Enter the charge for food: "))
    x1 , x2 = Restaurant(charge)
    print("Charge of food =",charge)
    print("Tip =",x1)
    print("Sales Tax =",x2)
    total = charge + x1 + x2
    print("Total =",total)
    print("Thanks for your visit!")

    
main()

