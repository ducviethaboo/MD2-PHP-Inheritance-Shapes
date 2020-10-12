<?php


class Shape
{
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    public function show()
    {
        echo "The name of Shape is " . $this->name;
    }
}