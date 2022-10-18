#include <iostream>
#include "Ship.h"
using namespace std;


// increment hullpoints of ship
void Ship::hit(){
    hullpoints++;
}
// set name to ship
void Ship::setName(string n){
    name = n;
}
// set hullpoints to ship
void Ship::setHullpoints(int point){
    hullpoints = point;
}
// set placed to ship
void Ship::setPlaced(bool p){
    placed = p;
}
// get name of ship
string Ship::getName(){
    return name;
}
// get hullpoints of ship
int Ship::getHullpoints(){
    return hullpoints;
}
// get status of placed
bool Ship::getPlaced(){
    return placed;
}
// constructor for ship
Ship::Ship(){
    hullpoints=0;
    name = "Defualt";
    placed = false;
}
// destructor for ship
Ship::~Ship(){

}
