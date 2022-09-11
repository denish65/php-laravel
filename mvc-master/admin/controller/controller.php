<?php

require_once("model/model.php");
class controller extends model
{

    public function __construct()
    {
        
        parent::__construct();
    
        if(isset($_POST["log"]))
        {

            $em=$_POST["email"];
            $pass=$_POST["pass"];

            $chk=$this->adminlogin("admin",$em,$pass);


            if($chk)
            {
                echo  "<script>
                         alert('you are loggd in as admin success fully')
                         window.location='dashbord'
                      </script>";
            }
            else
            {
                echo "<script>
                     alert('your email and password are incorrect try again ')
                     window.location='./'
                     </script>";
            }


        }

        if(isset($_GET["logout"]))
        {

            $chk=$this->logout();
            if($chk)
            {
                echo "<script>
                        alert('you are log-out success fully')
                        window.location='./'
                     </script>";
            }
        }





























        $shw=$this->selectdata("contact");


        if(isset($_GET["delid"]))
        {
            $did=$_GET["delid"];

            $id=array("cid"=>$did);

            $chk=$this->deldata("contact",$id);

            if($chk)
            {

                echo "<script>
                    alert('your data deleted success fully')
                    window.location='manege'
                     </script>";
            }


        }


       $st= $this->selectdata("state");
       $ct= $this->selectdata("city");







       if(isset($_POST["pro"]))
       {

        date_default_timezone_set("Asia/Calcutta");
        $nm=$_POST["name"];
        $em=$_POST["email"];
       

        $tmp_name=$_FILES["img"]["tmp_name"];
        $type=$_FILES["img"]["type"];
        $size=$_FILES["img"]["size"]/1024;
        $path="uploads/customer/".$_FILES["img"]["name"];
        move_uploaded_file($tmp_name,$path);

        $st=$_POST["state"];
        $ct=$_POST["city"];
      

        $date_time=date('d/m/Y H:i:s a');


        $data=array("name"=>$nm,"email"=>$em,"images"=>$path,"sid"=>$st,"cid"=>$ct,"register_date_time"=>$date_time);

        $chk=$this->insertdata("data",$data);

        if($chk)
        {
            echo "<script>
                   alert('your message send success fully')
                   window.location='form'
                 </script>";
        }
        else
        {
            echo "<script>
                   alert('somthing went wrong try again')
                   window.location='form'
                 </script>";

        }


       }


       $shd=$this->selectdata("data");














       if(isset($_GET["deldata"]))
       {

        $did=$_GET["deldata"];
         
        $id=array("did"=>$did);

        $chk=$this->deldata("data",$id);

        if($chk)
        {
            echo "<script>
                alert('your data delted success fuuly')
                window.location='manegedata'
                 </script>";
        }
        else
        {
            echo "<script>
            alert('somthing went wrong try again')
            window.location='manegedata'
             </script>";
        }




       }







       if(isset($_GET["editdata"]))
       {

        $id=$_GET["editdata"];
        $editd=$this->editdata('data','did',$id);



       }






























   if($_SERVER["PATH_INFO"])
   {
    switch($_SERVER["PATH_INFO"])
    {

        case '/':
            require_once("login.php");
            break;

            case '/dashbord':
                require_once("navbar.php");
                require_once("dashbord.php");
                require_once("footer.php");
                break;


                case '/manege':
                    require_once("navbar.php");
                    require_once("manege.php");
                    break;

                    case '/form':
                        require_once("navbar.php");
                        require_once("form.php");
                        require_once("footer.php");
                        break;

                        case '/manegedata':
                            require_once("navbar.php");
                            require_once("manegedata.php");
                            require_once("footer.php");
                            break;


                            
            
    }
   } 
    }



}

$denish=new controller;



?>