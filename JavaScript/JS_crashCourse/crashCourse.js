
// Hello there, here is the crashCourse of JavaScript and the implementation of many concepts in JS.

// ----- JavaScript is a Dynamically typed language ----
// ----- JavaScript is single threaded which means code executes line by line

console.log('Hello, World');

// variables and Data type -- var, let and const
// singlequote and double quote strings are same but backticks have extended functionality.

const fname = 'Syed Saad';
const backticks = `Hello, ${fname}`;
console.log(backticks);
console.log(typeof fname);
 
console.log(fname.length); //4
console.log(fname['length']); // 4

let num = 4;
console.log(num - 2);

// ----------------------
// All properties of primitive dataType is immutable -- They can't be changed
// for example fname.length = 10 but it is stil 4
// ----------------------

// String Properties and Method

console.log(fname.indexOf('a')) // 6
console.log(fname.indexOf('y')) // -1 ( y not exist in name)
console.log(fname.lastIndexOf('a')) // 7
console.log(fname.includes('e')) // true
console.log(fname.slice(2,7)) // ed Sa
console.log(fname.slice(5)) // starts with 5 and ends at end. ( Saad )..
console.log(fname.substring(0,3)) // Sye 
console.log(fname.replace('Saad','Moiz'))
let withSpace = '        Hello          ';
console.log(withSpace.trim()); // Hello


// Operator ---| >, <, <=, >=, == != .
let var1 = 5;
let var2 = 10;
// strict equallity
console.log(5==='5'); // return false 
// instead of console.log(5 =='5'); // return true
// strict Inequallity
console.log(var1!==var2);


// logical operator --- &&, ||

// Conditional statements -- 
if(a==b){
    console.log('A is equal to b');
}else if(a>b){
    console.log('A is greater than b');
}else if(a<b){
    console.log('A is less than b');
}

// Loops -- while loop, for loop

//Array
let array = [1,2,3,4];
console.log(typeof array); // object
console.log(length(array)); // 4
console.log(array[0]);
delete array[0] ;
console.log(array) // [empty, 2, 3, 4] , delete doesnot change the length of array after deleting

// loop (for)
for (let num = 0; num < array.length; num++) {
    console.log(arr[num]);
}

// Another type of loop
for (const num of array) {
    console.log(num)
}

// Array method
console.log(array.pop()) //4
consolelog(array.shift()) //1
console.log(array.push(4)) // [2,3,4]
console.log(array.unshift(1)) // [1,2,3,4]

console.log(array.concat([5,6])); // it doesnot change the actual array, so first save it to the variable 
array = array.concat([5,6])
console.log(array) //[1,2,3,4,5,6]

//Spread operator
console.log(...array); // print all values of array 
// alternative of concat
arr = [...array,...[5,6]];
console.log(array); //[1,2,3,4,5,6]

// delete any value from an array it also changes the length of array
console.log(array.splice(1,1)); //[1,3,4,5,6]
console.log(array.splice(0,1,8)) //[8,3,4,5,6]
console.log(array.reverse()); //[6,5,4,3,8]

let splitString =  "Hi I am Syed Saad";
console.log(splitString.split()) ; //returns an array ["Hi I am Syed Sasd"]
console.log(splitString.split(" ")) ; // return an array splitted by space ["Hi", "I", "am", "Syed", "Saad"]

let firstEven = array.find(e => e%2==0);
console.log(firstEven); // Return first even number in array -- 2

let firstEvenIndex = array.findIndex(e => e%2==0);
console.log(firstEven); // 1 -- index number of first even number

    // Array destructuring
    // const first = arr[0];
    // const third = arr[2];

    // instead of above 2 lines.
    const [_first,_second,_third] = array;
    console.log(_first,_second,_third); // 1, 2, 3

    // Or if we want to jump a number in array and save it so then, make a space here
    const [first, ,third] = arr; 
    console.log(first,third); // 1, 3
    console.log(first,_second,third); // error



let numSet = new Set()
numSet.add(1).add(2).add(3).add(3).add(4)
console.log(numSet) //  { 1,2,3,4 } set doesnot save duplicates

// Set to Array
let setnew = new Set([1,2,3,4]); // { 1,2,3,4 }
let setnewToArray = [...setnew]; // [1,2,3,4] it is now array

// Alternative way
let array2 = Array.from(setnew);
console.log(array2); //[1,2,3,4]

