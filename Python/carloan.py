class INVENTORY(ABC):
    def __init__(self,cust_name,cust_phno,cust_email,cust_sal,cust_comp,cust_car):
        self.cust_name = cust_name
        self.cust_phno = cust_phno
        self.cust_email = cust_email
        self.cust_sal = cust_sal
        self.cust_comp = cust_comp
        self.cust_car = cust_car
       
    @abstractmethod
    def customer_details(self):
        print('-------------- SAAD AUTOS --------------')
        print('-------------- CUSTOMER DETAIlS --------------')
        print('CUSTOMER NAME: ',self.cust_name)
        print('CUSTOMER PHONE NUMBER: ',self.cust_phno)
        print('CUSTOMER E-MAIL ADDRESS: ',self.cust_email)
        print('CUSTOMER SALARY: ',self.cust_sal)
        print('-------------- AUTOS/VEHICLE DETAILS --------------')
        print('BRAND SELECTED BY CUSTOMER: ',self.cust_comp)
        print('CAR SELECTED BY CUSTOMER: ',self.cust_car)

class inventory(INVENTORY):
    def __init__(self,cust_name,cust_phno,cust_email,cust_sal,cust_comp,cust_car,cust_quant,loan_cash):
        super().__init__(cust_name,cust_phno,cust_email,cust_sal,cust_comp,cust_car)
        self.loan_cash = loan_cash
        self.cust_quant = cust_quant
       
    def customer_details(self):
        print('CUSTOMER NAME: ',self.cust_name)
        print('CUSTOMER PHONE NUMBER: ',self.cust_phno)
        print('CUSTOMER E-MAIL ADDRESS: ',self.cust_email)
        print('CUSTOMER SALARY: ',self.cust_sal)
        print('BRAND SELECTED BY CUSTOMER: ',self.cust_comp)
        print('CAR SELECTED BY CUSTOMER: ',self.cust_car)
       
    def Car(self):
        if self.cust_comp == 'HONDA' or self.cust_comp == 'honda' or self.cust_comp == 'Honda':
            hondacar2 = {'CITY':[50,3205000],'CIVIC':[45,4500000],'VISEL':[15,3500400],'ACCORD':[30,6501500]}
            for a,b in hondacar2.items():
                hondacar1 = {
                    'NAME':['CITY','CIVIC','VISEL','ACCORD'],
                    'QUANTITY':[50,45,15,30]
                }
                df = pd.DataFrame(hondacar1)
                df
                car_quantity = 0
                car_price = 0
                if self.cust_car == a:
                    for i in b:
                        if i < 100:
                            car_quantity = i
                        elif i > 100:
                            car_price = i
                        if self.loan_cash == 'CASH' or self.loan_cash == 'Cash' or self.loan_cash == 'cash':
                            print('YOU SELECTED: ',self.loan_cash)
                            car_quantity = car_quantity - self.cust_quant
                            b[0] = car_quantity
                            sale_tax = car_price/100
                            total = sale_tax + car_price
                            total2 = total*self.cust_quant
                            print('YOU HAVE TO PAY: ',total,'/-RS')
                            print(hondacar2)
                       
                        elif self.loan_cash == 'LOAN' or self.loan_cash == 'Loan' or self.loan_cash == 'loan':
                            loan_month = eval(input("ENTER LOAN DURATION IN MONTHS: "))
                            print('YOU SELECTED: ',self.loan_cash)
                            car_quantity = car_quantity - self.cust_quant
                            b[0] = car_quantity
                            total = (car_price*0.15)*(1+0.15)**loan_month/(1+0.15)**loan_month-1
                            total2 = total*self.cust_quant
                            print('YOUR TOTAL AMOUNT YOU HAVE TO PAY PER MONTH IS: ',total2)
                            print(hondacar2)
                       
                       
        elif self.cust_comp == 'TOYOTA' or self.cust_comp == 'Toyota' or self.cust_comp == 'toyota':
            toyotacar2 = {'COROLLA':[40,3250000],'PRIUS':[35,4750000],'FORTUNER':[10,10500000],'PRADO':[20,6501500]}
            for a,b in toyotacar2.items():
                toyotacar1 = {
                    'NAME':['COROLLA','PRIUS','FORTUNER','PRADO'],
                    'QUANTITY':[40,35,10,20]
                }
                df = pd.DataFrame(toyotacar1)
                df
                if self.cust_car == a:
                    for i in b:
                        if i < 100:
                            car_quantity = i
                        elif i > 100:
                            car_price = i
                    if car_quantity < 5:
                        if self.loan_cash == 'CASH' or self.loan_cash == 'Cash' or self.loan_cash == 'cash':
                            print('YOU SELECTED: ',self.loan_cash)
                            car_quantity = car_quantity - self.cust_quant
                            b[0] = car_quantity
                            sale_tax = car_price/100
                            total = sale_tax + car_price
                            total2 = total*self.cust_quant
                            print('YOU HAVE TO PAY: ',total,'/-RS')
                            print(toyotacar2)
                       
                        elif self.loan_cash == 'LOAN' or self.loan_cash == 'Loan' or self.loan_cash == 'loan':
                            loan_month = eval(input("ENTER LOAN DURATION IN MONTHS: "))
                            print('YOU SELECTED: ',self.loan_cash)
                            car_quantity = car_quantity - self.cust_quant
                            b[0] = car_quantity
                            total = (car_price*0.15)*(1+0.15)**loan_month/(1+0.15)**loan_month-1
                            total2 = total*self.cust_quant
                            print('YOUR TOTAL AMOUNT YOU HAVE TO PAY PER MONTH IS: ',total)
                            print(toyotacar2)
                       
        elif self.cust_comp == 'SUZUKI' or self.cust_comp == 'Suzuki' or self.cust_comp == 'suzuki':
            suzukicar2 = {'ALTO':[40,1200000],'CULTUS':[35,1850000],'BALENO':[15,3200500],'SWIFT':[20,3506000]}
            for a,b in suzukicar2.items():
                suzukicar1 = {
                    'NAME':['ALTO','CULTUS','BALENO','SWIFT',],
                    'QUANTITY':[40,35,15,20,]
                }
                df = pd.DataFrame(suzukicar1)
                df
                if self.cust_car == a:
                    for i in b:
                        if i < 100:
                            car_quantity = i
                        elif i > 100:
                            car_price = i
                    #if car_quantity < 5:
                        if self.loan_cash == 'CASH' or self.loan_cash == 'Cash' or self.loan_cash == 'cash':
                            print('YOU SELECTED: ',self.loan_cash)
                            car_quantity = car_quantity - self.cust_quant
                            b[0] = car_quantity
                            sale_tax = car_price/100
                            total = sale_tax + car_price
                            total2 = total*self.cust_quant
                            print('YOU HAVE TO PAY: ',total,'/-RS')
                            print(suzukicar2)
                       
                        elif self.loan_cash == 'LOAN' or self.loan_cash == 'Loan' or self.loan_cash == 'loan':
                            loan_month = eval(input("ENTER LOAN DURATION IN MONTHS: "))
                            print('YOU SELECTED: ',self.loan_cash)
                            car_quantity = car_quantity - self.cust_quant
                            b[0] = car_quantity
                            total = (car_price*0.15)*(1+0.15)**loan_month/(1+0.15)**loan_month-1
                            total2 = total*self.cust_quant
                            print('YOUR TOTAL AMOUNT YOU HAVE TO PAY PER MONTH IS: ',total)
                            print(suzukicar2)  
                       

           
