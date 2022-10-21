#include <iostream>
using namespace std;


class Solution {
public:
    int reverse(int x) {
        bool neg  = false;
        if(x<0){
            x = x * -1;
            neg= true;
        }
        int num =0;
        while(x>0){
            int n = x%10;
            num *= 10;
            num += n;
            x/=10;
        }
        if(neg){
            num = num *-1;
        }
        return num;
    }
};

int main(){
    Solution s;
    cout<< s.reverse(345);

    return 0;
}