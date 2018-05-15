<?php

include 'dbconnect.php';
if (isset($_POST['about_me'])) {
    
    $about_me = $_POST['about_me'];

    $sql ="INSERT INTO Bio(about_me) VALUES('{$about_me}')";
    if(mysqli_query($conn, $sql))
    {
        echo '<script>alert("Successful");</script>';
    }
    else{
        echo '<br>stop';
    }
}
?>

