import Functions
import random as r
def main():
    isCase1 = False
    isCase2  = False
    onum1 = r.randint(1,13)
    otype1 = r.randint(0,3)
    onum2 = r.randint(1,13)
    otype2 = r.randint(0,3)
    onum3 = r.randint(1,13)
    otype3 = r.randint(0,3)
    print("Player One")
    Functions.printcards(onum1,onum2,onum3,otype1,otype2,otype3)    
    tnum1 = r.randint(1,13)
    ttype1 = r.randint(0,3)
    tnum2 = r.randint(1,13)
    ttype2 = r.randint(0,3)
    tnum3 = r.randint(1,13)
    ttype3 = r.randint(0,3)
    print("Player Two")
    Functions.printcards(tnum1,tnum2,tnum3,ttype1,ttype2,ttype3)
    if Functions.checktype(otype1,otype2,otype3) == True and Functions.checktype(ttype1,ttype2,ttype3) == False:
        print("Player One All cards are same type so Player One wins")
        isCase1 = True
    elif Functions.checktype(otype1,otype2,otype3) == False and Functions.checktype(ttype1,ttype2,ttype3) == True:
        print("Player Two All cards are same type so Player Two wins")
        isCase1 = True
    elif Functions.checktype(otype1,otype2,otype3) == True and Functions.checktype(ttype1,ttype2,ttype3) == True:
        if Functions.checksequence(otype1,otype2,otype3) == True and Functions.checktype(ttype1,ttype2,ttype3) == False:
            print("Player One has all cards in sequence so Player One wins")
            isCase1 = True
        elif Functions.checksequence(otype1,otype2,otype3) == False and Functions.checktype(ttype1,ttype2,ttype3) == True:
            print("Player Two has all cards in sequence so Player Two wins")
            isCase1 = True
        elif Functions.checksequence(otype1,otype2,otype3) == True and Functions.checktype(ttype1,ttype2,ttype3) == True:
            if sum(onum1,onum2,onum3) > sum(tnum1,tnum2,tnum3):
                print("Player one has higher sequence so Player One wins")
                isCase1 = True
            elif sum(onum1,onum2,onum3) < sum(tnum1,tnum2,tnum3):
                print("Player Two has higher sequence so Player Two wins")
                isCase1 = True
            else:
                print("Game is Drawn")
                isCase1 = True
    if isCase1 == False:    
        if Functions.checktwosametypes(otype1,otype2,otype3) == True and Functions.checktwosametypes(ttype1,ttype2,ttype3)==False:
            print("Player one has two cards of same type so Player One wins")
            isCase2 = True
        elif Functions.checktwosametypes(otype1,otype2,otype3) == False and Functions.checktwosametypes(ttype1,ttype2,ttype3)==True:
            print("Player two has two cards of same type so Player two wins")
            isCase2 = True
        elif Functions.checktwosametypes(otype1,otype2,otype3) == True and Functions.checktwosametypes(ttype1,ttype2,ttype3)==True:
            if Functions.checktwocardsseq(onum1,onum2,onum3) == True and Functions.checktwocardsseq(tnum1,tnum2,tnum3)==False:
                print("Player one has two cards in sequence so player One wins")
                isCase2 = True
            elif Functions.checktwocardsseq(onum1,onum2,onum3) == False and Functions.checktwocardsseq(tnum1,tnum2,tnum3)==True:
                print("Player two has two cards in sequence so player Two wins")
                isCase2 = True
            elif Functions.checktwocardsseq(onum1,onum2,onum3) == True and Functions.checktwocardsseq(tnum1,tnum2,tnum3)==True:
                onumone,onumtwo = Functions.checktwosametypeswithvalue(onum1,onum2,onum3,otype1,otype2,otype3)
                tnumone,tnumtwo = Functions.checktwosametypeswithvalue(tnum1,tnum2,tnum3,ttype1,ttype2,ttype3)
                if sum(onumone,onumtwo) > sum(tnumone,tnumtwo):
                    print("Player One has higher sequence so Player One wins")
                    isCase2 = True
                elif sum(onumone,onumtwo) < sum(tnumone,tnumtwo):
                    print("Player two has higher sequence so player two wins")
                    isCase2 = True
                elif sum(onumone,onumtwo) == sum(tnumone,tnumtwo):
                    if onum3 > tnum3:
                        print("Player one has greater third card so Player One wins")
                        isCase2 = True
                    elif onum3 < tnum3:
                        print("Player two has higher third card so Player two wins")
                        isCase2 = True
                    else:
                        print("game is drawn")
                        isCase2 = True
    if isCase2 == False:
        if onum1+onum2+onum3 > tnum1+tnum2+tnum3:
            print("Player one has higher value cards so Player one wins")
        elif onum1+onum2+onum3 < tnum1+tnum2+tnum3:
            print("Player two has higher value cards so Player two wins")
        elif onum1+onum2+onum3 == tnum1+tnum2+tnum3:
            if Functions.highestcard(onum1,onum2,onum3) > Functions.highestcard(tnum1,tnum2,tnum3):
                print("Player one has highest card so player one wins")
            elif Functions.highestcard(onum1,onum2,onum3) < Functions.highestcard(tnum1,tnum2,tnum3):
                print("Player two has highest card so player two wins")
                if Functions.highestcard(onum1,onum2,onum3) == Functions.highestcard(tnum1,tnum2,tnum3):
                    if Functions.secondhighest(onum1,onum2,onum3) > Functions.secondhighest(tnum1,tnum2,tnum3):
                        print("Player one has second highest card so player one wins")
                    elif Functions.secondhighest(onum1,onum2,onum3) < Functions.secondhighest(tnum1,tnum2,tnum3):
                        print("Player two has second highest card so player two wins")
                    else:
                        print("game is drawn")    

            

                


        
main()