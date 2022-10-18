
# Complete the 'pangrams' function below.
#
# The function is expected to return a STRING.
# The function accepts STRING s as parameter.
#

def pangrams(s):
    #Solving that problem through counting sort
    count_Alphas = [0 for i in range(26)]
    s = s.lower()
    for i in range(len(s)):
        if s[i] != " ":
            index = ord(s[i]) - 97
            count_Alphas[index] += 1
    
    if 0 in count_Alphas:
        return "not pangram"
    return "pangram"

def get_Every_Alpha(ascii):
    list = []
    for i in range(ascii,ascii+26,1):
        list.append(chr(i))
    return list       

if __name__ == '__main__':
    s = input()
    result = pangrams(s)
    print(result)
