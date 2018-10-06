<?php
include 'php/dbconnect.php';
             $sql = "SELECT about_me  FROM Bio ORDER BY user_id DESC";
             $result = $conn->query($sql);

         if ($result->num_rows > 0) {
 // output data of each row
 $row = $result->fetch_assoc();
            //  while($row = $result->fetch_assoc()) {
            //   echo "<br> user_id: ". $row["user_id"]. " about_me: ". $row["about_me"]. "<br>";
            //      }
                 } else {
                     echo "0 results";
                 }

                 $conn->close();
                 ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    
   


    <link rel="stylesheet" type="text/css" href="css/portfolio.css" />

</head>
<body onload="slide();">
    <div id="login">
       <label for="username">Username</label> :<input type="text" class="log" placeholder="username" id="username"><br><br>
       <label for="password">Password</label> :<input type="password" class="log" id="password"><br><br>
        <button type="submit" id="loginsub">login</button>
    </div>
    <div class="container">
     
        <div class="box2">
            <img src="img/frame.png" alt="" width="12%" height="60px" margin-left="90px" class="">
            <nav>
                <ul class="navmenu">
                    <li ><a  href="#" id="click"><i class="fa fa-user-circle-o" aria-hidden="true" ></i>
                            </a></li> 
                    <li class="dropdown"><a href="#" class="profile links" id="profiledropdown">Profile</a></li>         
                    <li><a href="portfolio.php" class="links">Home</a></li>
                    <li><a href="#"  class="sos links" id="bardom" >Social</a></li>
                    
                </ul>
                <ul class="profileicons" id="bar">
                    <li class="list-item-social-icon" ><a  href="https://www.instagram.com/duke_tonye/" target ="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
                            </a></li>
                    <li class="list-item-social-icon "><a  href="https://twitter.com" target ="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-item-social-icon"><a  href="https://www.facebook.com/tonye.duke1" target ="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-item-social-icon"><a  href="https://github.com/Lianwhite" target ="_blank"><i class="fa fa-github"></i></a></li>  
                </ul>      
            </nav>

    </div>
      
    <div class="section2">
    
      <div class="p1">
          
        <p class="span1">Hi, <br>
            I'm <span class="span">D</span>uke, <br> Front-end developer.
        </p>
        
        <div id="profile">
            <table border="0.5" opacity="0">
                <thead>
                    <thead>
                        <tr>
                            <td>Firstname:</td>
                            <td>Duke</td>
                        </tr>
                        <tr>
                            <td>Lasttname:</td>
                            <td>Tonye</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>duketonye33@gmailcom</td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>1 khana Street</td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td>07032078649</td>
                        </tr>
                        <tr>
                            <td>Early life and family:</td>
                            <td>Lorem, ipsum dolor sit amet consectetur 
                            </td>
                        </tr>
                        <tr>
                            <td>Education :</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>
                        <tr>
                            <td>Future Works:</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                        </tr>
                  </table>
          </div>
          
          
            
      </div>
     
    </div>
    <div class="section3">
        <div>
          <img src="img/duke.jpg" alt="" class="duke">
          <div class="p2 about"><p class="p3"><h2>ABOUT ME</h2></p>
           <p><?php echo $row["about_me"] ?>  </p>
          </div>
        </div>
        <div class="html">
            <div id="duke">
            <img  />
            </div>
            <div class="p2 exp"><p class="h2"><h2>EXPERIENCE</h2></p>
                <p>My orientation about Operating System has changed. 
                I had to ditch my windows mentality and become open to a New
                different and better way of operating my computer. I was 
                introduced to the open source world and got to know Linux
                Ubuntu.
                <p>Technically, i've learnt things ranging from softwares, UI/UX design,
                new programming languages, web design, web hosting management, etc.</p>
                </p>
            </div>
    
        </div>
    </div>

    <div class="contact-section ">
        <h2 class="contact_me">CONTACT ME</h2>
        <div class="contact">
            <input type="text" placeholder="Name" class="contact_input">
            <input type="text" placeholder="Email Address" class="contact_input">
            <input type="text" placeholder="Phone Number" class="contact_input">
            <input type="text" placeholder="Message" class="contact_input"> 
        </div>
        <button type="submit" class="contact-button">Send</button>
    </div>
    

    <footer>copyright&COPY;2018</footer>



 

    


             <script src="javascript/portfolio.js"></script>


</body>
</html>