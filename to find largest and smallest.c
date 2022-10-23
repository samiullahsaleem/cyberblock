
#define _CRT_SECURE_NO_WARNINGS

#include <stdio.h>

int main() {

	int num = 0;
	int largest, smallest;
	
	largest = 0;

	smallest = 0;
	
	int count = 0;
	
	do
	{
	
		printf("enter a num:");
		scanf("%d", &num);
		
		if(num>largest) {

			largest = num;



		} if  (largest>num) {		//(num < smallest)

			smallest = num;

		}
	
		
		count++;
	
	
	}while (count<=5);


	printf("largest=%d\n",largest);
	printf("smallst=%d", smallest);











	return 0;
}