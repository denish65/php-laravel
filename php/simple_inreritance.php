<?php 

class a 
{
    public function display()
    {
        echo "this is brijesh"."<br>";
    }

}
class b extends a 
{

    public function display1()
    {
        echo "this is man singh"."<br>";
        
    }


}

$h=new b;
$h->display();
$h->display1();





?>