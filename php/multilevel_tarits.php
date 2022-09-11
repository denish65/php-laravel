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
        echo "my name is denish"."<br>";
    }
}

class d 
{
    use a;
    use b;
    use c;
}

$df=new d;
$df->display1();
$df->display2();
$df->display3();




?>