// loop through the set
for (let num of numSet) {
    console.log(num)
}
console.log(numSet.size); // return length of set -- 4
console.log(numSet.has(1)) ; // true
console.log(numSet[0]);// undefined
console.log(numSet.delete[1]); // true
console.log(numSet);// { 2,3,4 }

console.log(numSet.clear()); // {}


// ---------------- MAP -----------------

let stuff = new Map(); // combinations of keyValue pair -- very similar to dictionaries in other PL

stuff.set('color','black');
stuff.set('fruit','apple').set('evenNumber',10).set('mobile','Redmi');
console.log(stuff);

// Use multiArray to save value in Map
let arrayValues = new Map(['key1','value1'], ['key2','value2']);
console.log(arrayValues);

// Map to array (but it gives multiArray)

console.log([...stuff]);
console.log(Array.from(stuff));

console.log(stuff.get('color')); // black
console.log(stuff.has('color')); // true
console.log(stuff.size); // 4
console.log(stuff.delete['mobile']); // true
console.log(stuff);  // Map of size 3 


// Use loop for finding keys
for (const key of stuff.keys()) {
    console.log(key);
}
// Use loop for finding values
for (const value of stuff.values()) {
    console.log(key);
}
// Use loop for finding both keys and values at once
for (const [key,value] of stuff.entries()) {
    console.log(key,value);
}
// functions -- block of code to perform specific task
// functions are considered to be first class objects in js

//function declaration
function Dosquare(number){
    return number*number ; // return to the calling
}
let result = Dosquare(10);
console.log(result);


// a function expression -- Anonymus function -- doesn't have a name
let Dosquare = function(number){
    return number*number ; // return to the calling
}

// An arrow function
let Dosquare = (number) => {
    return number*number;
}

// Rest operator and arrow fucntion
let average = (...args) => {
    let total = 0;
    for (let arg of args) {
        total += arg;
    }
    return total / args.length;
}
console.log(average(1,2,3,4,5));


const addArr = (...numbers) =>{
    console.log(numbers.reduce((a,b) => a+b,0));
}

addArr(1,2,3,4,5,6);

// --------Hoisting ----------------
// Hoisting is the js interpreter action of moving variables and function declaration
// to the top level of current scope regardless of where they are defined

Dosqu(10);
function Dosqu(number){
    console.log(number*number) ;
}

square(10); // throw an error because hoisting not apply on function expressions
let square = function(number){
    console.log(number*number)  ; 
}

console.log(someVar) //undefined
var someVar = 'value'; 

console.log(someLet)
let someLet = 'value'; // throw an error 


// --------- Callback function -------------
function greeting(name){
    console.log(`Hi, ${name}`);
}

function sayHi(callback,name) {
    callback(name.trim());
}

sayHi(greeting,'      Saad       ');

// example of sorting function as a callback
// 1- without callback
let numbers = [1,5,3,10];
console.log(numbers.sort()); // [1,10,3,5]

console.log( numbers.sort((a,b) => a-b ) ); // [1,3,5,10]


// -----Eval -------
console.log(eval('4-2')) // 2


// ----- Array Iterator ----------
// forEach as a Array Iterator
// forEach accepts the callBack function
let colors = ['red', 'black','grey','green'];
colors.forEach(function(color, index) {
    console.log(`Index= ${index}, and color= ${color}`);
})

// map method is also similar to callBack but it returns the new array and replaces each value with returned value

let squares = numbers.map(x => x*x );
console.log(squares); // [1,25,9,100]

// reduce method reduces all values of array and combine into one
let sum1 = numbers.reduce((a,b) => a+b,0)
console.log(sum);

let sum2 = numbers.reduce((a,b) => a+b,0)
console.log(sum);

// filter method returns new array of items that returns true.

let evenOdd = [1,2,3,4,5,6,7,8,9,10];
let onlyEven = evenOdd.filter(x => x%2===0);
console.log(onlyEven); // [2,4,6,8,10]


// ----------- Object ------------ All objects are mutable

// Object  -- this keyword refers to the object that it is writter, also refers to the properties and method of that object

let _person = {
    fname: "Saad",
    lname: "Syed",
    age: 20,
    occupation: "Developer",
    walk() {
        return `I, ${this.lname} ${this.fname} am walking`; 
    }
}
console.log(_person);
// access member of object
console.log(_person.fname);

