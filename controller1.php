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
    <style>
        /* #massage_warning {
            width: max-content;
            height: max-content;
            border: darkcyan solid 2px;
            padding: 20px;
            color: orangered;
            background-color: #f7f7f7;
        } */
    </style>

</head>

<body>
    <?php
    // class user
    // {
    //     function login()
    //     { // include 'connection.php';
    //         $ip_user = $_SERVER['REMOTE_ADDR'];
    //         $id = "";
    //         $state = "1";
    //         $time = date("Y-m-d H:i:s");
    //         $date = "1";
    //         $fname = $_GET['fname'];
    //         $lname = $_GET['lname'];
    //         $email = $_GET['email'];
    //         $username = $_GET['username'];
    //         $password = $_GET['password'];


    //         if (!empty($password) & !empty($username)) {
    //             // اجرای کوئری INSERT
    //             $query = "INSERT INTO user (fname, lname,email,username,password,time,ip,state) 
    //   VALUES (N'$fname', N'$lname','$email','$username','$password','$time','$ip_user','$state')";
    //             $result = mysqli_query($connect, $query);

    //             if ($result) {
    //                 echo "Record added successfully.";
    //             } else {
    //                 echo "Error: " . mysqli_error($connect);
    //             }
    //         } else {
    //             echo "<h2 id='massage_warning'>یوزر و پسورد را وارد کنید</h2>";
    //         }
    //         mysqli_close($connect);
    //     }
    //     $user =new user();
    // }


    // class User
    // {


    //     private $db_host = 'localhost';
    //     private $db_user = 'root';
    //     private $db_pass = '1111';
    //     private $db_name = 'login';
    //     private $conn;

      

    //     function __construct()
    //     {
    //         $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    //         if ($this->conn->connect_error) {
    //             die("Connection failed: " . $this->conn->connect_error);
    //         }
    //     }



    //     function register()
    //     {
            

            // $stmt = $this->conn->prepare("INSERT INTO user (fname, lname,email,username,password,time,date,ip,state)
            //  VALUES ($fname, $lname, $email, $username, $password,$date, $time, $ip_user, $state)");
            // $stmt->bind_param("sss", $fname, $lname, $email, $username, $password,$date, $time, $ip_user, $state);
            // if ($stmt->execute()) {
            //     return true;
            // } else {
            //     return false;
            // }
        // }

        // function login()
        // {
        //     $stmt = $this->conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
        //     $stmt->bind_param("ss", $username, $password);
        //     $stmt->execute();
        //     $result = $stmt->get_result();
        //     if ($result->num_rows == 1) {
        //         $row = $result->fetch_assoc();
        //         return $row;
        //     } else {
        //         return false;
        //     }
        // }
    // }

    // $user = new User();
    // $user->register();
    // $user->login();

    // //ثبت زمان ورود کاربر

    // $id = 3; // شناسه کاربر
    // $sql = "INSERT INTO user (id) VALUES ('$id')";
    // mysqli_query($conn, $sql);

    // // خواندن اطلاعات زمان ورود کاربر
    // $sql = "SELECT id, time FROM user WHERE id = '$id'";
    // $result = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo "User ID: " . $row['id'] . "<br>";
    //         echo "Login Time: " . $row['time'] . "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }
    // بستن اتصال


    ?>
    <?php
  

    // if (isset($_POST['submit'])) {
     include 'connection.php';
        $ip_user = $_SERVER['REMOTE_ADDR'];
     //  $id = "";
      $state = "1";
      $time = date("Y-m-d H:i:s");
      $date = "1";
      $fname = $_post['fname'];
      $lname = $_post['lname'];
      $email = $_post['email'];
      $username = $_post['username'];
      $password = $_post['password'];


    function login(){
        $query = $connection->prepare("SELECT * FROM user WHERE username=:username");
       
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        if ( !$result ) {
            echo '<p class=".massage_error">نام کاربری یا رمزعبور وارد شده اشتباه است!</p>';
        } else {
                           
            if ( $password == $result["password"]) {
    
                $_SESSION["user"] = $result["email"];
                echo '<p class=".massage_success">شما با موفقیت وارد سایت شدید!</p>';
    
            } else {
                echo '<p class=".massage_error">نام کاربری یا رمزعبور وارد شده اشتباه است!</p>';
            }
        }
    }
    ?>

</body>

</html>