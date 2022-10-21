"""
Make a UDT of Matrix 3x3 with following functionalities:
1. Create Matrix
2. Convert to string
3. Transpose of matrix
4. Determinant of matrix
5. Addition and subtraction of matrices
6. Multiplication of matrices
7. Adjoint of Matrix
8. Inverse of matrix
"""


class matrix3:
    # Defining initial values
    a11 = 0
    a12 = 0
    a13 = 0
    a21 = 0
    a22 = 0
    a23 = 0
    a31 = 0
    a32 = 0
    a33 = 0

def swap(a,b):
    """Swapping numbers and function is used in calculations"""
    temp = a
    a = b
    b = temp
    return a, b

def createMatrix(a,b,c,d,e,f,g,h,i):
    m = matrix3()
    m.a11 = a
    m.a12 = b
    m.a13 = c
    m.a21 = d
    m.a22 = e
    m.a23 = f
    m.a31 = g
    m.a32 = h
    m.a33 = i
    return m

def strofMatrix(m):
    s1 = '|  ' + str(m.a11) + '  ' + str(m.a12) + '  ' + str(m.a13) + '  |'
    s2 = '|  ' + str(m.a21) + '  ' + str(m.a22) + '  ' + str(m.a23) + '  |'
    s3 = '|  ' + str(m.a31) + '  ' + str(m.a32) + '  ' + str(m.a33) + '  |'
    s = s1 + '\n' + s2 + '\n' + s3
    return s

def trans(m):
    t = matrix3()
    t.a11 = m.a11
    t.a22 = m.a22
    t.a33 = m.a33
    t.a12, t.a21 = swap(m.a12, m.a21)
    t.a13, t.a31 = swap(m.a13, m.a31)
    t.a32, t.a23 = swap(m.a32, m.a23)
    return t

def Determinant(m):
    d = m.a11*((m.a22*m.a33)-(m.a23*m.a32)) - m.a12*((m.a21*m.a33)-(m.a23*m.a31)) + m.a13*((m.a21*m.a32)-(m.a22*m.a31))
    return d

def add(m1, m2):
    m = matrix3()
    m.a11 = m1.a11 + m2.a11
    m.a12 = m1.a12 + m2.a12
    m.a13 = m1.a13 + m2.a13
    m.a21 = m1.a21 + m2.a21
    m.a22 = m1.a22 + m2.a22
    m.a23 = m1.a23 + m2.a23
    m.a31 = m1.a31 + m2.a31
    m.a32 = m1.a32 + m2.a32
    m.a33 = m1.a33 + m2.a33
    return m

def sub(m1, m2):
    m = matrix3()
    m.a11 = m1.a11 - m2.a11
    m.a12 = m1.a12 - m2.a12
    m.a13 = m1.a13 - m2.a13
    m.a21 = m1.a21 - m2.a21
    m.a22 = m1.a22 - m2.a22
    m.a23 = m1.a23 - m2.a23
    m.a31 = m1.a31 - m2.a31
    m.a32 = m1.a32 - m2.a32
    m.a33 = m1.a33 - m2.a33
    return m

def multiply(m1, m2):
    m = matrix3()

    m.a11 = (m1.a11 * m2.a11) + (m1.a12 * m2.a21) + (m1.a13 * m2.a31)
    m.a12 = (m1.a11 * m2.a12) + (m1.a12 * m2.a22) + (m1.a13 * m2.a32)
    m.a13 = (m1.a11 * m2.a13) + (m1.a12 * m2.a23) + (m1.a13 * m2.a33)

    m.a21 = (m1.a21 * m2.a11) + (m1.a22 * m2.a21) + (m1.a23 * m2.a31)
    m.a22 = (m1.a21 * m2.a12) + (m1.a22 * m2.a22) + (m1.a23 * m2.a32)
    m.a23 = (m1.a21 * m2.a13) + (m1.a22 * m2.a23) + (m1.a23 * m2.a33)

    m.a31 = (m1.a31 * m2.a11) + (m1.a32 * m2.a21) + (m1.a33 * m2.a31)
    m.a32 = (m1.a31 * m2.a12) + (m1.a32 * m2.a22) + (m1.a33 * m2.a32)
    m.a33 = (m1.a31 * m2.a13) + (m1.a32 * m2.a23) + (m1.a33 * m2.a33)

    return m

