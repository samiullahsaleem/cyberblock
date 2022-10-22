#include < iostream >
  using namespace std;

void bubbleSort(int *a,int size) {
  for (int i = 0; i < size; i++) {
    for (int j = 0; j < (size- 1); j++) {
      if (a[j] > a[j + 1]) {
        int temp = a[j];
        a[j] = a[j + 1];
        a[j + 1] = temp;
      }
    }
  }
}

int main() {
  int size;
  cout<<"enter size:"<<endl;
  cin>>size;
  //dynamically allocating array
  int *myarray=new int[size];
 cout << "Enter integers in any order: " << endl;
  for (int i = 0; i < size; i++) {
    cin >> myarray[i];
  }
  cout << "Before Sorting" << endl;
  for (int i = 0; i < size; i++) {
    cout << myarray[i] << " ";
  }

  bubbleSort(myarray,size); // sorting

  cout << endl << "After Sorting" << endl;
  for (int i = 0; i < size; i++) {
    cout << myarray[i] << " ";
  }

  return 0;
}
