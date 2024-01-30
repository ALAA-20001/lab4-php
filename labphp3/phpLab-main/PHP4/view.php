<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'test';
$link = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);

if(! $link ) {
    die('Could not connect: ' . mysqli_error($conn));
};
$id = $_GET["id"];
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$gender = $row['gender'];
$check = $row['recive_email'];


mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: pink;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            height: 70%;
            width: 30%;
            border-radius: 5%;
            background-color:white;
            box-shadow: 3px 3px 3px;
        }
        button{
            margin-top:10px;
            color:white;
            font-size:13px;
            height:40px;
            width:80px;
            background-color:black;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View Record</h1>
        <hr>
        <h3>Name</h3>
        <?php  echo $name ?>
        <h3>Email</h3>
        <?php echo $email?>
        <h3>Gender</h3>
        <?php echo $gender?>
        <h3>Email</h3>
        <?php if($check == 'yes'){
            echo "You will Recive E-mail From us";}else{
                echo "You will not Recive E-mails From us";
            }
            ?>
        <br>
        <button onclick="location.href='task2.php'">Back</button>
    </div>
    
</body>
</html>
