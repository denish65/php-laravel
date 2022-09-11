<?php 

echo "multidementional_array <br><br>";

$name=array("technical"=>array("php","asp.net","java","nodejs"),"non-technical"=>array("wd","dm","st","gd"));

print_r($name);

echo "<br><br>";

print_r($name["technical"][3]);

echo "<br><br>";

print_r($name["technical"][2]);

echo "<br><br>";
print_r($name["non-technical"][2]);







?>