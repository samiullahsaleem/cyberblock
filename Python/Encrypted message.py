def highest_count(sent):
    max_num, index = 0, 0
    for i in range(len(sent)):
        Count = 0
        for words in sent[i]:
            Count += 1
        if max_num < Count:
            max_num = Count
            index = i
    return index


def corresponding_number(char):
    return ord(char) - ord("A") + 1


def corresponding_character(num):
    if num == 1:
        return "A"
    elif num == 2:
        return "B"
    elif num == 3:
        return "C"
    elif num == 4:
        return "D"
    elif num == 5:
        return "E"
    elif num == 6:
        return "F"
    elif num == 7:
        return "G"
    elif num == 8:
        return "H"
    elif num == 9:
        return "I"
    elif num == 10:
        return "J"
    elif num == 11:
        return "K"
    elif num == 12:
        return "L"
    elif num == 13:
        return "M"
    elif num == 14:
        return "N"
    elif num == 15:
        return "O"
    elif num == 16:
        return "P"
    elif num == 17:
        return "Q"
    elif num == 18:
        return "R"
    elif num == 19:
        return "S"
    elif num == 20:
        return "T"
    elif num == 21:
        return "U"
    elif num == 22:
        return "V"
    elif num == 23:
        return "W"
    elif num == 24:
        return "X"
    elif num == 25:
        return "Y"
    elif num == 26:
        return "Z"


def main():
    Final_ans = []
    num = int(input())
    for i in range(num):
        m = input()
        message = m.split(" ")
        index = highest_count(message)
        string = message[index]
        k = 0
        ans = ""
        j = 0
        while j < len(m):
            if k == len(string):
                k = 0
            if m[j] != " ":
                Original_string_chr_num = corresponding_number(m[j])
                highest_string_chr_num = corresponding_number(string[k])
                val = Original_string_chr_num + highest_string_chr_num
                if val > 26:
                    val = val - 26
                ans += corresponding_character(val)
            elif m[j] == " ":
                ans += " "
                k -= 1
            j += 1
            k += 1
        Final_ans.append(ans)
    for strings in Final_ans:
        print(strings)


main()
