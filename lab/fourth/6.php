<?php
class BaseClass {
    protected $baseProperty = "Base property";

    public function getBaseProperty() {
        return $this->baseProperty;
    }
}

class DerivedClass extends BaseClass {
    protected $derivedProperty = "Derived property";

    public function getDerivedProperty() {
        return $this->derivedProperty;
    }

    public function getBaseProperty() {
        return parent::getBaseProperty(); // Accessing parent class method
    }

    public function printProperties() {
        echo "Derived property: " . $this->getDerivedProperty() . "\n";
        echo "<br>Base property: " . $this->getBaseProperty() . "\n";
    }
}

// Creating an object of DerivedClass
$obj = new DerivedClass();

// Accessing properties and methods
$obj->printProperties();
?>
