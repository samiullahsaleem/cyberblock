'''Write a python program that defines a type Vector to represent a vector in three dimensions.
Later, create following functions and also code in main function to demonstrate the usage of
Vector type.
    createVector(x, y, z) # returns a vector with x,y,z as components
    reverseVector(v) # returns a vector with components: -vx -vy -vz
    addVectors(v1, v2) # returns a vector v1+v2
    dotProd(v1, v2) # returns a number v1x·v2x + v1y·v2y + v1z·v2z
    crossVector(v1, v2) # returns a vector as cross product: v1 X v2
    magnitute(v) # returns a number as magnitude of v'''

class vector:
    x = 0
    y = 0
    z = 0

def createVector(x, y, z):
    v = [x, y, z]  # v --> array
    return v

def reverseVector(v):
    # return [-i for i in v]
    v[0] = -v[0]
    v[1] = -v[1]
    v[2] = -v[2]
    return v

def addVector(v1,v2):
    s1 = v1[0] + v2[0]
    s2 = v1[1] + v2[1]
    s3 = v1[2] + v2[2]
    sum = [s1,s2,s3]
    return sum

def dotProduct(v1,v2):
    p1 = v1[0] * v2[0]
    p2 = v1[1] * v2[1]
    p3 = v1[2] * v2[2]
    p = p1 + p2 + p3
    return p

def crossPrduct(v1,v2):
    x =  ((v1[1]*v2[2]) - (v1[2]*v2[1]))
    y = -((v1[0]*v2[2]) - (v1[2]*v2[0]))
    z =  ((v1[0]*v2[1]) - (v1[1]*v2[0]))
    cp = [x, y, z]
    return cp

def magnitude(v):
    x2 = v[0] * v[0]
    y2 = v[1] * v[1]
    z2 = v[2] * v[2]
    sm = x2 + y2 + z2
    m = sm ** 0.5
    return m

def main():
    v = createVector(2, 4, -5)
    print(v)
    r = reverseVector(v)
    print(r)
    a = addVector(v, r)
    print(a)
    a = dotProduct(v, v)
    print(a)  # Dot product of same vector is square of its individual magnitude.
    a = crossPrduct(v, v)
    print(a)  # Cross product of same vector is null vector.
    t = createVector(2, 2, 2)
    a = magnitude(t)
    print(a)


main()
