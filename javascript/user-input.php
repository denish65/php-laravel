<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/valid.js'></script>
</head>
<style>
    body 
    {
        background-color: lightblue;
    }
</style>
<body  >



    <center>

        <form method="post" name="frm" action="loader.php"   onsubmit="return validate(this.value)" >

            <p  id="h" >   </p>

            <label for=""> Enter Email </label>
            <input type="text" id="email" name="email" placeholder="enter Email" >
<br><br><br><br>
            <label for=""> Enter Name </label>
            <input type="text" id="name" name="name" placeholder="enter Name" >


            <br><br><br>
            <button type="submit" name="sub" id="btn"  > submit </button>









        </form>


    </center>



    
</body>
</html>