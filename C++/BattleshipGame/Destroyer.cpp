#include <iostream>
// #include "Ship.h"
#include "Destroyer.h"
using namespace std;

// it prints appropiate message when weapon is fired
// pre-condition :  it sould be define in .h file 
void Destroyer::fireWeapons(){
    cout<< "Launching depthcharges! Boom goes the dynamite!"<< endl;
}
// post-condition: it would print message, nothing will be returned 


// constructor will be called when Destroyer ship's object is make 
// pre-condition :  it sould be define in .h file 
Destroyer::Destroyer(){
    setHullpoints(3);
    setName("Destroyer");
    setPlaced(false);
}
// post-condition: it assigned values to private members and would return nothing

// before destroying object this destructor is called
// pre-condition :  it sould be define in .h file 
Destroyer::~Destroyer(){
    setHullpoints(-1);
    setName(" ");
    setPlaced(false);
}
// post-condition: it again assigned values to private members and would return nothing

