<?php




class a
{

    public $public="hello i am public";
    private $privet="hello i am privet";
    protected $protected="hello i am protected";


    public function display()
    {
        echo $this->public."<br>";
        echo $this->privet."<br>";
        echo $this->protected."<br>";

    }




}

$f=new a;
echo $f->public.'<br>';
echo $f->privet.'<br>';
echo $f->protected.'<br>';

$g->display();


?>