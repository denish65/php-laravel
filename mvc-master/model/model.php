

<?php


class model 
{



    public $connection="";
    public function __construct()
    {
        try
        {
            $this->connection=new mysqli("localhost","root","","mvc2");
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection,$e));
        }
    }


    public function insertdata($table,$data)
    {

        $k=array_keys($data);
        $kk=implode(",",$k);

        $v=array_values($data);
        $vv=implode("','",$v);

        $insert="insert into $table($kk)values('$vv')";
        $query=mysqli_query($this->connection,$insert);
        return $query;
    }


}




?>