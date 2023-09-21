<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <!-- CSS File -->
    <link rel="stylesheet" href="./css/login.css">

    <!-- Brand Icon -->
    <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />

    <!-- Header File -->
    <nav class="navbar fixed-top top_nav_bar bg-white">
        <div class="container-fluid top_nav">
            <img src="./images/logo/14_Education-removebg-preview.png" width="120">
        </div>
    </nav>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="signin">
            <h1>SIGN IN</h1>
            <div class="social">
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
            <form action="./login_connect.php" method="post">
                <p>USE ENTER INFO</p>
                <input type="email" placeholder="EMAIL" class="form-control" id="login_email" name="login_email" required />
                <input type="password" placeholder="PASSWORD" class="form-control" id="login_password" name="login_password" required />
                <br>
                <a href="#">Forgot password? </a>
                <br>
                <input type="submit" value="LOGIN" />
                <p>Remember me</p>
                <small>DON'T HAVE AN ACCOUNT ? <a href="./register.php">SIGN UP</a></small>
            </form>
        </div>

</body>

</html>