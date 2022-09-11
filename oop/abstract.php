<?php

abstract class s 
{

    public function di()
    {
        echo "hi i am using abstract class<br> ";
    }
}

class g extends s 
{
    public function diw()
    {
        echo "hi i am using abstract with inheritance";
    }
}

$fh =new g;

$fh-> di();
$fh-> diw();




?>