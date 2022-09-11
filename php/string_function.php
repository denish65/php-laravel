<?php

echo "<br><br>";
echo "find lenght of string <br><br> ";
$name="this is nirav";
echo $name;
echo "<br><br>";
echo strlen($name);


echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";

echo "find a position of any string  <br><br>";


echo  strpos("tops technology","technology");
echo "<br><br>";
echo strpos("tops technology","tops");


echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";


echo "find string in uppercase <br><br>";
$name= "this is nirav";
echo $name;
echo "<br><br>";

echo strtoupper($name);


echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";

echo "find string in lowercase<br><br>";
$name ="THIS IS  NIRAV";


echo $name;
echo "<br><br>";
  
echo strtolower($name);










echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";

echo "find a first string is in uppercase <br><br>";

$name ="this is meet";
echo $name;
echo "<br><br>";
echo ucfirst($name);








echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";


echo "find a word in   in uppercase <br><br>";

$name="this is  meet";
echo $name;
echo "<br><br>";

echo ucwords($name);








echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";


echo "reverse a string <br><br>";

$name="this is jay";
echo $name;
echo "<br><br>";

echo strrev($name);










echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo "shuffle a string <br><br>";
$name="this is jay";
echo $name;
echo "<br><br>";
echo str_shuffle($name);








echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo "strstr string <br><br>";

echo strstr("tops technology","technology");
echo "<br><br>";

echo strstr("hello world","world");





echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo " stristr function <br><br>";

echo stristr("hello world","hello");






echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo " trim a string  <br><br>";

echo  trim("tops technology  ","tops")."<br>";
echo  ltrim("this is meet", "this")."<br>";
echo  rtrim("this is jay","jay");


echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo " encyption & decryption  <br><br>";


$pass="dg4585905";
echo base64_encode($pass);
echo "<br><br>";
$pass="ZGc0NTg1OTA1";
echo base64_decode($pass);
echo "<br><br>";

$pass="hujvmn6898";
echo md5($pass);




echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo " convert any array into string   <br><br>";

$name=array("nirave","meet","jay","kishan","brijesh");
echo implode(" ",$name)."<br>";




echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo " convert any string into array   <br><br>";
$str="meet jay kishan brijesh karishma";
print_r(explode(" ",$str));






echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";
echo " split any string in array  <br><br>";

$name="hi i am brijesh";
echo $name;
echo "<br><br>";


print_r(str_split($name));


























echo "<br><br><br><br><br><br><br><br><br><br><br><br>------------------------------------------------------------------------------------------------------------------<br><br>";























































































?>