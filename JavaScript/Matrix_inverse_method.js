//Matrix inverse method
var equation1  = "x + y= 3"
var equation2  = "2x + y = 4"

var nullrow1 =[0,0]
var nullrow2 =[0,0]
matrix = [[0,0],
          [0,0]]


result = [0,0]

counter = 0 ;
counter1 = 0 ;


//EXCEPTIONS function
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
   if(eqcopy[j+1] !="y"){
    console.log("ERROR: Variable before constant!!")
  while(true){}
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
if(equationn[i+1] =="-"){
  i++;
  negitive_checkx = true;
  
}
  if(equationn[0] == "x"){
    mystringx= 1 ;
  }
  else{
 while(equationn[i] != "x"){
  mystringx = mystringx + equationn[i]
  i ++;
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

if(negitive_checky == true){
  myinty =myinty*-1
}
if(negitive_checkx == true){
  myintx =myintx*-1
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



//function for determinant of a matrix
           function determinant(mymatrix){
            var mul1=mymatrix[0][0]*mymatrix[1][1];
            var mul2=mymatrix[1][0]*mymatrix[0][1];
            var determinannt = mul1-mul2;
            
            //console.log("The determinant of " +mymatrix +" is:"+ determinannt);
            return determinannt;
            }

            detofourmatrix = determinant(matrix);


//function for adjoint 
function getadjoint(matrix)
{
    tempno1 = matrix[0][0]
    tempno2 = matrix[1][1]
    matrix[0][0] = tempno2
    matrix[1][1] = tempno1
    matrix[0][1] = matrix[0][1]*-1
    matrix[1][0] = matrix[1][0]*-1


return matrix
    
}
adjointofmatrix = getadjoint(matrix);



res = [0,0]

//multiplication of matrix
function multiply(mat1, mat2)
{
    res[0] = (mat1[0][0] * mat2[0]) + (mat1[0][1]  * mat2[1])
    res[1] = (mat1[1][0] * mat2[0])  +  (mat1[1][1]  * mat2[1])
    return res ; 

}

multipleanswer = multiply(adjointofmatrix, result)
multipleanswer[0] = multipleanswer[0] / detofourmatrix ;
console.log("Value of x by matrix inverse method is : ",multipleanswer[0])

multipleanswer[1] = multipleanswer[1] / detofourmatrix ;
console.log("Value of y by matrix inverse method is : ",multipleanswer[1])

