def encrip(mess):
    temp = mess.split()
    lar = temp[0]
    for val in temp:
        if len(val) > len(lar):
           lar = val
    layer = ""
    i = 0
    for ch in mess:
        if i >= len(lar):
            i = 0
        if ch == " ":
            layer = layer + " "
        else:
            layer = layer + lar[i]
            i = i + 1
    #layer has been made
    fnl = ""
    for i in range(len(layer)):
        if layer[i] == " ":
            fnl = fnl + " "
        else:
            a = (ord(layer[i]) - ord("A"))
            b = (ord(mess[i]) - ord("A"))
            c = a+b+1
            if c >= 26:
                c = c - 26
            fnl = fnl + chr(c+ord("A"))
    return fnl
def main():
    print(encrip("THE BEST IS YET TO BE"))
    print(encrip("WRITE IT ON YOUR HEART THAT EVERY DAY IS THE BEST DAY IN THE YEAR"))
    print(encrip("A POSITIVE MINDSET BRINGS POSITIVE THINGS"))
main()