let anOther = {
    'first name': "Saad"
}
console.log(anOther['first name']);
// console.log(anOther.first name) not gonna work

// check whether property is exist or not
console.log('fname' in _person); // true
console.log('food' in _person); // false
// Another way
console.log(_person.hasOwnProperty('fname'));

for (let key in _person) {

    if (_person.hasOwnProperty(key)) {
        console.log( `Key ${key}, value- ${_person[key]}` ) ;  
    }

}
// chain method together
let bob = {
    program() {
        console.log('I program');
        return this
    },
    run() {
        console.log('I run');
        return this
    },
    sleep() {
        console.log('I sleep');
        return this
    }
}

bob.program().run().sleep(); // it will give error if, there is no return this in any of the function

// Object destruction and spread operator

let {x, ...remaining} = {x:1, a:2, b:3, c:4}
console.log(x) //1
console.log(remaining); // object

//Spread operator
console.log(...numbers); // print all values of array

// use rest operator to pass value to a function
function restParam(a,...x) {
    console.log(a);
    console.log(x);
}

restParam({x:1, a:2, b:3, c:4});

// ---------------- JSON - It is text  --------------------
// JavaScript Object notation -- light weight interchangible data format

// Convert object to JSON
let personJson = JSON.stringify(person);
console.log(personJson);

// Convert JSON into Object
person = JSON.parse(personJson);

// ------------  MATH object -------------
console.log(Math.floor(Math.random() * 5 ));  // 0 - 4


// --------------Date object -------------- momentjs.com library
// Date object contains information about date and times based on the client's local environment

const _date = new Date();
console.log(_date);
console.log(typeof _date);

const newDate = new Date('2022 01 25'); // y m d
console.log(newDate);

// Epoch - 1st January 1970 which is a date that is used in programming as a referencing pointing time from which to measure dates

let day = 60 * 60 * 24 * 1000 ;
let years = day * 365 ;
let now = new Date();
let t = now.getTime();

let yearsPased = Math.round( t/ years );
console.log(yearsPased);

// ------------- RegExp -----------------------

//  i = case insensitive
//  g = gets all matches, not just the first one
//  m = performs multiline matching

let names = 'John, Jack, Ann, Ann';
console.log( names.replace('Ann','Mary') ); // 'John, Jack, Mary, Ann'
console.log( names.replace(/ann/ig,'Mary') ); // 'John, Jack, Mary, Mary'
// Further more in RegExp library




// ----------------Call Apply Bind--------------
// call method used to set the value of 'this' inside of function to an object that is provided as a first argument

function hello(job='Programmer') {
    console.log(`Hello, my name is ${this.name} and I am a ${job}`);
}
// call method
let person = { name: 'Syed Saad'};
hello.call(person);
hello.call(person,'Developer');
// apply method
hello.apply(person,['Developer']);

// bind method

let Obj = {
    x:10,
    getX: function() {
        return this.x;
    }
}

let unboundGetx = Obj.getX;
console.log( unboundGetx() ); // undefined because getx here is referencing globally and unboundGetx invoked globally, this refers to window object

let boundGetx = unboundGetx.bind(Obj)
console.log( boundGetx() ); // 10



// ------------------- Arrow function and this---------------- 

let food = {
    type: 'fruit',
    fruits: ['apples', 'oranges', 'grapes'],
    showFruits() {
        this.fruits.forEach(function (fruit) {
            console.log( `${this.type}: ${fruit}` );
        });
    }
}

food.showFruits(); // here 'this' is undefined because it refers to the window global object not food
// console.log( this );

// To make it possible there are certain method...

let food2 = {
    type: 'fruit',
    fruits: ['apples', 'oranges', 'grapes'],
    showFruits() {
        let _this = this;
        this.fruits.forEach(function (fruit) {
            console.log( `${_this.type}: ${fruit}` );
        });
    }
}
food2.showFruits();

let food3 = {
    type: 'fruit',
    fruits: ['apples', 'oranges', 'grapes'],
    showFruits() {
        this.fruits.forEach(function (fruit) {
            console.log( `${this.type}: ${fruit}` );
        }.bind(this));
    }
}
food3.showFruits();


