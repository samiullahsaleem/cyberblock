def prefixxxSum(arr, n, prefixSum):

    prefixSum[0] = arr[0]
    for i in range(1, n):
        prefixSum[i] = prefixSum[i - 1] + arr[i]

arr =[10, 4, 16, 20 ]
n = len(arr)
prefixSum = [0 for i in range(n + 1)]
prefixxxSum(arr, n, prefixSum)
for i in range(n):
    print(prefixSum[i], " ", end ="")

#This code reduces the Time Complexity as the Sum is already pre-computed. 
#Also this can be used in different approaches along with Hashing.