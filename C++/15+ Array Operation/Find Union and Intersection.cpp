How to find Union and Intersection of the arrays

Alogrithm Union (arr1[], arr2[])
For union of two arrays: follow the following procedure

1. Use two indexe variables i and j, inital values i=0, j=0;
2 if arr1[i] is smaller than arr2[j] then print arr2[i] and increment i
3. if arr2[j] is smaller than arr1[i] then print arr2[j] and increment j;
4. if both are same then print any of them and increment both i and j
5 print remaining element of the large array
Sorce Code
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
void printUnion(int arr1[], int arr2[], int m, int n)
{
	int i = 0, j = 0;
	while (i < m && j < n) {
		if (arr1[i] < arr2[j])
			cout << arr1[i++] << " ";

		else if (arr2[j] < arr1[i])
			cout << arr2[j++] << " ";

		else {    	// it means arr1 == arr2 
			cout << arr2[j++] << " ";
			i++;
		}
	}

	/* Print remaining elements of the larger array */
	while (i < m)
		cout << arr1[i++] << " ";

	while (j < n)
		cout << arr2[j++] << " ";
}



-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Algorithm to find Interaction :
Use two index variables i and j, initial values i = 0, j = 0.
If arr1[i] is smaller than arr2[j] then increment i.
If arr1[i] is greater than arr2[j] then increment j.
If both are same then print any of them and increment both i and j.

Source Code
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
void printIntersection(int arr1[], int arr2[], int m, int n)
{
	int i = 0, j = 0;
	while (i < m && j < n) {
		if (arr1[i] < arr2[j])
			i++;
		else if (arr2[j] < arr1[i])
			j++;
		else /* if arr1[i] == arr2[j] */
		{
			cout << arr2[j] << " ";
			i++;
			j++;
		}
	}
}
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Menu Driven Program For Both Union and Intersection:
Just take the size and elments of both sets and call the union and intersection functions.


if we want to use static size we can code like:
//     int arr1[]={1, 2, 4, 5,6};
//     int arr2[]={2, 3, 5, 7};
//     int m=sizeof(arr1)/sizeof(arr1[0]);
//      int n=sizeof(arr2)/sizeof(arr2[0]);



