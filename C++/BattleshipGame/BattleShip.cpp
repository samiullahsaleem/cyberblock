#include <iostream>
#include "BattleShip.h"
using namespace std;

// it prints appropiate message when weapon is fired

// pre-condition :  it sould be define in .h file 
void Battleship::fireWeapons(){
    cout<< "Firing 16inches guns! This is gonna be loud!"<< endl;
}
// post-condition: it would print message, nothing will be returned 


// constructor will be called when Battle ship's object is make 
// pre-condition : it should be define in .h file, 
Battleship::Battleship(){
    setHullpoints(4);
    setName("Battleship");
    setPlaced(false);
}
// post-condition: it would assign values to private members and would return nothing

// before destroying object this destructor is called
// pre-condition : it should be define in .h file, 
Battleship::~Battleship(){
    setHullpoints(-1);
    setName(" ");
    setPlaced(false);
}
// post-condition: it would again assign values to private members and would return nothing