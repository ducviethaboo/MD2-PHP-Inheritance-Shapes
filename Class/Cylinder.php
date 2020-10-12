<?php
include_once 'Circle.php';

class Cylinder extends Circle
{
    public $height;

    public function __construct($_name, $_radius,$_height)
    {
        parent::__construct($_name, $_radius);
        $this->height = $_height;
    }

    public function calculateArea()
    {
        return parent::calculatePerimeter() * ($this->height * $this->radius);
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}