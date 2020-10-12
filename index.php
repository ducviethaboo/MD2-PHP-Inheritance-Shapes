<?php
include_once 'Shape.php';
include_once 'Rectangle.php';
include_once 'Square.php';
include_once 'Circle.php';
include_once 'Cylinder.php';


$circle = new Circle('The Circle', 5);
$cylinder = new Cylinder('The Cylinder', 5, 10);
$rectangle = new Rectangle('The Rectangle', 10, 5);
$square = new Square('The Square', 5, 5);


echo $circle->show() . "<br>";
echo "The Area of The Circle is :" . $circle->calculateArea() . "<br>";
