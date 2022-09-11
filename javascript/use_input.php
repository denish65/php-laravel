<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    

    <script>

function test()
{

    var a=parseInt(document.getElementById("a").value);
    var  b=parseInt(document.getElementById("b").value);
    var c=a+b;
    document.getElementById("para").innerHTML="adition of two number :"+c;
}



    </script>



</head>
<body>


<center>
    <form action="" method="post"><br><br>
  

        <p id="para" ></p>


        <br><br>
 <label for="">enter first number :</label>
 <input type="text" name="a" id="a"><br><br><br>
 <label for="">enter second  number :</label>
 <input type="text" name="b" id="b">
<br><br><br>
<button type="button" id="btn" onclick="test()"  >submit</button>




    </form>
</center>

    
    
</body>
</html>