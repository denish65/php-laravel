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

        function chk()
        {
            var p=document.getElementById("price").value;
            var q=document.getElementById("qty").value;
            var t=p*q;
            document.getElementById("tot").innerHTML=+t;
        }
        function b1()
        {

            document.getElementById("pr").style="display:none";
            window.print;

        }
    </script>




<style>
    #my
    {

        display: none;
    }
    #loader
    {
        width: 400px;
        height: 400px;
        background: url('images/ai-loader-opt.gif')no-repeat;
        background-size: 100% 400px;
        left: 38%;
        top: 10%;
        position: absolute;
    }

</style>










</head>
<body onload="test()" >


    <div id="loader" > </div>

    <div id="my" >
    <style>
        table
        {
            border-collapse: collapse;
            margin-top: 5%;
        }
    </style>
    <center>

    <table align="center" width="60%" border="1">
        <tr>
            <th>Id </th>
            <th>productImage </th>
            <th> productName </th>
            <th> price  </th>
            <th> qty </th>

        </tr>
        <tr align="center" >
            <td> 10101</td>
            <td><img src="images/samsung-guru.png" width="85px" height="85px"  alt="">   </td>
            <td> samsung galaxy   </td>
            <td>  Rs.   <input type="text"  name="price" id="price" value="1550"  > </td>
            <td>  <input type="number" min="1" max="10" value="1" id="qty" onchange="return chk(this.value)" > </td>

        </tr>
        <tr>

            <td align="right" colspan="5" ><h3> subtotal : Rs. <label for="" id="tot"> 1550</label></h3></td>
      

        </tr>

        
            <td align="left" colspan="5" > <button type="button" id="pr" onclick="b1()"  > Print </button> </td>
        






    </table>
</center>
    



</div>


<script>

    var abc;
    function test()
    {

        abc=setTimeout(showpage,3000);
    }
    function showpage()
    {
        document.getElementById("loader").style.display="none";
        document.getElementById("my").style.display="block";
    }
</script>
</body>
</html>