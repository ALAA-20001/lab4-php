<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'test';
    $link = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);
    
    $id = $_GET["id"];
    $query = "DELETE FROM users WHERE id = '$id'";
    if (mysqli_query($link, $query)) {
        header("location: task2.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
    mysqli_close($link);
?>