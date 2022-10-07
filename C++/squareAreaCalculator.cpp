/* program to calculate the area of square */
#include <iostream>
using namespace std;

int main() //function main begins program execution
{
   int square_area, square_side;

   cout << "Enter the side of square:";
   cin >> square_side;

   square_area = square_side * square_side;

   cout << "Area of Square: " << square_area << endl;
   return 0;
} 
