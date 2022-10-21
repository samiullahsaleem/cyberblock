'''In a company, one of these values have to be associated with the employee of the company as
their designation. You have to provide the self explanatory python example code as answer that
how can we use them.
    CEO, Director, Manager, Clerk, Salesman, Receptionist, Driver, Peon'''

class designation:
    CEO             = 1
    Director        = 2
    Manager         = 3
    Clerk           = 4
    Salesman        = 5
    Receptionist    = 6
    Driver          = 7
    Peon            = 8

def main():
    Asad = designation.Peon
    Ahmad = designation.CEO
    Ali = designation.Director
    Waqas = designation.Salesman
    Asad = designation.Manager
    print(Ahmad)
    print(Waqas)

main()
