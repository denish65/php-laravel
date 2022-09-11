<?php

$name=array("nirav","kishan","jay","meet");
print_r($name);
 echo "<br><br><br><br><br><br>";
 
$nm=array("nirav","kishan","meet","jay");
print_r(array_count_values($nm));

echo "<br><br><br><br><br><br>";

$b=array("brijesh","nirav","meet","jay","kishan");
print_r(array_keys($b));



echo "<br><br><br><br><br><br>";


$v=array(234,554,544,644,754,680,757);
print_r(array_sum($v));

echo "<br><br><br><br><br><br>";

$key=array(0,1,2,3,4,5);
$values=array("brijesh","meet","jay","raj","kishan","nirav");
print_r(array_combine($key,$values));

echo "<br><br><br><br><br><br>";

$key=array("h","f","e","w","p","r");
$values=array("brijesh","meet","jay","raj","kishan","nirav");

print_r(array_combine($key,$values));

echo "<br><br><br><br><br><br>";

$n1=array("a"=>"nirav","b"=>"ram");
$n2=array("a"=>"brijesh","c"=>"priyanka");
$n3=array("a"=>"nirav","d"=>"kumar");
$n4=array("a"=>"nirav","d"=>"manav","c"=>"meet");
print_r(array_merge($n1,$n2,$n3,$n4));


echo "<br><br><br><br><br><br>";

$nk=array("nirav","bhakti","priyanks","nilesh","keshav","anubhav");

print_r(array_slice($nk,2));









?>