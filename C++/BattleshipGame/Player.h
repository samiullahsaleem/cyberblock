
#ifndef PLAYER_H
#define PLAYER_H

#include <iostream>
#include "Ship.h"
#include "BattleShip.h"
#include "Carrier.h"
#include "Destroyer.h"
#include "PTBoat.h"
#include "Submarine.h"

using namespace std;
class Player{
private:
    string name;
    int score;
    int ships;
    char enemy[10][10];
    char fleet[10][10];
    bool tacNuke;
    Ship * battleship = new Battleship();
    Ship * carriership = new Carrier();
    Ship * destroyership = new Destroyer();
    Ship * submarineship = new Submarine();
    Ship * ptboatship = new PTBoat();
public:
    // pre-condtion: string should be passed to constructor, 
    //               it should be name of player
    Player(string a_name);
     // post-condtions: it assigned values to data members of class, 
    //                 it assign defualt vlaues to them



    // Desturctor is called while destroying object
    // pre-condition: it would not accept any value as argument 
    ~Player();
    // post- condition: it assigned default destructing values to private members of class

    // Decrements player’s ship field by 1 each time called
    // pre-condtion: ships vlaue should be defined, before calling
    void shipMutator();
    // post-condition: it decremented number of ships by one

     // return name of current player
    // pre-condtion: name value should be defined, before calling
    string getname();
     // post-condition: it returned name of player as a string 

     // return 2D array of fleet of player 
    // pre-condtion: 2D array of char value should be defined, before calling
    char * getfleet();
     // post-constion: it returned pointer to 2D array 



    // return 2D array of enemy of player 
    // pre-condtion: 2D array of char value should be defined, before calling
    char * getEnemy();
    // post-constion: it returned pointer to 2D array 



    // return a char at specific position of fleet of player
    // pre-condtion: 2D array of char value should be defined, before calling
    char getfleetAt(int i, int j);
    // post-condition: it return value at sepesific place of array


    // return a char at specific position of enemy of player 
    // pre-condtion: 2D array of char value should be defined, before calling
    char getEnemyAt(int i, int j);
    // post-condition: it return value at sepesific place of array


    // Prints out the passed board 
    //  player name and score above the board
    // print player’s ship status and its current hull point value
    // pre-condtion: passing array should be define and declareed
    void printBoard(char board[10][10]);
    // post-condition: it printed passed array and also player name and number of ships 


    // return score of current player
    // precondtion: score of player shoud be define before 
    int getScore();
    // post-condition: returned score of player 


    // Uses the direction and size of the ship to determine, starting from location specified by x, y
    // Returns true if all elements needed are empty
    // Otherwise false
    // pre-condtion :  Checks if a specified set of positions is empty in the fleet array
    bool checkEmpty(int size, int x, int y, char direction);
    // post-condition : returned true if all required place is empty 



    // Based on ship, will check that the requested placement of 
    // it in the fleet array is valid for position x,y and ship direction
    // pre-condtion :  Checks if a specified set of positions is empty in the fleet array
    bool validPlacement(char ship, int x, int y, char direction);
    // post-condtion: returned true if placement is gone valid , 




    // Marks the specified elements of the fleet array starting from the specified 
    // position by x,y and following the direction specified
    // // pre-condtion:  char ship sould be (S, C, B, P , D)
    //                     values of x and y should be valid 
    //                    direction should be v or h
    void markShip(char ship, int x, int y, char direction);
    // post-condition : placed value on specicifc place 
    //                  print board of fleet of current player 




    // Converts the user enter letter for the column selection in to an integer
    // precondtion : letter should be (A- J)
    int converLetterToInt(char letter);
    // post-condition: retuned values of passing char after converting to int 



    // return true if any duplicate is found in fleet 
    // pre-condtion :  char c sould be (S, C, B, P , D)
    bool checkDuplication(char c);
    // post-condition : returned true of found duplicates in fleet array 



    //  Prompts the user to ask which ship would they like to place next. 
    //  Checks if the player already placed selected ship 
    //  If already placed re-prompt user for a different ship 
    //  Marks the ship’s field true after successful placement o Increments player’s ships field
    // pre-condtion : Checks if the player already placed selected ship
    void placeShips();
    // post-condition : it placed ship on fleet board entered by user
    //                  setted value to place true for each ship




    // the enemy array element at that position is empty
    // if empty return ture
    // else return false
    // precondtion: value of x and y should be 0-9
    bool validShot(int x, int y);
    // post-condtion: returned true if enemy array at position is empty 




    // Place an ‘X’ in the current player’s enemy array at the position specified by x,y
    // If missed set the current player’s enemy array at position x,y to ‘O’

    // precondtion: value of x and y should be 0-9
    //              fleet array should be define and declared 
    void markResult(int x, int y, Player &p);
    // post-condtion: it printed miss or Hits message and place X or O in enemy





    // If Yes, ask the user to input shot coordinates for the center of the blast. if Y the do blast
    // Allows the current player to shot a number of times equal to their current ship total.
    // Ships should display their fireWeapons message based 
    // on the order indicated by the client above every turn they shoot.
    // precondition :  fleet array should be define and declared
    //                 enemy array should be define and declared 
    void fire(Player& p);
    // post-condition : Allowed the current player to shot a number of times equal to their current ship total.
    //                  Ships displayed their fireWeapons message based 



    // if the current plyer’s score is equal to 170 print a message saying
    // o “~~~Player playerName is Victorious!~~~”
    // pre-condtion: Score should be define before 
    bool checkIfWon();
    // post-condtion : return ture if score is greater than 170
    


    //  Checks each of the 11 blast locations based on the user input x and y coordinates in the pattern seen above. 
    //  Call the markResult method only if the current player’s enemy board is unmarked at that location.
    // precondtion: value of x and y should be 0-9
    void detonate(int x, int y, Player& p);
    // post-condition : mark result at specific postion and also increment score on board 



    // Checks that all positions of the blast are within the confines of the playing board.
     // precondtion: value of x and y should be 0-9
    bool checkNuke(int x, int y);
    // returned true of x and y is centered
};
#endif
