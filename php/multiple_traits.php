<?php

trait a 
{
    public function display1()
    {
        echo "my name is brijesh"."<br>";

    }
}
trait b
{
    public function display2()
    {
        echo "my name is rajesh"."<br>";
    }
}
trait c
{
    public function display3()
    {
        echo "my name id denish";

    }
}

class d 
{
    use a,b,c;
}

$f=new d;

$f->display1();
$f->display2();
$f->display3();




?>