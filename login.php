<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لاگین</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="head">
        <h2> لاگین</h2>
    </div><br><br><br>
    <div id="box_login">
        <form action="controller.php" method="post">
            <label for="username">User Name</label>
            <input type="text" name="username"><br><br>
            <label for="password">Password</label>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="LogIn">
        </form>
    </div>
    <br><br>

    <div id="box_link">
    <a href="login.php">برگشت به صفحه اصلی</a><br><br>
    <a href="signup.php">برگشت به صفحه ثبت نام</a><br><br>
    <a href="shop.php">برگشت به فروشگاه 1</a><br><br>
    <a href="shop2.php">برگشت به فروشگاه 2</a>
    </div>
 
    


</body>

</html>