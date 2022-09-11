<?php 


//type of function
// pre defind function
// user defind function



/*
 how to call functuiuon 
 
  function call by value
  function call by reference






*/

echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo "pre defind function <br><br>";
$name="brijesh";

print($name)."<br>";
echo var_dump($name);







echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";

echo "user defind function <br><br>";

function kishan()
{
    $name="hi i am brijesh";
    echo $name;
}

kishan();







echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";


echo " function call by value <br><br>";



function n($a,$b)
{


    $c=$a*$b;

     echo "multiplication of two number  : =>  $c ";
}

n(2,4);










echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo " function call by reference <br><br>";


function h(&$s)
{
    echo "my name is : brijesh";
}
h($s);









echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";

echo " function parameter <br><br>";

function f($nm)
{
    echo " my name is $nm ";
}
f("meet");







echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";

echo " retuirn function  <br><br>";



function g()
{
    $a=10;
    $b=20;
    $c=$a+$b;
    return $c;
}

echo "sum of two number ".g();



echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";

echo " date function  <br><br>";

function r()
{
    echo date("d/m/y");

}
r();



























































































































echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";

?>