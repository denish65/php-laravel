<?php

abstract class d 
{


    public $nm="brijjesh";
    public function fg()
    {

        echo $this->nm;
    }
}

class c extends d 
{

    public function tu()
    {

        echo "hi i am :".@$nm;
    }
}



$g=new c ();
$g->tu();
$g-> fg();







?>