# implement quick sort on an array with random inputs find the running time for different input sizes (10k ... 50k)
import time
import random

def partition(arr, l, h):
    pivot, i, j = arr[l], l+1, h
    while i <= j:
        if arr[i] > pivot and arr[j] < pivot:
            arr[i], arr[j] = arr[j], arr[i]
        if arr[i] <= pivot:
            i += 1
        if arr[j] >= pivot:
            j -= 1
    arr[l], arr[j] = arr[j], arr[l]
    return j


def quicksort(arr, l, h):
    if l < h:
        pi = partition(arr, l, h)
        quicksort(arr, l, pi-1)
        quicksort(arr, pi+1, h)


l = []
a = int(input("Enter the size of array: "))

for i in range(a):
    n = random.randint(1, 100)
    l.append(n)

start = time.time()
quicksort(l, 0, a-1)
end = time.time()
t = end-start
print(f"quicksort running time: {t:.4f}")
