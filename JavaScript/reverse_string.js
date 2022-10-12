/**
 * @param {character[]} s
 * @return {void} Do not return anything, modify s in-place instead.
 */
 var reverseString = function(s) {
    let left=0;
    let right=s.length -1;
    //check the left is less than right 
    while(left < right){
        let temp=s[left]; //h
        s[left]=s[right]; //0
        s[right]=temp; //h
        left++;
        right--;
    }
    //return s;
};

reverseString(["C","y","b","e","r","b","l","o","c","k"]);