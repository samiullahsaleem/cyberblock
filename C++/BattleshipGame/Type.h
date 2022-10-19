// Will be discussed in the pointer lecture
#include <iostream>
#include "Player.h"
using namespace std;

    // pre-condition :  file player.h should be included 
    typedef Player::shipMutator(){
        ships--;
    }
    // post-condition: it decremented number of ships

    // pre-condition :  file player.h should be included 
    typedef Player::getname(){
        return name;
    }
    // post-condition: it returned string value name

    // pre-condition :  file player.h should be included 
    typedef * Player::getfleet(){
        return reinterpret_cast<char *>(fleet);
    }
    // post-condition :  it returned 2D array of type int 