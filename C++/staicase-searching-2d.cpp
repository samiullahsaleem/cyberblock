class Solution {
public:
    bool searchMatrix(vector<vector<int>>& matrix, int target) {
        int n = matrix.size();
        int i = 0;
        int j = matrix[0].size() - 1;

        while(i < n && j >= 0)
        {
            if(matrix[i][j] == target)
                return true;
            if(target < matrix[i][j] )
                --j;
            else
                ++i;
        }
        return false;
    }
};