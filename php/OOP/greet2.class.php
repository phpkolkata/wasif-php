<?php
require "greet.class.php";

class greet2 extends greet
{
    public function bye()
    {
        echo "bye " . $this->name . "<br>";
    }
}
