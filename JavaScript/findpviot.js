const pivotIndex = function(nums) {
    if(nums.length === 0) return -1;
    if(nums.length === 1) return 0;


    for(let i = 0 ; i < nums.length ; i++)
        {
            const p1 = nums.slice(0,i);
            const p2 = nums.slice(i+1);

            const sum1 = p1.reduce((pre,cur) => pre + cur,0);
            const sum2 = p2.reduce((pre,cur) => pre + cur,0);
            if(sum1 === sum2) return i;
        }
    return -1;
};

/* Test Case */
const nums = [1,7,3,6,5,6];
console.log(pivotIndex(nums))