// Use of arrow function -- lexical scoping -- meaning 'this' refers to it's current surrounding scope
let food4 = {
    type: 'fruit',
    fruits: ['apples', 'oranges', 'grapes'],
    showFruits() {
        this.fruits.forEach( fruit => console.log( `${this.type}: ${fruit}` ) );
    }
}
food4.showFruits()


// ------------ IIFE -----------------
// Immediate Invoked Function Expression - Anonymus function
// Invoked as soon as it defined
// variables inside IIFE only visible inside it not outside which is good for not polluting the global namespace

(function() {
    console.log('Hi, It is from IIFE');
})();


(function() {
    let color = 'black';
    let language = 'JS';

    init();

    function init() {  // private function
        color = 'Red';
        language = 'Cpp';
        console.log(`Color- ${color} , language- ${language}`);
    }
})();
// init(); not gonna work because it is outside of the IIFE



// ----------------- Closure -------------------

// closure -- It is a reference to a variable that is created inside the scope of another function
// closure -- access of parent by child

// function defined inside of another function like this that inner function
// has access to the variable and scope of the outer function
// even after outer function finishes executing and those varaibles are no longer accessible outside that funcion.
function outerFunc(outerVar){
    const outerVar2 = 'hey...';
    return function innerFunc(innerVar){
        console.log('Outer Variable' + outerVar);
        console.log('Inner Varaible' + innerVar);
        console.log(outerVar2);
    }
}
const closure = outerFunc('outside');
closure('inside');

// -------------- Promises -------------------
// promises is asynchoronus, it is not in main thread.

function func1() {
    return new Promise(function (resolve, reject) {
        setTimeout(() => {
            const error = true;
            if (!error) {
                console.log('Function: Your promise has been resolved')
                resolve();
            }
            else {
                console.log('Function: Your promise has not been resolved')
                reject('Sorry not fulfilled');
            }
        }, 2000);
    })
}

func1()
.then(()=> console.log("Developer: Thanks for resolving"))
.catch((error)=> console.log("Developer: Very bad bro. Reason: " + error))
.finally(()=> console.log('It will always execute regardless of resolve/reject the error'))


// --------------------Async/Await -- best way for asynchronus code
//Async functions return 'promises' not 'values', and they can be pause using await
// Async/Await are better than promises
// All code is in Async.js


// ----------- Generators ----------------
// Generators are special functions use to produce iterators that maintain the state of the value - *
// It returns the generator objects, that can be used to create the iterator which implements the next method and that next method return the updated value each time it is called

function* examGenerator() {
    
}

function* fibonacci(a,b) {
    let [prev, current] = [a,b];
    while (true) {
        [prev, current] = [current, prev+current];
        yield current;  // yield is the special keyword used by the generator function to returns the value
    }  // Difference between yield and Return is that with yield state of the value is remembered.
}

let sequence = fibonacci(1,2);
console.log( sequence.next() ); // 3
console.log( sequence.next() ); // 5
console.log( sequence.next() ); // 8 
console.log( sequence.next() ); // 13
console.log( sequence.next() ); // 21
// Without yield-- it always gives 3 which is on first call of function





// -----------------------------------------

// JavaScript ES7 and ES8

    // 1- string.prototype.padStart/padEnd 
        // padEnd/padStart(desiredlength, textToAdd);
    const str = "";
    console.log(str.padStart(10,"JavaScript Coding")); //JavaScript

    const n = '12345';
    console.log(n.padStart(10,'.')); // .....12345
    console.log(n.padEnd(10,'.')); //12345.....

    // 2- object.values
    let obj = {
        name:'Saad',
        age:20,
    }
    console.log(Object.values(obj)); // return array ['saad',20];

    // 3- object.entries
    console.log(Object.entries(obj)); 
    // return array of key-value pairs --[ ['name','saad'],
    //                                         ['age',20] ]


    // 4- Exponentiation
    console.log(Math.pow(2,3)); // old
    console.log(2**3); // new

// ---------------------------ES2020

// optional chaining...

const user = {
    firstName:'Saad',
    LastName:'Syed',
    address:undefined,
}
// before optional chaining
user && user.address && user.address.house && console.log(user.address.house.number);

// now after optional chaining
console.log(user?.address?.house?.number);

// or
const searchProperty = 'number';
console.log(user?.address?.house?.[searchProperty]);
//?. // null or undefined => undefined



// ---------------- OOP-JS ---------------------------
// JS not a classical object oriented language such as java, php 

// JavaScript has prototype based inheritance
// ES6 classes

