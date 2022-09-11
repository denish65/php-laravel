$(document).ready(function (){

    $("#btn1").click(function ()
    {
        $("#p").hide(4000);
    })

    $("#btn2").click(function(){
        $("#p").show(4000);
    })
    
    $("#btn3").click(function(){
        $("#p").toggle(4000);
    })
})