def commonDifference(a):
    """Finding common difference when a sequence is given in the form of an array"""
    d = a[1] - a[0]
    return d

def nthTerm(a, n):
    """Sequence(Array) and index is given and nth term is to find"""
    d = commonDifference(a)
    x = (n-1)
    x2 = x*d
    an = a[0] +x2    # Although index of array starts from 0 but it has no effect in these cases as we are not writing a[n].
    return an

def index_ofTerm(a,an):
    """Sequence(Array) and nth term is given and index is to find"""
    d = commonDifference(a)
    n = 1 + (an-a[0])/d
    if n == int(n):
        return int(n)
    else:
        print('Does not exists')
    # n = 0
    # return n

def SumSeries(a,n):
    """Sequece and last index is given and sum is to find"""
    d = commonDifference(a)
    s = (n/2)(2*a[0]+(n-1)*d)
    return s

def main():
    a = [2,5,8,11,14,17,20,23]
    # print(index_ofTerm(a,26))
    print(nthTerm(a,3))



main()