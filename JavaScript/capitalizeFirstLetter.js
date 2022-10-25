const capitalizeFirstLetter = function(char) {
    return char.replace(/(\b\w)/gi,function(m){return m.toUpperCase()})
};

/* Test Case */
const text = "hello";
console.log(capitalizeFirstLetter(text))