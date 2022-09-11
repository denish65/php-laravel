<?php


class a
{
    public function add($a,$b)
    {
        $c=$a-$b;
        echo $c;
    }
    
}
class b extends a 
{
    public function add($a,$b)
    {
        $c=$a*$b;
        echo $c;
    }
}

$g=new b;
$g->add(10,20);



?>