<?php




class a 
{

    public function d()
    {
        echo 'i am  public <br>';
    }
    protected function f()
    {
        echo "i am protected <br>";
    }
    private function b()
    {
        echo "i am privet <br>";
    }


}
$g=new a;
$g->d();
$g->f();
$g->b();





?>