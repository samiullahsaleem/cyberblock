
#pragma once
#ifndef SHIP_H
#define SHIP_H
#include <iostream>
using namespace std;


class Ship{
private:
    string name;
    int hullpoints;
    bool placed;
public:

    Ship();
    ~Ship();

    // pre-condition: string should be pass, with your ship name
    void setName(string n);
    // post-condition: passed value gone assign to member function of class called name 


    // pre-condition: int should be pass, with your hull points of a ship
    void setHullpoints(int point);
    // post-condition: passed value gone assign to member function of class called hullpoints

    // pre-condition: boolean should be pass (true or false), to check whether ship is gone place or not 
    void setPlaced(bool p);
    // post-condition: passed value gone assign to member function of class called place 

    // pre-condtion: Value to data member of class named as name should be assign to get name of ship
    string getName();
    // post-condition: returned class member name of type string 

     // pre-condtion: Value to data member of class named as hullpoints should be assign to get hullpoints of ship
    int getHullpoints();
    // post-condition: returned class member hullpoints of type int  

    // pre-condtion: Value to data member of class named as place should be assign to get information whether 
    //                 it gone place or not  of 
    bool getPlaced();
    // post-condition: returned class member place of type bool

    // pre-condition: hullpoints should be define during constructor calling or through setter
    void hit();
    // post-condition: it incremented the value of hullpoints by 1

    // pre-condition: it would not accept any type of argumented value
    void fireWeapons(){ }
    // post-condtion: it is not implemented in class ship while we declare it 
};
#endif