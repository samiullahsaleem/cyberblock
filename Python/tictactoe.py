#tic tac toe game
def tictacToe():
    print("Welcome to Tic Tac Toe")
    print("Player 1 is X and Player 2 is O")
    print("The board is numbered as follows:")
    print("1 | 2 | 3")
    print("4 | 5 | 6")
    print("7 | 8 | 9")
    print("Let's begin!")
    board = [" ", " ", " ", " ", " ", " ", " ", " ", " "]
    player = 1
    while True:
        if player == 1:
            print("Player 1's turn")
            move = int(input("Enter your move: "))
            if board[move - 1] == " ":
                board[move - 1] = "X"
                player = 2
            else:
                print("That space is already taken!")
                continue
        else:
            print("Player 2's turn")
            move = int(input("Enter your move: "))
            if board[move - 1] == " ":
                board[move - 1] = "O"
                player = 1
            else:
                print("That space is already taken!")
                continue
        printBoard(board)
        if checkWin(board):
            print("------- Player " + str(player) + " wins! -------")
            break
        if checkTie(board):
            print("-------  It's a tie! -------")
            break


def checkTie(board):
    for i in range(9):
        if board[i] == " ":
            return False
    return True

def checkWin(board):
    if board[0] == board[1] == board[2] != " ":
        return True
    elif board[3] == board[4] == board[5] != " ":
        return True
    elif board[6] == board[7] == board[8] != " ":
        return True
    elif board[0] == board[3] == board[6] != " ":
        return True
    elif board[1] == board[4] == board[7] != " ":
        return True
    elif board[2] == board[5] == board[8] != " ":
        return True
    elif board[0] == board[4] == board[8] != " ":
        return True
    elif board[2] == board[4] == board[6] != " ":
        return True
    else:
        return False

#board print function
def printBoard(board):
    count=0
    for b in board:
        count=count+1
        print(b, end = '  ')
        if(count%3==0):
          print('\n')

        
tictacToe()