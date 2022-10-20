//Cramerr rule
// const prompt = require("prompt-sync")({ sigint: true });
// const equation1 = prompt("Enter your equation1: ");
// const equation2 = prompt("Enter your equation2: ");
var equation1  = ""
var equation2  = ""
//null matrices
var nullrow1 =[0,0]
var nullrow2 =[0,0]
matrix = [[0,0],
          [0,0]]

var result= [0,
             0]


counter = 0 ;
counter1 = 0 ;


//EXCEPTIONS
function exceptions(eq){
  //error 1 no input given
  if(eq.length == 0){
    console.log("ERROR: No input given !!")
  while(true){}

   }
  //error 2 missing operator
  if(eq.indexOf("+")== -1  && eq.indexOf("-")== -1){
  console.log("ERROR: Operator missing !!")
  while(true){}
  }

  //error 3 variable before constant 
  var eqcopy = eq.replace("+","").replace("=","").replace(/ /g, "");
  var  j  = 0 ;
  while(eqcopy[j] != "x"){
    j ++;
   }
   if(eqcopy[j] == "-"){
   if(eqcopy[j+1] !="y"){
    console.log("ERROR: Invalid config!!")
  while(true){}
   }
  }

  //error 4  "= " missing
  if(eq.indexOf("=")== -1 ){
   console.log("ERROR: IsEqualto(Sign) missing !!")
   while(true){}
  } 

}
exceptions(equation1);
exceptions(equation2);

//DYNAMIC INPUT CONVERTER
function convertequation(equation1,nullrow){
  var equationn = equation1.replace("+","").replace("=","").replace(/ /g, "");
  var mystringx = "";
  var mystringy = "";
  i = 0 ;
  /////////FOR X VALUE
let negitive_checkx = false;

if(equationn[0] =="-"  ){
  i++;
  negitive_checkx = true;
}
  if(negitive_checkx == true ){
    if(equationn[i] == "x"){
      mystringx= 1 ;
    }
  }
  else{
  if(equationn[0] == "x"){
    mystringx= 1 ;
  }
  else{
 while(equationn[i] != "x"){
  mystringx = mystringx + equationn[i]
  i ++;
 }
}
}
////////FOR Y VALUE

let negitive_checky = false;
if(equationn[i+1] =="-"){
  i++;
  negitive_checky = true;
  
}

 if(equationn[i+1] == "y"){

  mystringy = 1 ;
   }
else{
  
  i++;
 while(equationn[i] != "y"){


mystringy = mystringy +equationn[i]
i++ ;
}
}

//PARSINg

myintx = parseInt(mystringx);
myinty = parseInt(mystringy);

if(negitive_checkx == true){
  myintx =myintx*-1
 
}
if(negitive_checky == true){
  myinty =myinty*-1
}


nullrow[0]=myintx;
nullrow[1]=myinty;



if(counter == 0){
matrix[0] = nullrow
counter++;
}
else{
  matrix[1] = nullrow
}
//FOR RESULT OR C BLOCK

result1 = "";
let index = equation1.indexOf("=");
let index1 = equation1.length;

for(i=index+1 ; i<index1 ; i++){
  result1 = result1 + equation1[i];
}
intresult1 = parseInt(result1);
result[counter1] = intresult1 ;
counter1++;

}
//FUNCTION ENDS
convertequation(equation1,nullrow1);
convertequation(equation2,nullrow2);



//DETERMINANT OF ANY MATRIX 
function determinant(mymatrix){
var mul1=mymatrix[0][0]*mymatrix[1][1];
var mul2=mymatrix[1][0]*mymatrix[0][1];
var determinannt = mul1-mul2;

//console.log("The determinant of " +mymatrix +" is:"+ determinannt);
return determinannt;
}
console.log(determinant(matrix));

//EXCEPTION DETERMINANT = 0
if  (determinant(matrix) == 0){
  console.log("ERROR: DETERMINANT = 0 ")
  while(true){}
}


//FUNCTION FOR X VALUE
function x_value(matrix){
  const row1x = matrix[0].slice(0);
  const row2x = matrix[1].slice(0);
  const row = [row1x,
               row2x]

    row1x[0] = result[0]
    row2x[0] = result[1]
    let yvalue = determinant(row);
    yvalue = yvalue / determinant(matrix)
    console.log("The value of x by Cramer rule: ",yvalue)
}



//FUNCTION Y VALUE
function y_value(matrix){
  const row1y = matrix[0].slice(0);
  const row2y = matrix[1].slice(0);
  const row = [row1y,
               row2y]
    row1y[1] = result[0]
    row2y[1] = result[1]
    let yvalue = determinant(row);
    yvalue = yvalue / determinant(matrix)
    console.log("The value of y by Cramer rule: ",yvalue)
    
    }

//CALLING FUNCTIONS
x_value(matrix);
y_value(matrix);




