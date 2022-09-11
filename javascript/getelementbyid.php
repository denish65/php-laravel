<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>


    <script>

    function test()
    {


        document.getElementById("v").style="color:red; font-size:65px;  transition:1s ease all ";


    }

    function test2()
    {
        document.getElementById("v").style="color:black; font-size:20px transition:5s ease all";
    }



    </script>


</head>
<body>


    <center>
        <p id="v" > hi i am brijesh </p>
        <button type="button" id="btn" onclick="test()" >click me</button>&nbsp;

        <button type="button"  id="btn"   onclick="test2()">click me 2</button>
    </center>


    
</body>
</html>