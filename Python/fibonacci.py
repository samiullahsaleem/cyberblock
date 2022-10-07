def Fibonacci_num(m): 
    u = 0
    v = 1
    if m < 0: 
        print("Incorrect input entered") 
    elif m == 0: 
        return u 
    elif m == 1: 
        return v
    else: 
        for i in range(2,m): 
            c = u + v 
            u = v
            v = c 
        return v
