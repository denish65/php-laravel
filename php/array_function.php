<?php 
echo "count values in array <br><br><br>";

$name=array("nirav","kishan","jay","meet","brijesh","nirav");
print_r(array_count_values($name));


echo "<br><br><br> <br><br><br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";

echo "sum in array <br><br> ";
$add=array(65,54,89,75,59,45,55);
print_r(array_sum($add));

echo "<br><br><br> <br><br><br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";



echo "key of array";

$name2=array("nirav","meet","jay","bhakti","kishan");
print_r((array_keys($name2)));



echo "<br><br><br> <br><br><br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";


echo "values of array <br><br>";
$name3=array("nirav","meet","jay","brijesh","kishan");
print_r(array_values($name3));


echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";


echo "combine two array <br><br> ";

$key=array(4,3,2,1,0);
$values=array("nirav","meet","jay","kishan","bhakti");

print_r(array_combine($key,$values));

echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";

echo "combine two array <br><br> ";


$v1=array("m","b","h","u");
$v2=array("meet","brijesh","jay","kishan");
print_r(array_combine($v1,$v2));



echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";

echo "merge array <br><br>";
$name=array("a"=>"nirav","b"=>"bhakti");
$name2=array("a"=>"nirav","c"=>"meet");
print_r(array_merge($name,$name2));









echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";

echo "merge array <br><br>";




$n1=array("a"=>"nirav","b"=>"bhakti");
$n2=array("a"=>"brijesh","c"=>"priyanka");
$n3=array("a"=>"nirav","d"=>"kumar");
$n4=array("a"=>"niarv","d"=>"manav","c"=>"mitesh");

print_r(array_merge($n1,$n2,$n3,$n4));


echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";

echo "slice array <br><br>";

$name=array("nirav","jay","meet","kishan","brijesh","manav");
print_r(array_slice($name,2));

echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";

echo "delete last element of array <br><br>";


$name=array("nirav","meet","jay","kishan","bhakti");
print_r($name);
echo "<br><br>";

print_r(array_pop($name));
echo "<br><br>";
print_r($name);



echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";
echo "insert element in end array <br><br>";







$nm=array("nirav","meet","jay");


print_r($nm);


echo "<br><br>";

print_r(array_push($nm,"brijesh"));
echo "<br><br>";

print_r($nm);



echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";



echo "values in ascending order  <br><br>";


$name=array("nirav","meet","jay","brijesh","kishan","bhakti");
print_r($name);

echo "<br><br>";

asort($name);
foreach($name as $values)
{
    echo $values."<br>";
}






echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";

echo "values in decending order  <br><br>";
$name=array("nirav","meet","jay","brijesh","kishan","bhakti");
print_r($name);
echo "<br><br>";

arsort($name);

foreach($name as $values)
{
    echo $values."<br>";
}









echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";

echo "keys in asending order <br><br>";
$name=array("nirav","jay","meet","brijesh","kishan");
print_r($name);
echo "<br><br>";

ksort($name);
foreach($name as $values)
{
    echo $values."<br>";
}



echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";




echo " keys in decending order  <br><br>";
$name=array("nirav","jay","meet","brijesh","kishan");
print_r($name);
echo "<br><br>";
krsort($name);
foreach($name as $values)
{
    echo $values."<br>";
}



















echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";








echo "check you are avilable in array or not <br><br> ";
$name=array("nirav","jay","meet","brijesh","kishan");
print_r($name);
echo "<br><br>";

if(in_array("jay",$name))
{

     echo "you are avileble";
}
else 
{
    echo "you are not avilable";

}








echo "<br><br><br> <br><br> <br>";
echo "<br><br>---------------------------------------------------------------------------------<br><br>";
























































?>