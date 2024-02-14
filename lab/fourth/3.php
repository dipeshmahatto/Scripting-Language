<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return M_PI * $this->radius * $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }
}

// Create an object of Circle
$circle = new Circle(5);

// Get the area of the circle
$area = $circle->getArea();
echo "Area of the circle with radius {$circle->getRadius()} is: " . round($area, 2);
?>
