<?php

interface a
{
    public function test();
}
interface b 
{
    public function test2();
}
interface c 
{
    public function test3();
}
class d implements a,b,c 
{

    public function test()
    {
        echo "hello nirav"."<br>";
    }
    public function test2()
    {
        echo "hello pankaj"."<br>";
    }
    public function test3()
    {
        echo "hello deepak"."<br>";
    }

    


}

$e=new d;

$e->test();
$e->test2();
$e->test3();





?>