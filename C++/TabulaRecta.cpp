#include"TabulaRecta.h"
TabulaRecta::TabulaRecta()
{
	//initializing alphabets array with vignere cipher
	for (int i = 0; i < 26; i++)
	{
		int k = i;
		for (int j = 0; j < 26; j++)
		{
			alphabets[i][j] = 'A' + k;
			k++;
			if (k == 26)
				k = 0;
		}
	}
}
void TabulaRecta :: print()
{
	for (int i = 0; i < 26; i++)
	{
		for (int j = 0; j < 26; j++)
			cout << alphabets[i][j] << " ";
		cout << endl;
	}
}
char TabulaRecta :: getChar(int i, int j)
{
	return alphabets[i][j];
}
int TabulaRecta :: getI(int j, char a)
{
	if (a >= 97 && a <= 122) //converting lower case to upper case for ease
		a = a - 32;

	for (int i = 0; i < 26; i++)
		if (alphabets[i][j] == a)
			return i;
}