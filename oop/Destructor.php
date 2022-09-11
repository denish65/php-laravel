<?php


class f 
{
public $name;
public $color;

 function __construct($name)
 {
    $this->name=$name;
    
 }

 function __destruct()
 {
    echo "the fruit is {$this->name}.";
 }


}

$ap= new f("apple");



?>