class Person {
    constructor(name,job) {
        this.name = name;
        this.job = job;
    }
    greeting(){
        console.log(`I, ${this.lname} ${this.fname} am walking`);
    }
    static staticMethod(){
        console.log('Static method is called by class itself not by object');
    }
    greetingcall(){
        console.log('greetingcall() method');
        this.greeting();
    }
}

let person1 = new Person('Saad','Programmer');
person1.greeting();

let person2 = new Person('Moiz','Developer');
person2.greeting();

Person.staticMethod(); // calling static method
person1.greetingcall();

// --------------- Prototype inheritance ------------
// In JS we can add methods and members from outside of the class

Person.prototype.addExternally = function () {
    console.log(`This is the function which adds externally although it is now a part of person class. And can access name -  ${this.lname} ${this.fname}`);
}

person1.addExternally();
person2.addExternally();

// And can also change the existing method and variable inside class by  over-writing them.
// for example;
Person.prototype.greeting = function () {
    console.log('The greeting() is now changed externally');   
}

person1.greeting();

// ------------- Finding out the prototype ---------------

// 1-
console.log(person1.constructor.prototype);
// 2- dunder proto
console.log(person1.__proto__);

// 3- prefered to use
console.log( Object.getPrototypeOf(person1));

// 4-chech whether a prototype or not
console.log(Person.prototype.isPrototypeOf(person2)); // true
console.log(Person.prototype.isPrototypeOf(opp)); // false



// ----------- overwriting properties
// change or add properties in an object not in class
console.log(person1.name);
person1.name = 'Syed Saad';
console.log(person1.name);
person1.addDetails = function () {
    console.log('Third year student of FAST Nuces');
}

person1.addDetails();
// person2.addDetails(); // give an error


// -------------- Inheritance ------------------

class Student extends Person {
    constructor(name,job,classSec) {
        super(name,job); // it calls the parent constructor, and always call the super constructor whenever extends the class even if don't want its properties
        this.classSec = classSec;
    }
    addData(){
        console.log(`Add data of ${this.name} which is in ${this.classSec}`);
    }
} 

let st = new Student('Syed Saad','Programmer','Sec-J');
st.greetingcall();
st.addData();


// Adding methods to build-in objects in JS -- it is known as monkey patching

Number.prototype.isEven = function () {
    return this%2 === 0;
}
Number.prototype.isOdd = function () {
    return this%2 !== 0;
}

console.log( 10..isEven() ); // true
console.log( 9..isEven() ); // false
console.log( 10..isOdd() ); // false
console.log( 9..isOdd() ); // true

Array.prototype.first = function () {
    return this[0];
}

Array.prototype.last = function () {
    return this[this.length-1];
}

Array.prototype.delete = function (i) {
    return this.splice(i,1);
}

let arr = [1,2,3,4];
console.log(arr.first());
console.log(arr.last());

arr.delete(0);
console.log(arr);

// Can Also extends the existing class

class newArray extends Array {
    constructor(...args) {
        super(...args);
    }
    delete(i) {
        return this.splice(i,1);
    }
}

let myarray = new newArray(1,2,3,4,5,6,7,8);
console.log( myarray ); 
// can't use build-in notations only build-in arrays literal notations
myarray.delete(1);
console.log( myarray );


// ------------ Creating Objects from another Objects -----------

let Human = {
    name: "Saad",
    age: 20,
    occupation: "Developer",
    walk() {
        return `I, ${this.name} am walking`; 
    }
}

let saad = Object.create(Human);
console.log(Human.name);
console.log(saad.name);

console.log(Human.isPrototypeOf(saad));

saad.addDetail = function () {
    console.log('Third year student of FAST Nuces');
}

saad.name = 'Syed Saad';
console.log(saad);
console.log(saad.addDetail()); 
// console.log(Human.addDetail()); // it will give an error

// ------------- Mixing --------------
// It is the way of adding properties and method of one object to another Object without inheritance.

let obj1 =  {};
let obj2 =  {languageName: "Saad"};

Object.assign(obj1,obj2);
console.log(obj1); 

// There is a problem with this method, when values are not primitive
// When arrays and objects are passed by reference not by value;

let obj3 =  {};
let obj4 =  {numbers: [1,2,3,4]};

Object.assign(obj3,obj4);
console.log(obj3);

