
""" This problem basically compare the unsorted list to its sorted version and
     gives the left index where values start to swap and gives the right index 
    where values ends the swap"""

import copy
import random


def bubble_sort(a):
    for i in range(len(a) - 1):
        for j in range(len(a) - 1):
            if a[j] > a[j+1]:
                temp = a[j]
                a[j] = a[j + 1]
                a[j + 1] = temp
    return a


def window(arr):
    left, right = None, None
    array = copy.copy(arr)
    sorted_array = bubble_sort(arr)
    print(array)
    print(sorted_array)
    for i in range(len(array)):
        if array[i] != sorted_array[i] and left is None:
            left = i
        elif array[i] != sorted_array[i]:
            right = i
    return left, right


print(window([random.randint(1, 99) for i in range(10)]))