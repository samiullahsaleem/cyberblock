
def LCM(a,b):
    loop = a*b
    for i in range(max(a,b), loop+1):
        if i % a== 0 and i % b == 0:
            return i

def main():
    a = int(input())
    b = int(input())

    print(LCM(a,b))
main()
