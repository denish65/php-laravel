<?php




abstract class x 
{
    public function fg()
    {
        echo " i am abstract ";
        
    }

}
class n extends x
{
 
    public function __construct()
    {
        echo " i am class <br>";
    }


}

$f=new n;
$f->fg();



?>