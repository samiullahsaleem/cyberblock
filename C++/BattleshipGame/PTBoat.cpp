#include <iostream>
// #include "Ship.h"
#include "PTBoat.h"
using namespace std;

// it prints appropiate message when weapon is fired
// pre-condition :  it sould be define in .h file 
void PTBoat::fireWeapons(){
    cout<< "Full Speed Ahead! Firing torpedos!"<< endl;
}
// post-condition: it print message, nothing will be returned 

// constructor will be called when Battle ship's object is make 
// pre-condition :  it sould be define in .h file 
PTBoat::PTBoat(){
    setHullpoints(2);
    setName("PTBoat");
    setPlaced(false);
}
// post-condition: it assigned values to private members and would return nothing

// before destroying object this destructor is called
// pre-condition :  it sould be define in .h file 
PTBoat::~PTBoat(){
    setHullpoints(-1);
    setName(" ");
    setPlaced(false);
}
// post-condition: it again assigned values to private members and would return nothing

