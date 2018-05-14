<?php

include 'submitForm.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <style type="text/css">
    body{
        background-color:whitesmoke;
        width:100%;
        padding:0px;
        margin: 0 ;
    }
    
    #container{
        width: 500px;
        
        margin-top:5px;
        margin-left:400px;
        background-color:rgb(226, 216, 216);
    }

    img{
        width:100px;
        height:100px;
        margin-left:200px;
        
    }
    p{
        text-align:center;
    }
    .header{
        background-color:gray;
        height:80px;
        width:100%

    }
    
    h1{
        /* display:flex; */
        
        color:white;
        text-align:center;
        width:100%;
        position:relative;
        bottom:30px;
        
    }
    
    </style>
</head>
<body>
    <div class="header"><button type="submit" id="home">HOME</button><h1>ADMIN'S PORTAL </h1>
    
    </div>
    <div id="container">
            <img src="duke.jpg"/>
        <p>DUKE</p>

    <div>
       <form action= "<?php $_PHP_SELF ?>" method="POST" >
           
                   About_me
                  
                   <textarea name="about_me" id="" cols="69" rows="15"></textarea>
               
                   <button type="submit">submit</button>
                   


                   
              
       </form>

            
            
    </div>
    </div>
    <script type="text/javascript">
    document.getElementById("home").onclick=function(){

        window.location.replace("../portfolio.php");
   
}


    </script>
</body>
</html>