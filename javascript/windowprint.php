<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>




    <script>
        function pp()
        {

            document.getElementById("btn").style="display:none";
            window.print();
        }



    </script>

<style>
    table
    {
        border-collapse: collapse;
    }
</style>




    
    <table align="center"   cellpadding="5" cellspacing="5" border="1"  width="30%" >
        <tr> 
            <th>product name </th>
            <td> sansung guru </td>
        </tr>
        <tr> 
            <th> product price </th>
            <td> 1450 </td>
        </tr>
        <tr>  

            <th> Subtotal  </th>
            <td> Rs. 1450 -/ </td>

        </tr>
        <tr>

            <td align="right" colspan="2" id="btn"  >

                <button type="button" id="p" onclick="h()" >print bill</button>

            </td>
        </tr>

    </table>

    




</body>
</html>