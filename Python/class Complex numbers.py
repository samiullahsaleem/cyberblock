import math
class Complex_Number:
    
    def __init__(self, a, b):
        self.set(a, b)
    def set(self, a, b):
        self.__a = a
        self.__b = b
    def __str__(self):
        s=''
        if self.__a != 0:     
            s=f'{self.__a}'
        if self.__b == 0:     
            return s
        if self.__b<0:
            return s+f'- i{-self.__b}'
        return s+f' + i{self.__b}'


    def __mul__(self, obj):
        a_mul = self.__a * obj.__a - self.__b * obj.__b
        b_mul = self.__a * obj.__b + self.__b * obj.__a
        new_obj = Complex_Number(a_mul, b_mul)
        return new_obj


    def magnitude(self):
        return math.sqrt((self.__a)**2 +(self.__b)**2)


    def __lt__(self, other):
        return Complex_Number.magnitude(self) < Complex_Number.magnitude(other)

    
    def __le__(self, other):
        return Complex_Number.magnitude(self) <= Complex_Number.magnitude(other)

    
    def __eq__(self, other):
        return Complex_Number.magnitude(self) == Complex_Number.magnitude(other)

    
    def __ne__(self, other):
        return Complex_Number.magnitude(self) != Complex_Number.magnitude(other)

    
    def __gt__(self, other):
        return Complex_Number.magnitude(self) > Complex_Number.magnitude(other)

    
    def __ge__(self, other):
        return Complex_Number.magnitude(self) >= Complex_Number.magnitude(other)

    


def main():
    a = Complex_Number(3,4)
    b = Complex_Number(4,4)
    print(a)
    print(b)
    print(a*b)
    print(a<b)
    print(b<a)
    print(a<=b)
    print(a>=b)
    print(a!=b)
    print(a==b)
main()