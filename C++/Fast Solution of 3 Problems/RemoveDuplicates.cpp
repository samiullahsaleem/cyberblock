#include <iostream>
#include <vector>
using namespace std;


class Solution {
public:
    int removeDuplicates(vector<int>& nums) {
        int current = 1;
        int k =0;
        int size =nums.size();
        for(int i =0; i< size && i<current; i++){
            if(nums[k] != nums[current]){
                k++;
                nums[k] = nums[current];
                current++;
            }
            else {
                current++;
            }
        }
        for(int i =0; i< k; i++){
            cout<< nums[i] << " ";
            
        }
        return k;
    }
};

// 1 2 3 3 4 4 4 5 5 5      k=1, current=2
// 1 2 3 3 4 4 4 5 5 5      k=2, current=3
// 1 2 3 3 4 4 4 5 5 5      k=2, current=3
// 1 2 3 

int main(){
    Solution s;
    vector<int> ss{1,2,3,3,4,4,4,5,5,5};
    s.removeDuplicates(ss);

    return 0;
}

// 1 2 3 3 4 4 4 5 5 5
// 1 2 3 3 4 4 4 5 5 5
// 1 2 3 4 3 4 4 5 5 5   k = 3 
// 1 2 3 
// 1 2 3 3 