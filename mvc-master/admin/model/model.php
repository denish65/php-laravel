

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



    public function adminlogin($table,$em,$pass)
    {

        $sel="select * from $table where email='$em' and password='$pass'";
        $log=mysqli_query($this->connection,$sel);
        $result=mysqli_fetch_array($log);
        $no=mysqli_num_rows($log);
        if($no)
        {
            $_SESSION['aid']=$result['aid'];
            $_SESSION["email"]=$result["email"];
            return true;
        }
        else
        {
            return false;
        }
    }

    public function logout()
    {
        unset($_SESSION["aid"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }





































   















    public function selectdata($table)
    {

        $sel="select * from $table";
          $query=mysqli_query($this->connection,$sel);
          while($fetch=mysqli_fetch_array($query))
          {
            $arr[]=$fetch;
          }
          return $arr;
    }


    public function deldata($table,$id)
    {

        $key=array_keys($id);
        $key1=implode(",",$key);

        $v=array_values($id);
        $value=implode("','",$v);


        $del="delete from $table where $key1='$value'";
        $query=mysqli_query($this->connection,$del);
        return $query;
    }




    public function editdata($table,$column,$id)
    {

        $select="select * from $table where $column='$id'";
        $query=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($query);
        $arr[]=$fetch;
        return $arr;


    }
    

    public function upddata($table,$nm,$em,$path,$column,$id)
    {

        $upd="update $table set name='$nm',email='$em',images='$path' where $column='$id' ";
        $query=mysqli_query($this->connection,$upd);


    }






}




?>