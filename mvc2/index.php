
<?php


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' type='text/css' media='screen' href='bootstrap/bootstrap.min.css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src='js/cal.js'></script>
</head>
<style>
    body{
        background-color: rgb(215, 234, 238);
    }
</style>
<body>

    <div class="container">


        <h3 id="he"> <i class="bi bi-list"></i>  &nbsp; &nbsp; Standard &nbsp; &nbsp;  <i class="bi bi-box-arrow-in-up-right"></i>  </h3>

        <h3 id="heq"> History &nbsp;  Memory</h3>
         


        <br><br>
        <input type="text" name="" id="result" placeholder="0">




    </div>


    <div class="container">

        <table class=" table-borderless ">

            <tr class="td1">
                <td> <button  type="button"  value="MC"  onclick="return writetxt(this.value)"  >MC</button>   </td>

                <td><button type="button"  value="MR" onclick="return writetxt(this.value)"  >MR</button>    </td>

                <td><button type="button" value="M+"  onclick="return writetxt(this.value)"  >M+</button>    </td>
                <td><button type="button"  value="M-"  onclick="return writetxt(this.value)"  >M-</button>    </td>
                <td><button type="button"  value="MS"  onclick="return writetxt(this.value)" >MS</button>    </td>
                
            </tr>
        </table>
        




            <table class="table2">
                <tr>
                    <td> <button value="%"  onclick="return writetxt(this.value)" > %</button> </td>
                    <td> <button value="CE"  onclick="return writetxt(this.value)"  >CE</button> </td>
    
                    <td> <button value="C" onclick="clr()">C</button> </td>
                    <td> <button value="X" > <i class="bi bi-x-square"></i> </button> </td>
                </tr>




                <tr>
                    <td> <button type="button"  value="1/x"  onclick="return writetxt(this.value)" > 1/x</button> </td>
                    <td> <button type="button"  value="x2"  onclick="return writetxt(this.value)" >x <sup>2</sup>  </button> </td>
    
                    <td> <button type="button"  value="2√x"  onclick="return writetxt(this.value)" >2√x</button> </td>
                    <td> <button type="button"  value="/"  onclick="return writetxt(this.value)" >/</button> </td>
                </tr>



                <tr>
                    <td> <button type="button"  value="7" onclick="return writetxt(this.value)" > 7 </button>  </td>
                    <td> <button type="button"  value="8"  onclick="return writetxt(this.value)" >8</button> </td>
    
                    <td> <button type="button"  value="9"  onclick="return writetxt(this.value)" >9</button> </td>
                    <td> <button type="button"  value="*"  onclick="return writetxt(this.value)" >*</button> </td>
                </tr>



                <tr>
                    <td> <button type="button"  value="4"  onclick="return writetxt(this.value)" > 4</button> </td>
                    <td> <button type="button"  value="5"  onclick="return writetxt(this.value)" >5</button> </td>
    
                    <td> <button type="button" value="6"   onclick="return writetxt(this.value)" >6</button> </td>
                    <td> <button type="button" value="-"   onclick="return writetxt(this.value)" >-</button> </td>
                </tr>




                <tr>
                    <td> <button type="button"  value="1"  onclick="return writetxt(this.value)"  >1 </button> </td>
                    <td> <button type="button" value="2"   onclick="return writetxt(this.value)" >2</button> </td>
    
                    <td> <button type="button"  value="3"  onclick="return writetxt(this.value)" >3</button> </td>
                    <td> <button type="button"  value="+"  onclick="return writetxt(this.value)" > + </button> </td>
                </tr>

                <tr>
                    <td> <button type="button" value=""   onclick="return writetxt(this.value)" > +/-</button> </td>
                    <td> <button type="button"  value=""  onclick="return writetxt(this.value)" >0</button> </td>
    
                    <td> <button  type="button"  value="."  onclick="return writetxt(this.value)"  >.</button> </td>
                    <td class="equale" > <button type="button" value="="  onclick="finalresult()" > = </button>  </td>
                </tr>
                    























        </table>

    </div>




    
</body>
</html>