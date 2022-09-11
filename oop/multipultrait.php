<?php

trait a
{
   public function n()
   {
    echo "hello <br>";
   }
}
trait b
{
    public function n2()
    {
        echo "bny <br>";
    }

}
trait c
{
    public function n3()
    {
        echo "nhj <br>";
    }
    
}

class  d
{

    use a,b,c;
}

$g=new d;
$g->n();
$g->n2();
$g->n3();




?>