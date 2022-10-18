def check_sum(num):
    d = [9, 10, 23, 15, 47, 2, 29, 36, 58, 14, 30, 16, 90, 40, 83, 1,1]
    for i in range(len(d)):
        for j in range(len(d)):
            if d[i] + d[j] == num and i != j:
                return (d[i], d[j])
    return ('The pair is not found')

def main():
    # gives the pair that is the sum of the number present in the list that you enter
    numb = int(input("Enter the number you want to check the pair: "))
    print(check_sum(numb))

main()
