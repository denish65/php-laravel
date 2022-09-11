function validate()
{

    if(document.frm.email.value=="")
    {

        alert("Please enter your email address here")
        document.frm.email.focus();
        return false;
    }


    var em=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(!em.test(document.frm.email.value))
    {
        alert("please enter your valid email Addres here")
        document.frm.email.focus();
        return false;

    }

    if(document.frm.name.value=="")
    {
        alert("Pleas enter your name here")
        document.frm.name.focus();
        return false;
    }


    var fnm=/^[A-Za-z]+$/;

    if(!fnm.test(document.frm.name.value))
    {
        alert("please enter Only alphbetic character in name here ")
         document.frm.name.focus();
         return false;
    }

}