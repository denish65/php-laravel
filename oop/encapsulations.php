<?php


class atm
{


    private $cuid;
    private $apin;
    public function pinchange($cuid,$apin)
    {
        echo $this->cuid=$cuid."<br>";
        echo $this->apin=$apin."<br>";
    }
    public function chk($cuid,$apin)
    {
        echo $this->cuid=$cuid."<br>";
        echo $this->apin=$apin."<br>";
    }
    public function mist($cuid)
    {
       echo $this->cuid=$cuid;
    }
    
}
$g=new atm;
$g->chk(6065065955,5655);
$g->pinchange(14568594502050,1545);

?>