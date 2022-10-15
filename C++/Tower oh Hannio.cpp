#include<iostream>
using namespace std;
int destinationCount(int array[], int numberOfElements)
{
    int count = 0, i;

    for (i = 1; i <= numberOfElements; ++i)
        if (array[i] == 3)
            ++count;

    return count;
}

int main(void)
{
    int numberOfDisks, i, smallestDir, moveCount = 0;
    bool everyOtherMove = false;
    int rodFrom, rodTo, disk;
    int topDisk[4];
    int temp;

    cout<<"Tower of Hanoi puzzle"<<endl;

    cout << "number of disks?"<<endl;
        cin >> numberOfDisks;
        // for 5 disk
     //   int value = numberOfDisks + 1;
        int rod[6];

    // all disks start on rod 1

    for (i = 1; i <= numberOfDisks; ++i)
        rod[i] = 1;

    // set direction to move smallest disk

    if ((numberOfDisks & 1) == 0)
        smallestDir = 1;
    else
        smallestDir = -1;

    cout << "\nsolution\n\n";

    do {

        ++moveCount;

        if (!everyOtherMove) {

            // move smallest disk

            rodFrom = rod[1];

            rodTo = rodFrom + smallestDir;
            if (rodTo > 3)
                rodTo = 1;
            if (rodTo < 1)
                rodTo = 3;

            disk = 1;

        }
        else {

            // make only valid move not involving the smallest disk

            // find disk at the top of each rod

            for (i = 1; i <= 3; ++i)
                topDisk[i] = numberOfDisks + 1;

            for (i = numberOfDisks; i >= 1; --i)
                topDisk[rod[i]] = i;

            // find which disk to move

            switch (rod[1])
            {
            case 1:
                rodFrom = 2;
                rodTo = 3;
                break;
            case 2:
                rodFrom = 1;
                rodTo = 3;
                break;
            case 3:
                rodFrom = 1;
                rodTo = 2;
                break;
            default:
                printf("error");
                break;
            }

            if (topDisk[rodFrom] > topDisk[rodTo]) {
                // swap values
                temp = rodFrom;
                rodFrom = rodTo;
                rodTo = temp;
            }

            disk = topDisk[rodFrom];

        }

        cout << moveCount +" disk "<<disk<<" rods "<<(rodFrom + 64)<<" to rod "<< (rodTo + 64)<<endl;

            // move disk

            rod[disk] = rodTo;

            // toggle everyOtherMove

            everyOtherMove = !everyOtherMove;

    } while (destinationCount(rod, numberOfDisks) != numberOfDisks);

    return 0;
}


