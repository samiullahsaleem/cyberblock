var arr = [23, 1000, 1, -1, 8, 3];
console.log(arr)
bubbleSort(arr);
console.log(arr);

function bubbleSort(arr)
{
    var shouldSort = false;

    for(var i = 0; i < arr.length - 1; i++)
    {
        var a = arr[i];
        if ( a > arr[i+1] )
        {
            arr[i] = arr[i+1];
            arr[i+1] = a;
            shouldSort = true;
        }
    }

    if (shouldSort)
    {
        bubbleSort(arr);
    }
}
