import random

def name(d):
    if d == 1:
        return 'Rock'
    elif d == 2:
        return 'Paper'
    else:
        return 'Scissor'

def decision():
    return random.randint(1,3)
    

def main():
    while True:
        user = int(input('rock: 1, paper: 2, scissor: 3 --- '))
        comp = decision()
        print(f'User chose: {name(user)}\nComputer chose: {name(comp)}')
        if user != comp:
            break
    if user == 1 and comp == 2:
        print(f'{name(user)} is wraped by {name(comp)} so the winner is Computer')
    if user == 1 and comp == 3:
        print(f'{name(user)} smashes {name(comp)} so the winner is Player')
    
    if user == 2 and comp == 1:
        print(f'{name(user)} wrapes {name(comp)} so the winner is Player')
    if user == 2 and comp == 3:
        print(f'{name(user)} is cut by {name(comp)} so the winner is Computer')

    if user == 3 and comp == 1:
        print(f'{name(user)} is smashed by {name(comp)} so the winner is Computer')
    if user == 3 and comp == 2:
        print(f'{name(user)}cuts {name(comp)} so the winner is Player')

main()