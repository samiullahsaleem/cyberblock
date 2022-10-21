class Complex:
    a = 0
    b = 0


def createComplex(a, b):
    """Creates a complex number having c.a as real part and c.b as complex part"""
    c = Complex
    c.a = a
    c.b = b
    return c


def str_ofComplex(c):
    """Converting complex number to a string"""
    s = str(c.a)+ '+' + str(c.b) + 'j'
    return s


def conjugate(c):
    """Change the sign of imaginary part"""
    cn = Complex()
    cn.a = c.a
    cn.b = -c.b
    return cn


def addition(c1, c2):
    """Add two complex numbers"""
    c = Complex()
    c.a = c1.a + c2.a
    c.b = c1.b + c2.b
    return c


def subtraction(c1, c2):
    """Subtract two complex numbers"""
    c = Complex()
    c.a = c1.a - c2.a
    c.b = c1.b - c2.b
    return c


def scalarMultiplication(c, k):
    """Multiply a number with complex number"""
    c.a = k * c.a
    c.b = k * c.b
    return c


def multiplication(c1, c2):
    """Multiplication of two complex numbers.
    formula:    (a,b)*(c,d) = (ac - bd, ad + bc)"""
    c = Complex()
    c.a = (c1.a * c2.a) - (c1.b * c2.b)
    c.b = (c1.a * c2.b) + (c1.b * c2.a)
    return c


def division(c1, c2):
    """Division of two complex numbers. Formula:    (a,b)/(c,d) = [(ac + bd)/(c²+d²), (bc -ad)/(c²+d²)"""  # Alt+0178 = ²
    c = Complex()
    c.a = ((c1.a * c2.a) + (c1.b * c2.b)) / ((c2.a ** 2) + (c2.b ** 2))
    c.b = ((c1.b * c2.a) - (c1.a * c2.b)) / ((c2.a ** 2) + (c2.b ** 2))
    return c


def inverseMultiplicative(c):
    """Formula: (a/(a²+b²),-b/(a²+b²))"""
    mi = Complex()
    mi.a = (c.a) / ((c.a ** 2) + (c.b ** 2))
    mi.b = (-c.b) / ((c.a ** 2) + (c.b ** 2))
    return mi


def modulus(c):
    """Formula for Modulus: |z| = √x²+y² """  # Alt + 251 = √
    z = ((c.a ** 2) + (c.b ** 2)) ** 0.5
    return z


def complexPower(p):
    """Only takes power of iota(i) which is represented as 'j' in python and returns the answer as a string."""
    #   i = i ; i2 = -1 ; i3 = -i ; i4 = 1          i2  = i²
    #   i-1 = -i ; i-2 = -1 ; i-3 = i ; i-4 = 1     i-2 = i-²
    j = ''
    if p == 0:
        j = '1'
    elif p > 0:
        p = p % 4
        if p == 1:
            j = 'j'
        elif p == 2:
            j = '-1'
        elif p == 3:
            j = '-j'
        elif p == 4 or p == 0:
            j = '1'
    else:
        p = abs(p)
        p = p % 4
        if p == 1:
            j = '-j'
        elif p == 2:
            j = '-1'
        elif p == 3:
            j = 'j'
        elif p == 4 or p == 0:
            j = '1'
    return j


def main():
    print(complexPower.__doc__)
    c1 = createComplex(2,3)
    c2 = createComplex(4,5)

    c_string = str_ofComplex(c1)
    c_conjugate = conjugate(c1)
    conj_string = str_ofComplex(c_conjugate)
    c_add = addition(c1,c2)
    c_add_string = str_ofComplex(c_add)
    c_mult = multiplication(c1, c2)
    c_mult_string = str_ofComplex(c_mult)
    c_div = division(c1, c2)
    c_div_string = str_ofComplex(c_div)
    print(complexPower(11))
    print(c_string)
    print(conj_string)
    print(c_add_string)
    print(c_mult_string)
    print(c_div_string)



main()