obj3.numbers.push(5);
console.log(obj4); //since I add number in the array of Obj3 but it also reflects in Obj4.. Both objects points to the same array in memory.. Only a shell copy is made


// -------  Use of Strict -----------

useStrict = 'Use of strict';
console.log(useStrict); // It works but it shouldn't .
// Use strict make it possible

'use strict';
useStrict = 'Use of strict';
console.log(useStrict); // It will not work now

// Error objects and throwing exceptions
function add(a,b) {
    if (typeof a !== 'number' || typeof b !== 'number') throw new TypeError('You must use numbers!');
    return a+b;
}

console.log( add(1,2) ); // work fine
console.log( add(1,'hello') ); // give an type error

// Exceptional Handling
// All code is in Async.js

// --------------- Testing Performance ---------------
console.time('Testing...');
let a = 10-2;
console.timeEnd('Testing...');

// Alternative way...

let t0 = performance.now();
let b = 10-2;
let t1 = performance.now();
console.log(`Time takes- ${t1-t0}`);

// Modules-- It allows you to contain parts of code in seperate files
// Code in modules is always in strict mode
// Modules have their own global scope
// 'this' is undefined in top level of the module


// ------------- DOM -----------------

// ------------------ Form ----------------

let form = document.querySelector('.person');
form.addEventListener('submit',submitForm);
function submitForm(e) {
    e.preventDefault();

    let name = document.querySelector('#name').value;
    let color = document.querySelector('#colors').value;
    // let food = '';
    // let checkBox = document.querySelectorAll('.food');
    // for (let i = 0; i < checkBox.length; i++) {
    //     if (checkBox[i].checked) {
    //         food += checkBox[i].value + ' '
    //     }
    // }

    let food = document.querySelectorAll('.food:checked');
    let foodValues = Array.from(food).map(el => el.value);
    let gender = document.querySelector('input[name="gender"]:checked');
    let genderValue = gender ? gender.value : '';
    let text = document.querySelector('#desc').value;
    let car = document.querySelectorAll('#cars:checked');
    let carValues = Array.from(car).map(el => el.value);

    console.log(name, color, foodValues, genderValue, text, carValues);
}


// fetch(Ajax)
//  Ajax -- It is a technique that allows webPages to communicate server Asynchronusly
document.querySelector('#getText').addEventListener('click', function() {
    fetch('text.txt')
        .then(response => response.text())
        .then(text => console.log( text ))
        .catch(error => console.log('There was an error ',error));
})

document.querySelector('#getFile').addEventListener('click', function() {
    fetch('fruit.jpg')
        .then(response => response.blob())
        // .then(blob => console.log( blob ))
        .then(blob => console.log( blob.type ))
        .catch(error => console.log('There was an error ',error));
})

// get json data from fetch
document.querySelector('#get').addEventListener('click', function() {
    fetch('https://jsonplaceholder.typicode.com/posts/1')
        .then(response => response.json())
        .then(json => console.log( json.title ))
        .catch(error => console.log('There was an error ',error));
})


// post json data through fetch
let post = {
    title: 'Some Title',
    body: 'Some body',
    userId: 99
}
document.querySelector('#post').addEventListener('click', function() {
    fetch('https://jsonplaceholder.typicode.com/posts', {
        method: 'POST',
        body: JSON.stringify(post),
        headers: {
            "Content-Type": "application/json"
        }
    })
        .then(response => response.json())
        .then(json => console.log( json ))
        .catch(error => console.log('There was an error ',error));
})

// update json data by PUT method

let updatePost = {
    title: 'Some Title',
    body: 'Some body',
    userId: 99,
    id: 1
}
document.querySelector('#update').addEventListener('click', function() {
    fetch('https://jsonplaceholder.typicode.com/posts/1', {
        method: 'PUT',
        body: JSON.stringify(post),
        headers: {
            "Content-Type": "application/json"
        }
    })
        .then(response => response.json())
        .then(json => console.log( json ))
        .catch(error => console.log('There was an error ',error));
})

// Delete
document.querySelector('#delete').addEventListener('click', function() {
    fetch('https://jsonplaceholder.typicode.com/posts/1', {
        method: 'DELETE',
     })
        .then(response => response.json());
})

// ------------------ Data Attributes ---------------------
// Accessing data-type
let divCar = document.querySelector('#divCar');
let carType = divCar.dataset.type;
console.log(carType); // volvo from index.html

