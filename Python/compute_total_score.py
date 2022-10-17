def find_total(my_numbers):
    x= 0
    for i in my_numbers:
        if i % 2 == 0 and i != 8:
            x+=1
        elif i % 2 != 0:
            x+=3
        elif i % 2 == 0 and i == 8: 
            x+=5
    return x
compute_total = find_total(list(map(int,input("\nEnter the numbers : ").strip().split(','))))
print(compute_total)