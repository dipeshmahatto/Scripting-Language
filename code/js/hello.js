// document.write("Hello JS");


// This is a comment. It is similar  to comment in c++
/*
This is a multi-line comment in javascript 
It is very similar to comments in c programming
*/

// for in loop

// var person = {"firstname":"John","lastname":"nash","age":"64"};
// for(var prop in person){
//     document.write("<p>"+prop+"="+person[prop]+"</p>");
// };


// for of loop

// let greet = "Hello World !";
// for(let character of greet){
//     document.write(character);//Hello 
// }

function getSum(a,b){
    var total = a + b;
    return total;
}

var a = parseInt(prompt("Enter first number"));
if(!Number.isInteger(a)){
    alert("not a number");
}
var b = parseInt( prompt("Enter second number"));

if(!Number.isInteger(b)){
    alert("not a number");
}
document.write(getSum(a,b));