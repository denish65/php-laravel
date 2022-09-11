<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='jquery/jquery.js'></script>
</head>
<body>

    <script>


jQuery(document).ready(function(){

    jQuery("#btn").hover(function(){

        var name=prompt("enter your name here")
        alert("my name is :"+name)


    });




});
    </script>


    <center>
        <button type="button" id="btn" >click</button>
    </center>
    
</body>
</html>