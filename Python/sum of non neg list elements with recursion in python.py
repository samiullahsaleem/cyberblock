import random as r
def main():
    list = [r.randint(-50, 50) for i in range(10)]
    print(list)
    print(sum_positive(list))

def sum_positive(arr, i=0, sum=0):
    if i == len(arr):
        return sum
    elif arr[i] >= 0:
        sum += arr[i]
    return sum_positive(arr, i+1, sum)

if __name__ == "__main__":
    main()

