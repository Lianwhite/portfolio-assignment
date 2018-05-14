var pictures=["img/js.png","img/css.png", "img/html5.png", "img/php.png"];
var img=document.getElementById("duke").getElementsByTagName("img")[0];
var x=1;
var arrlen=pictures.length;
function slide(){
    $("#profiledropdown").click(function(){
        $("#profile").toggle();
    });

    $("#bardom").click(function(){
        $("#bar").toggle();
    });

    $("#click").click(function(){
        $("#login").toggle();
    });

img.src=pictures[0];
timer(1);
}

function timer(x){
    setTimeout(function(){
        img.src=pictures[x%arrlen];
        x+=1;
        timer(x);
    },2000);
}

document.getElementById("loginsub").onclick=function(){
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;

    if (username == "tonye" && password == "111"){
        window.location.replace("php/admin.php");
    }else{
         alert ("wrong username or password");
    }
}
