<?php
interface a
{
    public function d1();
}
interface b
{
    public function d2();
}

class v implements a,b
{
    public function d1()
    {
        echo "my name is brijesh <br>";
    }
    public function d2($n,$l)
    {
        $p=$n+$l;
        echo " sum is $p <br>";
    }

}

$m=new v;
$m->d1();
$m->d2(10,30);



?>