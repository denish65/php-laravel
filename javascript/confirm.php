<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    

</head>
<body>
    
    <script>

        function test()
        {

            if(confirm("are you sure to log out ?"))
            {
                alert("you are logut successfully")
                window.location="https://www.twitter.com";
            }
            else
            {
                window.location='confirm.php';
            }
        }
    </script>



<center> 
    <button type="button" onclick="test()" > logout here</button>
</center>

</body>
</html>