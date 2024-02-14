<?php
class Vehicle {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function startEngine() {
        echo "<br>Starting the engine of {$this->brand}\n";
    }

    public function stopEngine() {
        echo "<br>Stopping the engine of {$this->brand}\n";
    }
}

class Car extends Vehicle {
    public function drive() {
        echo "{$this->brand} is driving\n";
    }
}

class Motorcycle extends Vehicle {
    public function ride() {
        echo "{$this->brand} is riding\n";
    }
}

$car = new Car("Toyota");
$car->startEngine();
$car->drive();
$car->stopEngine();

echo "\n";

$motorcycle = new Motorcycle("Honda");
$motorcycle->startEngine();
$motorcycle->ride();
$motorcycle->stopEngine();
?>