#DCs
print('-------------- SAAD AUTOS --------------')
cust_name = input('ENTER YOUR FULL NAME(IN UPPER CASE LETTERS): ')
cust_phno = eval(input('ENTER YOUR PHONE NO: '))
cust_email = input('ENTER YOUR EMAIL ADDRESS: ')
cust_sal = eval(input('ENTER YOUR MONTHLY SALARY: '))
print('-------------- CARS BRANDS WE DEALS WITH --------------')
print('--------------(HONDA, TOYOTA, SUZUKI)--------------')
cust_comp = input('ENTER CAR BRAND NAME(IN UPPER CASE LETTERS): ')
if cust_comp == 'HONDA':
  print('-------------- HONDA --------------')
  print('--------- CARS --- PRICE ----------')
  print('--------- CITY --- PRICE ----------')
  print('--------- BR-V --- PRICE ----------')
  print('-------- CIVIC --- PRICE ----------')
  print('--------- CR-V --- PRICE ----------')
  print('-------- ACCORD --- PRICE ---------')





cust_car = input('ENTER CAR NAME(IN UPPER CASE LETTERS): ')
cust_quant = eval(input('ENTER NO OF CARS YOU WANT(IN NUMBERS): '))
loan_cash = input('DO YOU WANT VEHICLE ON CASH OR LOAN(IN UPPER CASE LETTERS): ')
details = inventory(cust_name,cust_phno,cust_email,cust_sal,cust_comp,cust_car,cust_quant,loan_cash)
print('')
print('')
details.customer_details()
details.Car()
