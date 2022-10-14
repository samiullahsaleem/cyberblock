#include<iostream>
using namespace std;
class TabulaRecta
{
private:
	char alphabets[26][26];
public:
	TabulaRecta();
	void print();
	char getChar(int i, int j);//for getting required char
	int getI(int j, char a); //for getting required index
};