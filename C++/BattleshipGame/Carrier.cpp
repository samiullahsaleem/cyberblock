#include <iostream>
#include "Carrier.h"
using namespace std;

// it prints appropiate message when weapon is fired
// pre-condition :  it sould be define in .h file 
void Carrier::fireWeapons(){
    cout<< "Luanching planes for airstrike!"<< endl;
}
// post-condition: it would print message, nothing will be returned 


// constructor will be called when Carrier ship's object is make 
// pre-condition :  it sould be define in .h file 
Carrier::Carrier(){
    setHullpoints(5);
    setName("Carrier");
    setPlaced(false);
}
// post-condition: it would assign values to private members and would return nothing

// before destroying object this destructor is called
// pre-condition :  it sould be define in .h file 
Carrier::~Carrier(){
    setHullpoints(-1);
    setName(" ");
    setPlaced(false);
}
// post-condition: it would again assign values to private members and would return nothing