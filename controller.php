<?php

session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کنترولر</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
        if (  isset($_POST['signup'])) {
            connect();
            echo "<h2 class='massage_success'>با موفقیت وارد شدید</h2>";
    
        } else {
            echo "<h2 class='massage_warning'>یوزر و پسورد را وارد کنید</h2>";
        }
    function connect()
    {
       include 'connection.php';
        $ip_user = $_SERVER['REMOTE_ADDR'];
        $id = "";
        $state = "1";
        $time = date("Y-m-d H:i:s");
        $fname = $_post['fname'];
        $lname = $_post['lname'];
        $email = $_post['email'];
        $username = $_post['username'];
        $password = $_post['password'];

        // اجرای کوئری INSERT
        $query = "INSERT INTO user (fname, lname,email,username,password,time,ip,state) 
            VALUES (N'$fname', N'$lname','$email','$username','$password','$time','$ip_user','$state')";
        $result = mysqli_query($connect, $query);

        if ($result) {
            echo "Record added successfully.";
        } else {
            echo "Error: " . mysqli_error($connect);
        }

        mysqli_close($connect);
    }


 

    ?>
</body>

</html>