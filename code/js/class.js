// class Person{
//     constructor(name){
//         this.name= name;
//     }
//     getName(){
//         return this.name;
//     }
// }
// let person = new Person("John");
// person.getName();


class User{
    constructor(name,pass){
        this.username= name;
        this.password=pass;
    }
    Validate(){
        if(this.username==""||this.username==null){
            alert("Username is empty")
            
        } 

        if(this.password==""||this.password==null){
            alert("Password is empty") 
        } else if (this.password.length<6){
            alert("Password is less than 6 characters")
        }
    }
    
}

// let user = new User("","surya");
// user.Validate();

function display(){
    var name = document.getElementById("name").value;
    var pass = document.getElementById("password").value;  

    let user = new User(name,pass);
    user.Validate();
}
