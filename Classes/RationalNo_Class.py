'''You are provided vector3 UDT, understand it create a comprehensive UDT for rational
numbers. Rational number are pair of integers p, q where q ≠ 0. to search knowledge / formulae
required to solve the following questions. The comprehensive UDT for rational numbers must
include the following functionalities, along with class definition:
1. Create rational number from one and two integers
2. Simplification of rational number
3. Conversion to the string form => (p, q)
4. Unary minus operation and reciprocal of rational number
5. Binary addition and subtraction operations
6. Binary multiplication and division operations
7. Binary conditional operations
8. Conversions to other appropriate data type
9. Conversions from other appropriate data type
10. Conversion from an appropriate string
Note: The function must the Exception whenever required
'''

class rational:
    pass

# 1.
def creatRational(p, q):
    r = rational()
    r.p = p
    r.q = q
    return r

# 2
def simplification(r):
    n = 2
    while n < 100:
        if r.p % n == 0 and r.q % n == 0:
            r.p = r.p / n
            r.q = r.q / n
        n = n + 1
    return r

# 3
def stringRational(r):
    s = '(' + str(r.p) + '/' + str(r.q) + ')'
    return s

# 4
def reciprocal(r):
    a = r.p
    r.p = -r.q
    r.q = a
    return r

# 5.1
def addition(r1,r2):
    r = rational()
    r.p = (r1.p * r2.q) + (r1.q * r2.p)
    r.q = r1.q * r2.q
    r = simplification(r)
    return r

# 5.2
def subtraction(r1, r2):
    r = rational()
    r.p = (r1.p * r2.q) - (r1.q * r2.p)
    r.q = r1.q * r2.q
    r = simplification(r)
    return r

# 6.1
def multip(r1,r2):
    r = rational()
    r.p = r1.p * r2.p
    r.q = r1.q * r2.q
    r = simplification(r)
    return r

# 6.2
def divide(r1, r2):
    r = rational()
    r.p = r1.p * r2.q
    r.q = r1.q * r2.p
    r = simplification(r)
    return r

# 7
def cond(r1,r2):
    r1_1 = float(r1.p/r1.q)
    r2_1 = float(r2.p/r2.q)
    if r1_1 == r2_1:
        print('Equal')
    elif r1_1 < r2_1:
        print(stringRational(r2), 'is greater.')
    else:
        print(stringRational(r1), 'is greater.')

# 8
def conversion(r):
    s = str(r)
    i = int(r.p / r.q)
    f = float(r.p / r.q)
    return s, i, f

# 9
def revconv(st, fl, ig):
    st = rational()
    fl = rational()
    ig = rational()
    return st, fl, ig

# 10
def fromstring(s):
    r = rational()
    rp = ''
    rq = ''
    i = 0
    while i < len(s):
        if ord(s[i]) >= ord('0') and ord(s[i]) <= ord('9'):
            rp = rp + s[i]
            i = i + 1
            if ord(s[i]) == ord('/'):
                i = i + 1
                while i < len(s):
                    rq = rq + s[i]
                    i = i + 1
                break

    r.p = rp
    r.q = rq
    return r


def main():
    r1 = creatRational(10, 16)      # Creating Rational instance
    r2 = creatRational(10, 6)

    simple = simplification(r1)     # Simplification of rational numbers

    ar = addition(r1, r2)           # Adding two rational no.s
    sr = subtraction(r1, r2)        # Subtracting two rational no.s

    sim = stringRational(simple)
    add = stringRational(ar)        # Converting addition rational to string
    sub = stringRational(sr)

    print(sim)                      # Printing simmplified string rational numbers
    print(add)
    print(sub)

    check = cond(r1, r2)            # Comparing r1 and r2

    s, i, f = conversion(r1)        # Converting rational to string, float, and int
    print(type(s))                  # Verifiying Conversions by printing their types
    print(type(i))
    print(type(f))

    st, fl, ig = revconv(s,i,f)     # Reconverting str, int, float to rational
    print(type(st))                 # Verifiying Reconversions by printing their types
    print(type(fl))
    print(type(ig))

    s = '100/30'
    rs = fromstring(s)              # Making rational no. from string
    print(stringRational(rs))
    print(type(rs))                 # Verifiying the type of rational np. from string


main()

