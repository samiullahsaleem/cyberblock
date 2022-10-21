'''A 2 X 2 matrix can be considered as an arrangement of four values in two rows and two columns.
These four values can be written as a11, a12, a21, and a22. You have to provide the self
explanatory python example code as answer that how can we use 2 X 2 matrices.'''

class matrix:
    a11 = 0
    a12 = 0
    a21 = 0
    a22 = 0


def main():
    print("Enter the elements of 2x2 matrix")
    m1 = matrix()
    m1.a11 = int(input("a11 = "))
    m1.a12 = int(input("a12 = "))
    m1.a21 = int(input("a21 = "))
    m1.a22 = int(input("a22 = "))

    print("Matrix =",
          m1.a11,m1.a12,
          m1.a21,m1.a22)

    det = (m1.a11*m1.a22) - (m1.a21*m1.a12)
    print("determinant =",det)


main()
