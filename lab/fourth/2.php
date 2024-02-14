<?php
class MyClass {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "Constructor called. Hello, {$this->name}!\n";
    }

    public function __destruct() {
        echo "<br>Destructor called. Goodbye, {$this->name}!\n";
    }

    public function displayMessage() {
        echo "<br>Hello, {$this->name}!\n";
    }
}

$obj = new MyClass("Dipesh");
$obj->displayMessage();
unset($obj); // Explicitly unset the object to trigger destructor
?>
