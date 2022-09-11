<?php 


echo "index_array <br><br>";


$name=array("nirav","meet","kishan","bhakti","jay");

print_r($name);








echo "<br><br><br><br><br><br><br><br><br><br><br><br>";

echo "associative_array <br><br> ";

$name2=array(0=>"nirav",1=>"meet",2=>"kishan",3=>"bhakti",4=>"jay");

print_r($name2);












echo "<br><br><br><br><br><br><br><br><br><br><br><br>";

echo "multidementional_array <br><br>";
$name3=array("technical"=>array("php","asp.net","java"),"ono-technical"=>array("wd","st","dm","gd"));

print_r($name3["technical"][0]);


echo "<br><br><br>";

print_r($name3["ono-technical"][0]);

echo "<br><br><br>";


print_r($name3);







?>