let divFood = document.querySelector('#divFood');
let foodType = divFood.dataset.someFruit;
console.log(foodType); // apples from index.html

// Web Storage API provides a key-value store on client's computer, it is similar to using Cookies
// few restrictions - more storage capacity - much easier to use
// Web Storage only contains string
// By using JSON we can save any JS-object in webstorage

// localStorage.setItem('key',jSON.stringify(obj))  -- stores object as a string
// obj = JSON.parse( localStorage.getItem('key') ); -- Get as an actuall object


// --- There are two properties of Web storage / two objects
// 1- local storage --- it is saved forever 
// 2- session storage --- it is only save during duration of session, it means it expires when browser closes

// ---------------- Local Storage ------------------
// It is a key-value pair which is basically string

localStorage.setItem('name','John');
console.log(localStorage.getItem('name'));

// remove from local storage
localStorage.removeItem('name');
// or
delete localStorage.name;
// clear all
localStorage.clear();

// --------- Session Storage --------------------
sessionStorage.setItem('lastname','Joseph');
console.log(sessionStorage.getItem('lastname'));

// remove from session storage
sessionStorage.removeItem('lastname');
// clear all
sessionStorage.clear();


// ------------------ Geolocation ----------------
// Geolocation of the API obtains the co-ordinates of device
// Geolocation is the property of Navigator object and has the method called getCurrentPosition

navigator.geolocation.getCurrentPosition(getCoords);

function getCoords(position) {
    console.log(`Latitude ${position.coords.latitude}, Longitude ${position.coords.longitude}`);
    console.log(position);
}

// 'watchPosition' method which will call callBack function everyTime the position of device is updated, this method return an ID which reference the position to watch

let id = navigator.geolocation.watchPosition$(getCoords);
// To stop the callBack to being call
navigator.geolocation.clearWatch(id);

// ----------------- Notifination API ----------------

// if (window.Notification) {
//     Notification.requestPermission() // returns promises...
//         .then( function() => {
//             if (Notification.permission === 'granted') {
//                 new Notification('Hello from JavaScript');
//             }
//         });
// }

// new Notification('Hello from JavaScript') // first argument is the title, there can be a second argument
let notification = new Notification('JavaScript', {
    body: 'JavaScript is the best',
    icon: 'anyimage.jpg'
}
)

if (window.Notification) {
    Notification.requestPermission() // returns promises...
        .then(() => {
            if (Notification.permission === 'granted') {
                notification;
            }
        });
}

// close notification
setTimeout(() => {
    notification.close();
}, 2000);

// notification instance has an number of events... One is click event

notification.addEventListener('click',()=>console.log('Notification is clicked'));


// ----------------- Web Workers ---------------
// Web Workers allow processors to run in the background, it supports concurrency in JS
// Although JS is single thread language so, the idea is that any processor could takes long time are carried out in the background. 
// So website will continue to function without the script being UnResponsive
// UnResponsive -- is the message occurs when script runs too long


let worker = new Worker('./webWorker.js');

// worker will only start once the file is finished downloaded completely.
// inside worker script... 'self' is used

// web workers use the concept of messages to communicate back-fourth between the main script and the worker script

worker.postMessage('Hello from main script');

worker.addEventListener('message',(e) => {
    console.log(e.data);
    worker.terminate();
} ) 

// when the worker finished it's job it can be stoped using the terminate method inside the main script or in worker script using self.close();

// worker.terminate();


// ---------- local Storage Vs Cookies Vs Session ---------------------

// Cookies-- good for authentication... because they actually send from browser to the server
    // 1- small in capacity -- 4kb
    // 2- Browsers-- HTML4 / HTML5
    // 3- Accesible from -- Any window
    // 4- Expires -- Manually set
    // 5- Storage location -- browser and server
    // 6- Send with request -- Yes


// local Storage--
    // 1- large in capacity -- 10mb
    // 2- Browsers-- HTML5
    // 3- Accesible from -- Any window
    // 4- Expires -- Never
    // 5- Storage location -- Browser only
    // 6- Send with request -- No


// Session Storage--
    // 1- large in capacity -- 5mb
    // 2- Browsers-- HTML5
    // 3- Accesible from -- Same tab
    // 4- Expires -- On tab closes
    // 5- Storage location -- Browser only
    // 6- Send with request -- No