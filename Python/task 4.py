def main():
    f =  open("practice14(4.1).txt","r")
    w = open("practice14(4.2).txt","w")

    for i in range(1000):
        a = f.read()
        file = a.replace(" ","\n")
        w.write(file)
    f.close()
    w.close()
main()
