
#pragma once
#ifndef CARRIER_H
#define CARRIER_H

#include <iostream>
#include "Ship.h"

using namespace std;
// precondition: there should be a ship.h file 
class Carrier: public Ship{
public:
    // pre-condition :  class ship should be publically inherited 
    Carrier();
    // post-condtion:  values of data members gone assigned


    // pre-condition :  class ship should be publically inherited 
    ~Carrier();
    // post-condtion:  values of data members gone de-assigned

    // pre-condition :  class ship should be publically inherited 
    void fireWeapons();
    // post-condition: it would print message, nothing will be returned 
};
// post-condition : class didn't define own private members while using from Ship class
#endif