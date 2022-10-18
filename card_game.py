import random


def counting(num):
    if num == 1:
        return 'Ace'
    if num == 2:
        return 'Two'
    if num == 3:
        return 'Three'
    if num == 4:
        return 'Four'
    if num == 5:
        return 'Five'
    if num == 6:
        return 'Six'
    if num == 7:
        return 'Seven'
    if num == 8:
        return 'Eight'
    if num == 9:
        return 'Nine'
    if num == 10:
        return 'Ten'
    if num == 11:
        return 'Jack'
    if num == 12:
        return 'Queen'
    if num == 13:
        return 'King'


def type_of_card(num):
    if num == 0:
        return 'Diamond'
    if num == 1:
        return 'Heart'
    if num == 2:
        return 'Spade'
    if num == 3:
        return 'Club'


def color(card):
    if card == 'Diamond' or card == 'Heart':
        return 'Red'
    if card == 'Spade' or card == 'Club':
        return 'Black'


def sequence(v1, v2, v3):
    list = [v1, v2, v3]
    for i in range(3):
        for j in range(2):
            if list[j] < list[j+1]:
                temp = list[j]
                list[j] = list[j+1]
                list[j+1] = temp
    max = list[0]
    if list[0] == max and list[1] == max-1 and list[2] == max-2:
        return True


def max(v1, v2, v3):
    list = [v1, v2, v3]
    for i in range(3):
        for j in range(2):
            if list[j] < list[j+1]:
                temp = list[j]
                list[j] = list[j+1]
                list[j+1] = temp
    max = list[0]
    return max


def check_cards(type1, type2, type3):
    if type1 == type2 == type3:
        return True


def sequence_two(v1, v2, v3):
    list = [v1, v2, v3]
    for i in range(3):
        for j in range(2):
            if list[j] < list[j+1]:
                temp = list[j]
                list[j] = list[j+1]
                list[j+1] = temp

    if list[0] == (list[1] + 1) or list[0] == (list[1] - 1):
        return True
    if list[0] == (list[2] + 1) or list[0] == (list[2] - 1):
        return True
    if list[1] == (list[2] + 1) or list[1] == (list[2] - 1):
        return True


def sum_sequence_two(v1, v2, v3):
    list = [v1, v2, v3]
    sum = 0

    if list[0] == (list[1] + 1) or (list[0] == list[1] - 1):
        sum = list[0] + list[1]
        return (sum)

    if list[0] == (list[2] + 1) or (list[0] == list[2] - 1):
        sum = list[0] + list[2]
        return (sum)

    if list[1] == (list[2] + 1) or (list[1] == list[2] - 1):
        sum = list[1] + list[2]
        return (sum)
    # return 1

def unique_card_sum(v1, v2, v3):
    return (v1+v2+v3)


def second_highest_card(v1, v2, v3):
    list = [v1, v2, v3]
    for i in range(3):
        for j in range(2):
            if list[j] < list[j+1]:
                temp = list[j]
                list[j] = list[j+1]
                list[j+1] = temp
    high = list[1]
    return high


