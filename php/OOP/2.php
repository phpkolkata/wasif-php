<?php
class greet
{
    // variable = property
    // function = method

    public $name = "no name";
    public function hi()
    {
        echo "hi " . $this->name;
    }

}

$obj = new greet();
$obj2 = new greet();

$obj->name = "raj";
$obj->hi();

$obj2->name = "suamn";
$obj2->hi();
