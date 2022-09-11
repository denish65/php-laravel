<?php 

class w 
{
    public function display()
    {
        echo "thisn is brijesh"."<br>";
    }
}
class r extends w 
{
    public function display2()
    {
        echo "this is man singh"."<br>";
    }
}
class t extends r 
{
    public function display3()
    {
        echo "yes i am  nirav"."<br>";
    }
}

$fb=new t;

$fb->display();
$fb->display2();
$fb->display3();

?>