
#pragma once
#ifndef PTBoat_H
#define PTBoat_H

#include <iostream>
#include "Ship.h"
using namespace std;

// precondition: there should be a ship.h file 
class PTBoat: public Ship{
public:
    // pre-condition :  class ship should be publically inherited 
    PTBoat();
    // post-condtion:  values of data members gone assigned


    // pre-condition :  class ship should be publically inherited 
    ~PTBoat();
    // post-condtion:  values of data members gone de-assigned

    // pre-condition :  class ship should be publically inherited 
    void fireWeapons();
    // post-condition: it would print message, nothing will be returned 

};
// post-condition : class didn't define own private members while using from Ship class
#endif