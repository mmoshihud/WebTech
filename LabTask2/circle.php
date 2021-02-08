<?php

class Circle {
    public $radius = 0;
    public $pi = 3.1416;

    function __construct($radius) {
        $this ->radius = $radius;
    }
    function __destruct() {
        echo "The Area of circle is {$this->getArea()}.";
    }

    function getRadius($radius) {
        return $this->radius;
    }

    function setRadius($radius) {
        $this ->radius = $radius;
    }

    function getArea() {
        return $this->radius*$this->pi;
    }

}

$circle = new Circle(5);
$circle->getArea();


?>