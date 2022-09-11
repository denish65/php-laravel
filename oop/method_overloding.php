<?php



error_reporting(0);
class a 
{
    public function add($a,$b)
    {
        $c=$a+$b;
        echo $c ."<br>";

    }

}


class b extends a 
{
    public function add($d,$s,$g)
    {
        $m=$d*$s*$g;
        echo $m ."<br>";

    }
    
}

$w=new b;
$w->add(8,16,18);


?>