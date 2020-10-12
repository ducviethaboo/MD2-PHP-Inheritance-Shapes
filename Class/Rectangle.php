<?php
include_once 'Shape.php';

class Rectangle extends Shape
{
    public $witdh;
    public $height;

    public function __construct($_name, $_width, $_height)
    {
        parent::__construct($_name);
        $this->witdh = $_width;
        $this->height = $_height;
    }

    public function calculateAre()
    {
        return $this->witdh * $this->height;
    }

    public function calculatePerimeter()
    {
        return ($this->witdh + $this->height) * 2;
    }
}