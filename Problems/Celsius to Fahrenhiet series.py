# Celsius to Fahrenhiet series
# Code
def TempConvt(C):
    F = (9/5)*C + 32
    F = round (F , 1)
    return F


def main():
    C = 1
    while C <= 10:
        F = TempConvt(C)
        print(C, "°C =", F, "°F", )
        C = C + 1


main()