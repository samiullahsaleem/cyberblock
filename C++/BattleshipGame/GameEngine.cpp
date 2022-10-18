#include <iostream>
#include "Player.h"
using namespace std;


int main(){
    Player p1("P1");
    Player p2("P2");

    cout<< "*****  For Player " << p1.getname()<< "******" << endl;
    p1.placeShips();
    cout<< "*****  For Player " << p1.getname() << "******"<< endl;
    p1.placeShips();
    cout<< "*****  For Player " << p1.getname() << "******"<< endl;
    p1.placeShips();
    cout<< "*****  *****  For Player " << p1.getname() << "******"<< endl;
    p1.placeShips();
    cout<< "For Player " << p1.getname() << "******"<< endl;
    p1.placeShips();
    cout<< "Player 2" << endl;
    p2.placeShips();
    cout<< "*****  For Player " << p2.getname() << "******"<< endl;
    p2.placeShips();
    cout<< "*****  For Player " << p2.getname() << "******"<< endl;
    p2.placeShips();
    cout<< "*****  For Player " << p2.getname() << "******"<< endl;
    p2.placeShips();
    cout<< "*****  For Player " << p2.getname() << "******"<< endl;
    p2.placeShips();

    Player current = p1;

    while(!p1.checkIfWon() || !p2.checkIfWon()){
        if(current.getname() == "P1"){
            cout<< "*********** Player  "<< current.getname()<< " is playing ****************" << endl;
            char *arr = p1.getEnemy();
            cout<< "Score : " << p1.getScore() << endl;
             cout<< "\nPlayer "<< current.getname()<< "'s enemy placement : " << endl;
             cout<< "   A   B   C   D   E   F   G   H   I   J"<< endl;
            for(int i=0; i< 10; i++){
                cout<< "---------------------------------------\n";
                cout << i<< " ";
                for(int j=0; j< 10; j++){
                    cout << p1.getEnemyAt(i, j)<< " | ";
                }
                cout<< endl;
            }
            p1.fire(p2);
            if(p1.checkIfWon()){
                cout<< "P1 won " << endl;
                return 0;
            }
            else if(!p1.checkIfWon()){
                cout<< "No one is Winning Yet now " << endl;
            }
        }
        else{
            cout<< "\n\n************* Player "<< current.getname() << " is playing now *************"<< endl;
            char *arr2 =  p2.getEnemy();
            cout<< "\nPlayer "<< current.getname()<< "'s enemy placement : " << endl;
            cout<< "Score : " << p2.getScore() << endl;
            for(int i=0; i< 10; i++){
                cout<< "---------------------------------------\n";
                for(int j=0; j< 10; j++){
                    cout<<  *(arr2 + (i * 10) + j) << " | ";
                }
                cout<< endl;
            }
            p2.fire(p1);
            if(p2.checkIfWon()){
                cout<< "P2 won " << endl;
                return 0;
            }
            else if(!p2.checkIfWon()){
                cout<< "No one is Winning Yet now " << endl;
            }
        }
        if(!current.checkIfWon()){
            if(current.getname() == "P1"){
                current = p2;
            }else{
                current = p1;
            }
        }
    }

    



    return 0;
}