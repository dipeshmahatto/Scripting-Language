<?php
class MyClass {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function display() {
        echo "Name: " . $this->name . ", Age: " . $this->age . "\n";
    }
}

$obj = new MyClass("Dipesh", 21);
$obj->display();
?>
