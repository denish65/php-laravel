function clr()
{
    document.getElementById("result").value="";
}

function writetxt(val)
{

    document.getElementById("result").value+=val;
}


function finalresult()
{
    var x=document.getElementById("result").value;
    var y=eval(x);
    document.getElementById("result").value=y;


}














