<?php
//connect to the database

$servername = 'localhost';
$username = 'root';
$password ='tamuno33';
$database ='project1';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}
else{
    echo "You are connected to the database successfully";
}


if(!empty($_POST['register_btn'])){
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Password2 = $_POST['Password2'];
    
    
if($Password==$Password2){
    //create user
    $password = md5($Password);
    $sql ="INSERT INTO login(Username, Email, Password) VALUES('$Username','$Email','$Password')";
    mysqli_query($db, $sql);
        echo 'YOU ARE NOW LOGGED IN';
    }
    else{
        echo 'your password does not match';
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <style typ"text/css">
    body{
        padding:0px;
        margin:0px;
    }

    .header{
        background-color:gray;
        color:white;
        text-align:center;
        top:0px;
        width:100%;
        padding:5px;
    }

    form{
        width:40%;
        padding:30px;
        border:1px solid black;
        margin: 5px auto;
    }

    textInput{
        margin-top:2px;
        height:28px;
        border:1px solid #5E6E66;
        font-size:1px;
        padding:1px;
        width:100%;
    }

    #error_msg{
        width:50%;
        margin: 5px auto;
        height:30px;
        border:1px;
        background:blue;
        color:red;
        text-align:center;
        padding-top:10px;
    }

    td{
        text-align:right;
    }

    
    </style>
</head>
<body>
    <div class="header">
        <h1>Register, Login and Logout user php mysql</h1>
    </div>

    <form action="">
    
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" class="textInput"</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" class="textInput" placeholder="email"</td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" class="textInput"</td>
            </tr>
            <tr>
                <td>Password again:</td>
                <td><input type="password" name="password2" class="textInput"</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="register_btn" value="register"</td>
            </tr>
        </table>
    </form>
</body>
</html>
