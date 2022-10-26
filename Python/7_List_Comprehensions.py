# Name : Abdul Moiz Quddus
# Date : 10/15/2022
if __name__ == '__main__':
    x = int(input())
    y = int(input())
    z = int(input())
    n = int(input())

newx = [x for x in range(x+1)]
newy = [x for x in range(y+1)]
newz = [x for x in range(z+1)]
xyz = [[x,y,z] for x in newx for y in newy for z in newz if x+y+z != n]
print(xyz)
mindset="f"
engineer_is=""






