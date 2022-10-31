def Array_averages():
    array = []
    index, max_sum, num_of_student = 0, 0, 0
    print("R#  S1  S2  S3 Total")
    i = 0
    while i < 5:
        print(i + 1, end="\t")
        arr = []
        sum = 0
        for j in range(3):
            val = int(input())
            sum += val
            print(val, end="\t")
            arr.append(val)
        print(sum)
        if sum > max_sum:
            max_sum = sum
            num_of_student = i
        array.append(arr)
        i += 1
    print("Av:", end="")
    highest_avg = 0
    for j in range(len(array[0])):
        sum = 0
        for i in range(len(array)):
            sum += array[i][j]
            if sum/len(array) > highest_avg:
                highest_avg = sum/len(array)
                index = j
        print(sum/len(array), end=" ")
    print()
    print(f"Student {num_of_student + 1} has maximum marks.")
    print(f"Subject {index+1} has best result.")


Array_averages()