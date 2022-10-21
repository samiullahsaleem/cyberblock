from enum import Enum
class CarType(Enum):
    SEDAN = 1
    SUV = 2
    BAKKIE = 3
    

class Fuel(Enum):
    DIESEL = 1
    PETROL = 2

class Car:
    def __init__(self, model_year, type, price_per_day, fuel):
        self.__model_year = model_year
        self.__type = type
        self.__price_per_day = price_per_day
        self.__fuel = fuel
    
    def get_type(self):
        return self.__type

    def get_price_per_day(self):
        return self.__price_per_day

    def get_model_year(self):
        return self.__model_year
    
    def __str__(self):
        return '['+self.__model_year + ', ' + str(self.__type)+']'
class CompanyX:
    def __init__(self):
        self.cars = []
    
    def add_car(self, car):
        self.cars.append(car)

    def is_there_a_specific_type_of_car(self, type):
        for car in self.cars:
            if car.get_type() == type:
                return True
        return False

    def cheapest_car(self) -> Car:
        cheapest = self.cars[0]
        for i in range(1,len(self.cars)):
            if self.cars[i].get_price_per_day()<cheapest.get_price_per_day():
                cheapest = self.cars[i]
        return cheapest

    def how_many_car_from_specific_year_are_available(self, year):
        counter = 0
        for car in self.cars:
            if car.get_model_year()==year:
                counter += 1
        return counter
if __name__ == '__main__':
    company = CompanyX()
   
    car1 = Car('2010', CarType.SEDAN, 25.0, Fuel.DIESEL)
    car2 = Car('2011', CarType.SEDAN, 22.0, Fuel.PETROL)
    car3 = Car('2010', CarType.BAKKIE, 35.0, Fuel.DIESEL)

    company.add_car(car1)
    company.add_car(car2)
    company.add_car(car3)

    print ('Is there a bakkie: ', company.is_there_a_specific_type_of_car(CarType.BAKKIE))
    print ('Is there a SUV: ', company.is_there_a_specific_type_of_car(CarType.SUV))
    print ('Is there a sedan: ', company.is_there_a_specific_type_of_car(CarType.SEDAN))


    print ('The cheapest car is ', company.cheapest_car())

    print ('Total of cars from 2010: ', company.how_many_car_from_specific_year_are_available('2010'))
    print ('Total of cars from 2011: ', company.how_many_car_from_specific_year_are_available('2011'))
    print ('Total of cars from 2012: ', company.how_many_car_from_specific_year_are_available('2012'))