def main():

    # randomly generating cards for player 1
    player_1_card1, player_1_type1 = random.randint(
        1, 13), type_of_card(random.randint(0, 3))
    player_1_card2, player_1_type2 = random.randint(
        1, 13), type_of_card(random.randint(0, 3))
    player_1_card3, player_1_type3 = random.randint(
        1, 13), type_of_card(random.randint(0, 3))

    # player 1 does not have cards of same value as mentioned
    if ((player_1_card1 == player_1_card2) or (player_1_card2 == player_1_card3) or (player_1_card1 == player_1_card3)):
        while player_1_card1 == player_1_card2 or player_1_card2 == player_1_card3 or player_1_card1 == player_1_card3:
            player_1_card1 = random.randint(1, 13)
            player_1_card2 = random.randint(1, 13)
            player_1_card3 = random.randint(1, 13)

    # # randomly generating cards for player 2
    player_2_card1, player_2_type1 = random.randint(
        1, 13), type_of_card(random.randint(0, 3))
    player_2_card2, player_2_type2 = random.randint(
        1, 13), type_of_card(random.randint(0, 3))
    player_2_card3, player_2_type3 = random.randint(
        1, 13), type_of_card(random.randint(0, 3))

    # # player 2 does not have cards of same value as mentioned
    if ((player_2_card1 == player_2_card2) or (player_2_card2 == player_2_card3) or (player_2_card1 == player_2_card3)):
        while player_2_card1 == player_2_card2 or player_2_card2 == player_2_card3 or player_2_card1 == player_2_card3:
            player_2_card1 = random.randint(1, 13)
            player_2_card2 = random.randint(1, 13)
            player_2_card3 = random.randint(1, 13)

    # printing player 2 cards
    print("Player 1 has: ")
    print(counting(player_1_card1), 'of', player_1_type1)
    print(counting(player_1_card2), 'of', player_1_type2)
    print(counting(player_1_card3), 'of', player_1_type3)
    print('---------------------------')

    # printing player 2 cards
    print('Player 2 has:')
    print(counting(player_2_card1), 'of', player_2_type1)
    print(counting(player_2_card2), 'of', player_2_type2)
    print(counting(player_2_card3), 'of', player_2_type3)
    print('---------------------------')

    # If both players have same type and cards in sequence then player with higher sequence or sum of the values on card will win, otherwise game will draw
    if check_cards(player_1_card1, player_1_card2, player_1_card3) and check_cards(player_2_card1, player_2_card2, player_2_card3):

        if sequence(player_1_card1, player_1_card2, player_1_card3) == True and sequence(player_2_card1, player_2_card2, player_2_card3) == True:
            if max(player_1_card1, player_1_card2, player_1_card3) > max(player_2_card1, player_2_card2, player_2_card3):  # for player_1
                print('Player1 has won because Player 1 has higher sequence')
            if max(player_1_card1, player_1_card2, player_1_card3) < max(player_2_card1, player_2_card2, player_2_card3):  # for player_2
                print('Player2 has won because Player 2 has higher sequence')
            else:
                print('<<<------------DRAW------------>>>')

        # If both players have three cards of same type (cards type can be different for both players) then if one player has cards in sequence, the player will win

        elif sequence(player_1_card1, player_1_card2, player_1_card3) == True:  # for player_1
            print('Player 1 has won because Player 1 has cards in sequence')
        elif sequence(player_2_card1, player_2_card2, player_2_card3) == True:  # for player_2
            print('Player 2 has won because Player 2 has cards in sequence')

    # Player with all three cards having same type will win if other player has cards of two or three types
    elif check_cards(player_1_type1, player_1_type2, player_1_type3):
        print('Player 1 has won because Player 1 has all three cards of same type')
    elif check_cards(player_2_type1, player_2_type2, player_2_type3):
        print('Player 2 has won because Player 2 has all three cards of same type')

    # If one player has two cards of same type, then the player will win if other player has cards of three types
    elif (player_1_type1 == player_1_type2 or player_1_type2 == player_1_type3 or player_1_type1 == player_1_type3) and (player_2_type1 != player_2_type2 and player_2_type2 != player_2_type3 and player_2_type1 != player_2_type3):
        print('Player 1 has won because Player 1 has two cards of same type')
    elif (player_2_type1 == player_2_type2 or player_2_type2 == player_2_type3 or player_2_type1 == player_2_type3) and (player_1_type1 != player_1_type2 and player_1_type2 != player_1_type3 and player_1_type1 != player_1_type3):
        print('Player 2 has won because Player 2 has two cards of same type')

    # If both players have two cards of same type, then if only one player has two cards in sequence, the player will win
    elif (player_1_type1 == player_1_type2 or player_1_type2 == player_1_type3 or player_1_type1 == player_1_type3) and (player_2_type1 == player_2_type2 or player_2_type2 == player_2_type3 or player_2_type1 == player_2_type3):
        # if only one player has two cards in same type and sequence, the player will win
        if sequence_two(player_1_card1, player_1_card2, player_1_card3) and (not sequence_two(player_2_card1, player_2_card2, player_2_card3)):  # for player 1
            print(
                'Player 1 has won because Player 1 has two cards of same type and are in sequence')
        if sequence_two(player_2_card1, player_2_card2, player_2_card3) and (not sequence_two(player_1_card1, player_1_card2, player_1_card3)):  # for player 2
            print(
                'Player 2 has won because Player 2 has two cards of same type and are in sequence')

        # player with higher sequence or sum of two same typecards is higher will win
        if sum_sequence_two(player_1_card1, player_1_card2, player_1_card3) and sum_sequence_two(player_2_card1, player_2_card2, player_2_card3):
            if sum_sequence_two(player_1_card1, player_1_card2, player_1_card3) > sum_sequence_two(player_2_card1, player_2_card2, player_2_card3):
                print(
                    'Player 1 has won because Player 1 has a higher sum of the same sequence')
            elif sum_sequence_two(player_1_card1, player_1_card2, player_1_card3) < sum_sequence_two(player_2_card1, player_2_card2, player_2_card3):
                print(
                    'Player 2 has won because Player 2 has a higher sum of the same sequence')

        

                        # <------------------------------------------------------------->
    # if both players have two cards of same type and of same value, then the player with third higher value card will win otherwise game will be draw
    # this case is not possible as we make sure that there should not be same cards and thus this condition will never ever run
                        # <------------------------------------------------------------->

    # in case three cards are of different type for both players then player with higher sum will win,
    elif (player_1_type1 != player_1_type2 != player_1_type3) and (player_2_type1 != player_2_type2 != player_2_type3):
        

        # in case of same value, the player with higher card will win,
        if unique_card_sum(player_1_card1, player_1_card2, player_1_card3) == unique_card_sum(player_2_card1, player_2_card2, player_2_card3):
            if max(player_1_card1, player_1_card2, player_1_card3) > max(player_2_card1, player_2_card2, player_2_card3):
                print(
                    'Player 1 has won because Player 1 has higher value of the cards other than the same sequence')
            if max(player_1_card1, player_1_card2, player_1_card3) < max(player_2_card1, player_2_card2, player_2_card3):
                print(
                    'Player 2 has won because Player 2 has higher value of the cards other than the same sequence')
        # in case three cards are of different type for both players then player with higher sum will win,
        elif unique_card_sum(player_1_card1, player_1_card2, player_1_card3) > unique_card_sum(player_2_card1, player_2_card2, player_2_card3):
            print('Player 1 has won because Player 1 has higher sum of the cards')
        elif unique_card_sum(player_1_card1, player_1_card2, player_1_card3) < unique_card_sum(player_2_card1, player_2_card2, player_2_card3):
            print('Player 2 has won because Player 2 has higher sum of the cards')

        # otherwise the player with second higher card will win, otherwise game will be draw
        else:
            if second_highest_card(player_1_card1, player_1_card2, player_1_card3) > second_highest_card(player_2_card1, player_2_card2, player_2_card3):
                print(
                    'Player 1 has won because Player 1 has higher 2nd value of the cards other than the same sequence')
            if second_highest_card(player_1_card1, player_1_card2, player_1_card3) < second_highest_card(player_2_card1, player_2_card2, player_2_card3):
                print(
                    'Player 2 has won because Player 2 has higher 2nd value of the cards other than the same sequence')


main()
