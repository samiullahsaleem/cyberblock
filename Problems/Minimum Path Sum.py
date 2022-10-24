# Given a m x n grid filled with non-negative numbers, find a path from top left to bottom right, which minimizes the sum of all #numbers along its path.

# Note: You can only move either down or right at any point in time.


# Input: grid = [[1,3,1],[1,5,1],[4,2,1]]
# Output: 7
# Explanation: Because the path 1 → 3 → 1 → 1 → 1 minimizes the sum.

# https://leetcode.com/problems/minimum-path-sum/description/

def minPathSum(self, grid: List[List[int]]) -> int:
	rows = len(grid)
	cols = len(grid[0])

	dp = grid

	for i in range(1,cols):
	    dp[0][i] += dp[0][i-1]

	for i in range(1,rows):
	    dp[i][0] += dp[i-1][0]
	    
	for i in range(1,rows):
	    for j in range(1,cols):
		dp[i][j] += min(dp[i-1][j],dp[i][j-1])
		
	return dp[rows-1][cols-1]
