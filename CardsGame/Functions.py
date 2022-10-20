def numtoeng(n):
    if n == 1:
        return "Ace"
    elif n == 2:
        return "Two"
    elif n == 3:
        return "Three"
    elif n == 4:
        return "Four"
    elif n == 5:
        return "Five"
    elif n == 6:
        return "Six"
    elif n == 7:
        return "Seven"
    elif n == 8:
        return "Eight"
    elif n == 9:
        return "Nine"
    elif n == 10:
        return "Ten"
    elif n == 11:
        return "Jack"
    elif n == 12:
        return "Queen"
    elif n == 13:
        return "King"

def typeconversion(n):
    if n == 0:
        return "Diomand"
    elif n == 1:
        return "Heart"
    elif n == 2:
        return "Spade"
    elif n == 3:
        return "Club"
def highestcard(a,b,c):
    if a == 1:
        return numtoeng(a)
    elif b == 1:
        return numtoeng(b)
    elif c == 1:
        return numtoeng(c)
    else:
        for i in range(3):
            if a < b:
                temp = b
                b = a
                a = temp
            if b < c:
                temp = c
                c = b
                b = temp
        return numtoeng(a)
def secondhighest(a,b,c):
    if a == 1:
        return numtoeng(a)
    elif b == 1:
        return numtoeng(b)
    elif c == 1:
        return numtoeng(c)
    else:
        for i in range(3):
            if a < b:
                temp = b
                b = a
                a = temp
            if b < c:
                temp = c
                c = b
                b = temp
        return numtoeng(b)

def printcards(n1,n2,n3,t1,t2,t3):
    
    print("Card 1 is ", numtoeng(n1), "of", typeconversion(t1))
    print("Card 2 is ", numtoeng(n2), "of", typeconversion(t2))
    print("Card 3 is ", numtoeng(n3), "of", typeconversion(t3))
def checktype(t1,t2,t3):
    if t1==t2==t3:
        return True
    else:
        return False
def checksequence(num1,num2, num3):
    if abs(num1-num2)==1 and abs(num2-num3)==1 or abs(num1-num3)==1 and abs(num2-num3)==1 or abs(num1-num3)==1 and abs(num2-num1)==1:
        return True
    else: 
        return False
def checktwosametypes(type1,type2,type3):
    if type1 == type2:
        return True
    elif type2 == type3:
        return True
    elif type1 == type3:
        return True
    else:
        return False
def checktwocardsseq(num1,num2,num3):
    if abs(num1-num2)==1:
        return True
    elif abs(num2-num3)==1:
        return True
    elif abs(num1-num3)==1:
        return True
    else:
        return False
def checktwosametypeswithvalue(num1,num2,num3,type1,type2,type3):
    if type1 == type2:
        return num1,num2
    elif type2 == type3:
        return num2,num3
    elif type1 == type3:
        return num1,num3