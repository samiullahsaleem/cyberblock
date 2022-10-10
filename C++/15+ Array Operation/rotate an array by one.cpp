Write a Program to cyclically rotate by one:

It basically means that if we have an array of 5 elments

1 2 3 4 5
store the 5 in 0 index 1 in 1 2 in 2 3 in 3 4 in 4 5 in 5

Alogrithm for the  program:

1. Store last element in a variable say x;
2. Shift all elements one position ahead;
3. Replace first element of array with x

Source Code

1. Store the last index in x
	int x= arr[n-1];
2. start a loop from 1index to n-1 and decrement --
		for(i=n-1; i>0; i--)
3. push the element by one by one
	arr[i] = arr[i-1];
4. store x in 0 index
	arr[0] =x;
------------------------------------------------------------------------------------------
void rotate(int arr[], int n)
{
	int x= arr[n-1];
	int i;
	for(i=n-1; i>0; i--)
	arr[i] = arr[i-1];
	arr[0]=x;

}

int main(){

	int arr[]={1, 2, 3,4, 5}, i;
	int n = sizeof(arr)/sizeof(arr[0]);
	cout<<"Given Array is"<<endl;
	for(i=0; i<n; i++)
	cout<<arr[i]<<" ";
	rotate(arr,n);

	cout<<"updated Array is:"<<endl;
	for(i=0;i<n; i++)
	cout<<arr[i];

	return 0;
}