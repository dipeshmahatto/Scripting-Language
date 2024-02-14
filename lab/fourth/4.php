<?php
class Animal {
    public function makeSound() {
        echo "<br>Generic animal sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "<br>Woof!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "<br>Meow!\n";
    }
}

// Creating objects
$animal = new Animal();
$dog = new Dog();
$cat = new Cat();

// Calling the Sound method
$animal->makeSound(); // Generic animal sound
$dog->makeSound();    //  Woof!
$cat->makeSound();    //  Meow!
?>
