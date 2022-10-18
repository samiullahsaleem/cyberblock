def flip_Bits(n):
    for i in range(8): #8 bits
        if n & (2**i) == 0:
            n = n | (2 ** i)
        else:
            n = n & (((2**8)-1) - (2**i)) #flipping ith bit to 0
    return n

if __name__ == "__main__":
    n = int(input())
    print(flip_Bits(n))

