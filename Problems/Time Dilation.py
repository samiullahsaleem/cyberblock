'''Write statements to compute and display the duration t’ of t years in a spaceship moving at
speed v. In following formula, c is a constant (299,792,458 m/s) and values of t and v should be
taken by user.
𝑡′ = 𝑡(1/((1-v^2/c^2)^0.5))
'''
# Code
def time(t, v):
    c = 299792458
    td = t/((1 - ((v*v) / (c*c))) ** 0.5)
    return td

def main():
    t = float(input('Time interval(s): '))
    v = float(input("Observer's Velocity(m/s): "))
    td = time(t, v)
    print(td)
main()