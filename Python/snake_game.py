import random

def roll_dice():

    d  = random.randint(1,6)
    return d

def ladder_or_snake():
    n1 = random.randint(0,99)
    n2 = random.randint(0,99)

    if n1 < n2:
        return (n1, n2) #smaller, greater
    if n2 < n1:
        return (n2, n1) #smaller, greater

def main():
    game = []
    for num in range(0,101):
        game.append(num)

    # for ladders
    l1_n1, l1_n2 = ladder_or_snake()
    l2_n1, l2_n2 = ladder_or_snake()
    l3_n1, l3_n2 = ladder_or_snake()
    l4_n1, l4_n2 = ladder_or_snake()

    # for snakes
    s1_n1, s1_n2 = ladder_or_snake()
    s2_n1, s2_n2 = ladder_or_snake()
    s3_n1, s3_n2 = ladder_or_snake()  
    s4_n1, s4_n2 = ladder_or_snake()
    
    position = 1
    while position <=100:
        dice = roll_dice()
        position += dice

        if position > 100:
            while position != 100:
                position -= dice
                dice = roll_dice()
                position += dice

        print(f'Dice has value {dice}, piece moved to cell {game[position] }')

        #       <----------for ladder---------->
        if game[position] == l1_n1:
            print(f'There is ladder on cell {game[position]}, piece move to {l1_n2}')
            position = l1_n2

        if game[position] == l2_n1:
            print(f'There is ladder on cell {game[position]}, piece move to {l2_n2}')
            position = l2_n2

        if game[position] == l3_n1:
            print(f'There is ladder on cell {game[position]}, piece move to {l3_n2}')
            position = l3_n2

        if game[position] == l4_n1:
            print(f'There is ladder on cell {game[position]}, piece move to {l4_n2}')
            position = l4_n2


        #       <----------for snakes---------->
        if game[position] == s1_n2:
            print(f'There is snake on this cell {game[position]}, piece move to {s1_n1}')
            position = s1_n1

        if position == s2_n2:
            print(f'There is snake on this cell {game[position]}, piece move to {s2_n1}')
            position -= s2_n1

        if position == s3_n2:
            print(f'There is snake on this cell {game[position]}, piece move to {s3_n1}')
            position -= s3_n1

        if position == s4_n2:
            print(f'There is snake on this cell {game[position]}, piece move to {s4_n1}')
            position -= s4_n1
        
        if position == 100:
            print('<----Yay, you won the game.---->')
            break
main()