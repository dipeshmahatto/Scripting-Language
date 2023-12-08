var fruits = ["apple","banana","mango","orange","papaya"];

for(var i=0;i<fruits.length;i++){
    document.write(fruits[i]+"<br>");
}

for (var fruit of fruits){
    document.write(fruit+"<br>");
}

for (var i in fruits){
    document.write(fruits[i]+"<br>");
}
