function process(){
    var user=document.getElementById("userIn").value;

 var xhr=new XMLHttpRequest(); //create object
    xhr.open("GET","instantCheck(AJAX).php?Xuser="+user,true); //configure object

    xhr.onreadystatechange=function(){

        if(xhr.readyState==4 && xhr.status==200)
            var respo=xhr.responseText;
        document.getElementById("change").innerHTML=respo;

    }
xhr.send();//start the request

    setTimeout("process()",1000);


}
