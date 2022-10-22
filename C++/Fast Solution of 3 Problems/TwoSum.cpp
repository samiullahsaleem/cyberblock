#include <iostream>
#include <vector>

using namespace std;
 


class Solution {
public:
    vector<int> twoSum(vector<int>& nums, int target) {
        vector<int> re;
        int i =0, j=nums.size()-1;
        while(i<j){
            if(nums[i]+ nums[j]< target){
                i++;
            }
            else if(nums[i] + nums[j]> target){
                j--;
            }
            else if(nums[i] + nums[j]== target){
                re.push_back(i);
                re.push_back(j);
                return re;
            }
        }
        return re;
        
    }
};


int main(){

    Solution s;
    vector<int> ss{2,7,11,15};
    vector<int> re = s.twoSum(ss, 9);
    for(int i=0; i<2; i++){
        cout<< re[i] << " ";
    }
    return 0;
}