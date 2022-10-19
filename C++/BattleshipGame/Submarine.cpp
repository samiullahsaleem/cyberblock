#include <iostream>
// #include "Ship.h"
#include "Submarine.h"
using namespace std;

// it prints appropiate message when weapon is fired
// pre-condition :  it sould be define in .h file 
void Submarine::fireWeapons(){
    cout<< "Bearing, set, match: Firing torpedos!"<< endl;
}


// constructor will be called when Battle ship's object is make 
// pre-condition :  it sould be define in .h file 
Submarine::Submarine(){
    setHullpoints(3);
    setName("Submarine");
    setPlaced(false);
}
// post-condition: it assigned values to private members and would return nothing


// before destroying object this destructor is called
// pre-condition :  it sould be define in .h file 
Submarine::~Submarine(){
    setHullpoints(-1);
    setName(" ");
    setPlaced(false);
}
// post-condition: it again assigned values to private members and would return nothing

