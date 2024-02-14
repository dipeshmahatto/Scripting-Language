<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function celebrateBirthday() {
        $this->age++;
    }
}

// Creating a Person object
$person = new Person("Dipesh", 21);

// Accessing information and methods
echo "Name: " . $person->getName() . "\n";
echo "Age: " . $person->getAge() . "\n";

// Incrementing age
$person->celebrateBirthday();
echo "After celebrating birthday, <br>new age: " . $person->getAge() . "\n";
?>
