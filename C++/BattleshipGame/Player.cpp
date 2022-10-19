#include <iostream>
#include "Player.h"
using namespace std;

// Parameterized Constructor for name
// • Sets name to the passed parameter
    // pre-condtion: string should be passed to constructor, 
    //               it should be name of player 
    Player::Player(string a_name){
        name = a_name;
        score = 0;
        for(int i=0; i< 10; i++){
            for(int j=0; j< 10; j++){
                enemy[i][j] = ' ';
                fleet[i][j] = ' ';
            }
        }
        tacNuke = true;
        ships = 0;
    }
    // post-condtions: it assigned values to data members of class, 
    //                 it assign defualt vlaues to them




    // Desturctor is called while destroying object
    // pre-condition: it would not accept any value as argument 
    Player::~Player(){
        name = " ";
        score = -1;
        for(int i=0; i< 10; i++){
            for(int j=0; j< 10; j++){
                enemy[i][j] = ' ';
                fleet[i][j] = ' ';
            }
        }
        tacNuke = false;
        ships = 1;
    }
    // post- condition: it assigned default destructing values to private members of class


    // Decrements player’s ship field by 1 each time called
    // pre-condtion: ships vlaue should be defined, before calling
    void Player::shipMutator(){
        ships--;
    }
    // post-condition: it decremented number of ships by one



    // return name of current player
    // pre-condtion: name value should be defined, before calling
    string Player::getname(){
        return name;
    }
    // post-condition: it returned name of player as a string 


    // return 2D array of fleet of player 
    // pre-condtion: 2D array of char value should be defined, before calling
    char * Player::getfleet(){
        return reinterpret_cast<char *>(fleet);
    }
    // post-constion: it returned pointer to 2D array 


    // return 2D array of enemy of player 
    // pre-condtion: 2D array of char value should be defined, before calling
    char * Player::getEnemy(){
        return reinterpret_cast<char *>(enemy);
    }
    // post-constion: it returned pointer to 2D array 



    // return a char at specific position of fleet of player
    // pre-condtion: 2D array of char value should be defined, before calling
    char Player::getfleetAt(int i, int j){
        return fleet[i][j];
    }
    // post-condition: it return value at sepesific place of array


    // return a char at specific position of enemy of player 
    // pre-condtion: 2D array of char value should be defined, before calling
    char Player::getEnemyAt(int i, int j){
        return enemy[i][j];
    }
    // post-condition: it return value at sepesific place of array


    // Prints out the passed board 
    //  player name and score above the board
    // print player’s ship status and its current hull point value
    // pre-condtion: passing array should be define and declareed
    void Player::printBoard(char board[10][10]){
        cout<< "\nPlayer Name : "<< name<< endl;
        cout<< name <<" Player Score : "<< score<< endl;
        cout<< "Ship : "<< ships << endl;
        cout<< "   A   B   C   D   E   F   G   H   I   J"<< endl;
        for(int i=0; i< 10; i++){
            cout<< i<< " ";
            for(int j=0; j< 10; j++){
                cout<<  board[i][j] << " | ";
            }
            cout<< "\n-----------------------------------------"<< endl;
        }
        cout<< name <<" Ship Status -> \t";
        cout << "CV="<< carriership->getHullpoints() << "  BB=" << battleship->getHullpoints()<< "  DD="<< destroyership->getHullpoints()<< endl;
        cout << "\t\t\t SUB="<< submarineship->getHullpoints() << "      PT=" << ptboatship->getHullpoints()<<endl;
    }
    // post-condition: it printed passed array and also player name and number of ships 


    // return score of current player
    // precondtion: score of player shoud be define before  
    int Player::getScore(){
        return score;
    }
    // post-condition: returned score of player 


    // Uses the direction and size of the ship to determine, starting from location specified by x, y
    // Returns true if all elements needed are empty
    // Otherwise false
    // pre-condtion :  Checks if a specified set of positions is empty in the fleet array
    bool Player::checkEmpty(int size, int x, int y, char direction){
        if(direction == 'h'){
                for(int j=y; j<size; j++){
                    if(fleet[x][j] != ' '){
                        return false;
                    }
                }
            // }
            return true;
        }
        else {
            for(int i=x; i< size; i++){
                    if(fleet[i][y] != ' '){
                        return false;
                    }
                // }
            }
            return true;
        }
    }
    // post-condition : returned true if all required place is empty 



    // Based on ship, will check that the requested placement of 
    // it in the fleet array is valid for position x,y and ship direction
    // pre-condtion :  Checks if a specified set of positions is empty in the fleet array
    bool Player::validPlacement(char ship, int x, int y, char direction){
        int size =0;
        
        if(x< 10 && y< 10){
            if(ship == 'S'){
                size = 3;
            }
            else if(ship == 'C'){
                size = 5;
            }
            else if(ship == 'D'){
                size = 3;
            }
            else if(ship == 'B'){
                size = 4;
            }
            else if(ship == 'P'){
                size = 2;
            }
            if(!checkEmpty(size, x, y, direction)){
                return false;
            }
            else {
                return true;
            }
        }
        return false;
    }
    // post-condtion: returned true if placement is gone valid , 




    // Marks the specified elements of the fleet array starting from the specified 
    // position by x,y and following the direction specified
    // // pre-condtion:  char ship sould be (S, C, B, P , D)
    //                     values of x and y should be valid 
    //                    direction should be v or h
    void Player::markShip(char ship, int x, int y, char direction){
            int size = 0;
            if(ship == 'S'){
                size = 3;
                if(direction == 'h'){
                    for(int j=y; j<size+y; j++){
                        fleet[x][j] = 'S';
                    }
                }
                else if(direction == 'v'){
                    for(int j=x; j<size+x; j++){
                        fleet[j][y] = 'S';
                    }
                }
            }
            else if(ship == 'C'){
                size = 5;
                if(direction == 'h'){
                    for(int j=y; j<size+y; j++){
                        fleet[x][j] = 'C';
                    }
                }
                else if(direction == 'v'){
                    for(int j=x; j<size+x; j++){
                        fleet[j][y] = 'C';
                    }
                }
            }
            else if(ship == 'D'){
                size = 3;
                if(direction == 'h'){
                    for(int j=y; j<size+y; j++){
                        fleet[x][j] = 'D';
                    }
                }
                else if(direction == 'v'){
                    for(int j=x; j<size+x; j++){
                        fleet[j][y] = 'D';
                    }
                }
            }
            else if(ship == 'B'){
                size = 4;
                if(direction == 'h'){
                    for(int j=y; j<size+y; j++){
                        fleet[x][j] = 'B';
                    }
                }
                else if(direction == 'v'){
                    for(int j=x; j<size+x; j++){
                        fleet[j][y] = 'B';
                    }
                }
            }
            else if(ship == 'P'){
                size = 2;
                if(direction == 'h'){
                    for(int j=y; j<size+y; j++){
                        fleet[x][j] = 'P';
                    }
                }
                else if(direction == 'v'){
                    for(int j=x; j<size+x; j++){
                        fleet[j][y] = 'P';
                    }
                }
            }
        printBoard(fleet);
    }
    // post-condition : placed value on specicifc place 
    //                  print board of fleet of current player 




    // Converts the user enter letter for the column selection in to an integer
    // precondtion : letter should be (A- J)
    int Player::converLetterToInt(char letter){
        if(letter >= 48 && letter <58){
            int num = letter-48;
            return num;
        }
        return -1;
    }
    // post-condition: retuned values of passing char after converting to int 



    // return true if any duplicate is found in fleet 
    // pre-condtion :  char c sould be (S, C, B, P , D)
    bool Player::checkDuplication(char c){
        for(int i=0; i< 10; i++){
            for(int j=0; j< 10; j++){
                if(fleet[i][j] == c){
                    return true;
                }
            }
        }
        return false;
    }
    // post-condition : returned true of found duplicates in fleet array 



    //  Prompts the user to ask which ship would they like to place next. 
    //  Checks if the player already placed selected ship 
    //  If already placed re-prompt user for a different ship 
    //  Marks the ship’s field true after successful placement o Increments player’s ships field
    // pre-condtion : Checks if the player already placed selected ship 
    void Player::placeShips(){
        cout<< "C. Carrier Ship "<< endl;
        cout<< "B. Battle Ship " << endl;
        cout<< "D. Destroyer Ship " << endl;
        cout<< "S. Submarine Ship " << endl;
        cout<< "P. PTBoat Ship " << endl;
        char choice;
        cout<< "Enter your choice : ";
        cin>> choice;
        while(checkDuplication(choice)){
            cout<< "Duplicated found "<< endl;
            cout<< "C. Carrier Ship "<< endl;
            cout<< "B. Battle Ship " << endl;
            cout<< "D. Destroyer Ship " << endl;
            cout<< "S. Submarine Ship " << endl;
            cout<< "P. PTBoat Ship " << endl;
            cout<< "Enter your choice ";
            cin>> choice;
        }
        cout<< "Enter row : ";
        int row;
        cin>> row;
        cout<< "Enter column : ";
        int col;
        cin>> col;
        cout<< "Enter direction : (h or v): ";
        char dir;
        cin>> dir;
        if(validPlacement(choice, row, col, dir)){
            this->ships++;
            markShip(choice, row,col,dir);
        }
        switch (choice)
        {
        case 'C':
            carriership->setPlaced(true);
            break;
        case 'B':
            battleship->setPlaced(true);
            break;
        case 'D':
            destroyership->setPlaced(true);
            break;
        case 'S':
            submarineship->setPlaced(true);
            break;
        case 'P':
            ptboatship->setPlaced(true);
            break;
        default:
            break;
        }
    }
    // post-condition : it placed ship on fleet board entered by user
    //                  setted value to place true for each ship




    // the enemy array element at that position is empty
    // if empty return ture
    // else return false
    // precondtion: value of x and y should be 0-9
    bool Player::validShot(int x, int y){
        if(x > 9 || y > 9){
            return false;
        }
        else {
            if(enemy[x][y] == ' '){
                return true;
            }
            else {
                return false;
            }
        }
    }
    // post-condtion: returned true if enemy array at position is empty 




    // Place an ‘X’ in the current player’s enemy array at the position specified by x,y
    // If missed set the current player’s enemy array at position x,y to ‘O’

    // precondtion: value of x and y should be 0-9
    //              fleet array should be define and declared 
    void Player::markResult(int x, int y, Player &p){
                if(p.fleet[x][y] == 'S' || p.fleet[x][y] == 'C' || p.fleet[x][y] == 'B' || p.fleet[x][y] == 'D' || p.fleet[x][y] == 'P'){
                    enemy[x][y] = 'X';
                    cout<< "Hit! " << endl;
                    p.shipMutator();
                    score += 10;
                    if(p.fleet[x][y] == 'S'){
                        p.submarineship->hit();
                        if(p.submarineship->getHullpoints()<= 0){
                            cout<< "Enemy "<< p.submarineship->getName()<< " Sunk!"<< endl;
                        }
                    }
                    else if(p.fleet[x][y] == 'C'){
                        p.carriership->hit();
                        if(p.carriership->getHullpoints()<= 0){
                            cout<< "Enemy "<< p.carriership->getName()<< " Sunk!"<< endl;
                        }
                    }
                    else if(p.fleet[x][y] == 'B'){
                        p.battleship->hit();
                        if(p.battleship->getHullpoints()<= 0){
                            cout<< "Enemy "<< p.battleship->getName()<< " Sunk!"<< endl;
                        }
                    }
                    else if(p.fleet[x][y] == 'D'){
                        p.destroyership->hit();
                        if(p.destroyership->getHullpoints()<= 0){
                            cout<< "Enemy "<< p.destroyership->getName()<< " Sunk!"<< endl;
                        }
                    }
                    else if (p.fleet[x][y] == 'P'){
                        p.ptboatship->hit();
                        if(p.ptboatship->getHullpoints()<= 0){
                            cout<< "Enemy "<< p.ptboatship->getName()<< " Sunk!"<< endl;
                        }
                    }
                }

                else{
                    enemy[x][y] = 'O';
                    cout<< "Miss" << endl;
                }
    }
    // post-condtion: it printed miss or Hits message and place X or O in enemy





    // If Yes, ask the user to input shot coordinates for the center of the blast. if Y the do blast
    // Allows the current player to shot a number of times equal to their current ship total.
    // Ships should display their fireWeapons message based 
    // on the order indicated by the client above every turn they shoot.
    // precondition :  fleet array should be define and declared
    //                 enemy array should be define and declared  
    void Player::fire(Player& p){
        cout<< "You want to fire First thing to do : (Y/N) : ";
        char c;
        cin >> c;
        if(c == 'Y' || c == 'y'){
            cout<< "Enter coordinates for center of blast " << endl;
            cout<< "Enter x coordinate : ";
            int x ;
            cin >> x;
            cout<< "Enter y coordinate : ";
            int y;
            cin>> y;
            if(checkNuke(x, y)){
                cout<< "Check Nuke "<< endl;
                if(p.tacNuke == true && p.ships > 3 && p.submarineship->getHullpoints() > 0 || p.carriership->getHullpoints() > 3){
                        detonate(x, y, p);
                        cout<< "Detonated " << endl;
                        p.tacNuke = false;
                }
            }
        }
        else{
            cout<< "Stating nuke is on standby "<< endl;
        }

        if(submarineship->getHullpoints()> 0){
            cout<< "\n\n*** Player "<< p.getname() << " is playing now *******"<< endl;
            cout<< "Enter Location to shoot in player "<< endl;
            cout<< "Enter row : ";
            int r;
            cin>> r;
            cout<< "Enter col: ";
            int co;
            cin>> co;
            char direct;
            cout<< "Enter direction horizontal or verticle (h or v) : ";
            cin>> direct;

            if(validPlacement('S', r,co, direct)){
                markResult(r, co, p);
                submarineship->fireWeapons();
            }
        }
        if(carriership->getHullpoints()> 0){
            cout<< "\n\n*** Player "<< p.getname() << " is playing now *******"<< endl;
            cout<< "Enter Location to shoot in player "<< endl;
            cout<< "Enter row : ";
            int r;
            cin>> r;
            cout<< "Enter col: ";
            int co;
            cin>> co;
            char direct;
            cout<< "Enter direction horizontal or verticle (h or v) : ";
            cin>> direct;

            if(validPlacement('C', r,co, direct)){
                markResult(r, co, p);
                carriership->fireWeapons();
            }
        }
        if(destroyership->getHullpoints()> 0){
            cout<< "\n\n*** Player "<< p.getname() << " is playing now *******"<< endl;
            cout<< "Enter Location to shoot in player "<< endl;
            cout<< "Enter row : ";
            int r;
            cin>> r;
            cout<< "Enter col: ";
            int co;
            cin>> co;
            char direct;
            cout<< "Enter direction horizontal or verticle (h or v) : ";
            cin>> direct;

            if(validPlacement('D', r,co, direct)){
                markResult(r, co, p);
                destroyership->fireWeapons();
            }
        }
        if(ptboatship->getHullpoints()> 0){
            cout<< "\n\n*** Player "<< p.getname() << " is playing now *******"<< endl;
            cout<< "Enter Location to shoot in player "<< endl;
            cout<< "Enter row : ";
            int r;
            cin>> r;
            cout<< "Enter col: ";
            int co;
            cin>> co;
            char direct;
            cout<< "Enter direction horizontal or verticle (h or v) : ";
            cin>> direct;

            if(validPlacement('P', r,co, direct)){
                markResult(r, co, p);
                ptboatship->fireWeapons();
            }
        }
        if(battleship->getHullpoints()> 0){
            cout<< "\n\n*** Player "<< p.getname() << " is playing now *******"<< endl;
            cout<< "Enter Location to shoot in player "<< endl;
            cout<< "Enter row : ";
            int r;
            cin>> r;
            cout<< "Enter col: ";
            int co;
            cin>> co;
            char direct;
            cout<< "Enter direction horizontal or verticle (h or v) : ";
            cin>> direct;

            if(validPlacement('B', r,co, direct)){
                markResult(r, co, p);
                battleship->fireWeapons();
            }
        }

        
    }
    // post-condition : Allowed the current player to shot a number of times equal to their current ship total.
    //                  Ships displayed their fireWeapons message based 



    // if the current plyer’s score is equal to 170 print a message saying
    // o “~~~Player playerName is Victorious!~~~”
    // pre-condtion: Score should be define before 
    bool Player::checkIfWon(){
        if(score >= 170){
            cout<< "~~~Player " << this->name <<" is Victorious!~~~"<< endl;
            cout<< "Score : " << score<< endl;
            return true;
        }
        return false;
    }
    // post-condtion : return ture if score is greater than 170
    


    //  Checks each of the 11 blast locations based on the user input x and y coordinates in the pattern seen above. 
    //  Call the markResult method only if the current player’s enemy board is unmarked at that location.
    // precondtion: value of x and y should be 0-9
    void Player::detonate(int x, int y, Player& p){
        if(enemy[x-1][y-1]=' '){
            markResult(x, y, p);
        }
        if(enemy[x-2][y-2]=' '){
            markResult(x, y, p);
        }
        if(enemy[x+1][y+1]=' '){
            markResult(x, y, p);
        }
        if(enemy[x+2][y+2]=' '){
            markResult(x, y, p);
        }
        if(enemy[x-2][y]=' '){
            markResult(x, y, p);
        }
        if(enemy[x+2][y]=' '){
            markResult(x, y, p);
        }
        if(enemy[x-1][y+1]=' '){
            markResult(x, y, p);
        }
        if(enemy[x-2][y+2]=' '){
            markResult(x, y, p);
        }
        if(enemy[x+1][y-1]=' '){
            markResult(x, y, p);
        }
        if(enemy[x+2][y-2]=' '){
            markResult(x, y, p);
        }
        if(enemy[x][y]=' '){
            markResult(x, y, p);
        }
    }
    // post-condition : mark result at specific postion and also increment score on board 



    // Checks that all positions of the blast are within the confines of the playing board.
     // precondtion: value of x and y should be 0-9
    bool Player::checkNuke(int x, int y){
        if(x-2 >= 0 && x+2 <= 9 && y-2 >= 0 && y+2 <= 9){
            return true;
        }
        return false;
    }
    // returned true of x and y is centered
