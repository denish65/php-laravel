<?php 

$p=12;
$r=2;
$t=6;
$n=5;
$r=$r/100;

$ci= $p*pow((1+($r/$n)),$n*$t);

echo "compound interest =$ci";






?>