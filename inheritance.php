<?php

// Abstract base class
abstract class Shape {
    // Abstract method to be implemented by subclasses
    abstract public function calculateArea();
}

// Circle class that extends Shape
class Circle extends Shape {
    private $radius;

    // Constructor to initialize radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement the abstract method
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class that extends Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor to initialize width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implement the abstract method
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Create instances of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Calculate and display the areas
echo "The area of the circle is: " . $circle->calculateArea() . "\n";
echo "The area of the rectangle is: " . $rectangle->calculateArea() . "\n";

