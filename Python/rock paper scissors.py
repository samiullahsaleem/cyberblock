#!/usr/bin/env python
# coding: utf-8

# In[7]:


import random
ask='yes'
while ask=='yes':
    user= input("Enter a choice (rock, paper scissors): ")
    actions = ["rock", "paper", "scissors"]
    computer = random.choice(actions)
    print(f"\nYou chose {user}, computer chose {computer}.\n")

    if user == computer:
        print(f"Both players selected {user}. It's a tie!")
    elif user== "rock":
        if computer == "scissors":
            print("Rock smashes scissors! You win!")
        else:
            print("Paper covers rock! You lose.")
    elif user == "paper":
        if computer == "rock":
            print("Paper covers rock! You win!")
        else:
            print("Scissors cuts paper! You lose.")
    elif user == "scissors":
        if computer == "paper":
            print("Scissors cuts paper! You win!")
        else:
            print("Rock smashes scissors! You lose.")
    ask=input("do you want to play again (yes or no)")