def adjoint(m):
    ad = matrix3()
    ad.a11 = +( (m.a22 * m.a33) - (m.a23 * m.a32) )
    ad.a12 = -( (m.a21 * m.a33) - (m.a23 * m.a31) )
    ad.a13 = +( (m.a21 * m.a32) - (m.a22 * m.a31) )

    ad.a21 = -( (m.a12 * m.a33) - (m.a13 * m.a32) )
    ad.a22 = +( (m.a11 * m.a33) - (m.a13 * m.a31) )
    ad.a23 = -( (m.a11 * m.a32) - (m.a12 * m.a31) )

    ad.a31 = +( (m.a12 * m.a23) - (m.a13 * m.a22) )
    ad.a32 = -( (m.a11 * m.a23) - (m.a13 * m.a21) )
    ad.a33 = +( (m.a11 * m.a22) - (m.a12 * m.a21) )

    adj = trans(ad)
    return adj

def inverse(m):
    inv = matrix3()
    if Determinant(m) != 0:
        d = Determinant(m)
        a = adjoint(m)
        inv.a11 = a.a11 / d
        inv.a12 = a.a12 / d
        inv.a13 = a.a13 / d

        inv.a21 = a.a21 / d
        inv.a22 = a.a22 / d
        inv.a23 = a.a23 / d

        inv.a31 = a.a31 / d
        inv.a32 = a.a32 / d
        inv.a33 = a.a33 / d
        return inv
    else:
        print('Inverse does not exist')
    return inv

class equation3:
    x = 0
    y = 0
    z = 0
    s = 0

def createEquation(a, b, c, d):
    e = equation3()
    e.x = a
    e.y = b
    e.z = c
    e.s = d
    return e

def strofEquation(e):
    s = str(e.x) + '+' + str(e.y) + '+' + str(e.z)
    return s

def systemSolution(e1,e2,e3):       # Using Inverse Matrix methode 1st Year Book (page 133)
    m1 = matrix3()

    m1.a11 = e1.x
    m1.a12 = e1.y
    m1.a13 = e1.z

    m1.a21 = e2.x
    m1.a22 = e2.y
    m1.a23 = e2.z

    m1.a31 = e3.x
    m1.a32 = e3.y
    m1.a33 = e3.z

    m2 = matrix3()
    m2.a11 = e1.s
    m2.a21 = e2.s
    m2.a31 = e3.s

    d = Determinant(m1)

    if d != 0:
        inv = matrix3()
        ad = adjoint(m1)
        inv.a11 = ad.a11/d
        inv.a12 = ad.a12/d
        inv.a13 = ad.a13/d

        inv.a21 = ad.a21 / d
        inv.a22 = ad.a22 / d
        inv.a23 = ad.a23 / d

        inv.a32 = ad.a32 / d
        inv.a33 = ad.a33 / d

        ans = multiply(inv,m2)
        x = ans.a11
        inv.a31 = ad.a31 / d
        inv.a32 = ad.a32 / d
        inv.a33 = ad.a33 / d

        ans = multiply(inv,m2)
        x = ans.a11
        y = ans.a21
        z = ans.a31
    else:
        raise Exception('Solution does not exist')

    return x, y, z


def main():
    m = createMatrix(1,2,3,4,5,6,7,8,9)
    t = trans(m)

    print(strofMatrix(m))
    print()

    print(strofMatrix(t))
    print()

    # print(strofMatrix(m)) # Checking whether the transpose function change the original matrix or not.
    # print()

    d =Determinant(m)
    print(d)
    print()

    adj = adjoint(m)
    print(strofMatrix(adj))
    print()

    x = createMatrix(1,0,2,0,2,1,1,-1,1)
    i =inverse(x)
    print(strofMatrix(i))
    print()

    e1 = createEquation(1,-2,1,-4)
    e2 = createEquation(2,-3,2,-6)
    e3 = createEquation(2,2,1,5)
    x, y, z = systemSolution(e1, e2, e3)
    print(x, y, z)

    # e4 = createEquation(1,2,3,2)
    # e5 = createEquation(4,5,6,7)
    # e6 = createEquation(7,8,9,10)
    # x, y, z = systemSolution(e4, e5, e6)
    # print(x, y, z)    # Solution of this system of equations does not exits as det of matrix is '0'.
main()














