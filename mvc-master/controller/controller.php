<?php

require_once("model/model.php");
class controller extends model
{

    public function __construct()
    {
        
        parent::__construct();
    


        if(isset($_POST["send"]))
        {

            $nm=$_POST["name"];
            $em=$_POST["email"];
            $subj=$_POST["subject"];
            $msg=$_POST["message"];

            $data=array("name"=>$nm,"email"=>$em,"subject"=>$subj,"message"=>$msg);
           $chk= $this->insertdata("contact",$data);

           if($chk)
           {
            echo "<script>
                    alert('your message send success fully')
                    window.location='contact'
                 </script>";
           }
           else
           {
            echo "<script>
            alert('somthing went wrong try again')
            window.location='contact'
         </script>";
           }
        }













   if($_SERVER["PATH_INFO"])
   {
    switch($_SERVER["PATH_INFO"])
    {

        case '/':
            require_once("navbar.php");
            require_once("home.php");
            require_once("footer.php");
            break;


            case '/contact':
                require_once("navbar.php");
                require_once("contact.php");
                require_once("footer.php");
                break;
    }
   } 
    }



}

$denish=new controller;



?>