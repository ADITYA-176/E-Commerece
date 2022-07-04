function check()
{
    alert("Please Login to Buy");
}


function fun(z1)
{
    console.log(z1);
    var z=String(z1);
    console.log(z);
    for(var i=0;i<z.length;i++)
    {
        console.log(z);
        if(!(z[i]>='0'&&z[i]<='9'))
        {
            return true;
        }
    }
    return false;

}
function check1()
{
    var ele=document.getElementsByClassName("NUM");
   // alert("CAME");
    for(var i=0;i<ele.length;i++)
    {
        if(ele[i].value < 0)
        {
            alert("Invalid Quantity Choosen");
            return;
        }
        if(fun(ele[i].value))
        {
            alert("Invalid Quanity Choosen");
            return;
        }
    }
    for(var i=0;i<ele.length;i++)
    {
        ele[i].value=0;
    }
}


/*
}*/
/*
function check1()
{
  //  var ele=document.getElementsByClassName("NUM");
    alert("CMAE");
    /*
    for(var i=0;i<ele.length;i++)
    {
        if(ele[i]<0)
        {
            alert("Selected Quantity Shouldn't Be Negative");
            window.location.href = "http://www.w3schools.com";
            return;
        }
        if(check2(ele[i]))
        {
            alert("Invalid Qunatity");
            window.location.href = "http://www.w3schools.com";
            return;
        }

    }
}*/