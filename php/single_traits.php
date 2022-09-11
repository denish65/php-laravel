<?php

trait s
{
    
        public function test1()
        {
            echo "denish";
        }
    
}


class a
{
use s;


}

$gv= new a;
$gv->test1();



?>