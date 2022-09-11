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


        jQuery("#btn").click(function(){


            var ag=document.getElementById("age").value;


            if(ag <=15)
            {
                alert("i am not eligible for voting")
            }
            else
            {
                alert("i am eligible for voting")

            }

        });
    });
</script>





<center>
    <input type="text" name="age" id="age" placeholder="enter your age" > 
    <button type="button" id="btn" > send </button>
</center>

    
</body>
</html>