<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN IN / SIGN UP</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <!-- CSS File -->
    <link rel="stylesheet" href="./css/login_signup.css" />

    <!-- Brand Icon -->
    <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />

    <!-- Header File -->
    <nav class="navbar fixed-top top_nav_bar bg-white">
        <div class="container-fluid top_nav">
            <img src="./images/logo/14_Education-removebg-preview.png" width="120">
        </div>
    </nav>
    <?php
    //include("./header.php")
    ?>
</head>

<body>
    <div class="container">
        <input type="checkbox" id="toggle" />
        <div class="signin">
            <h1>SIGN IN</h1>
            <form>
                <div class="social">
                    <a href=""><i class="fab fa-google-plus-g"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>USE ENTER INFO</p>
                <input type="email" placeholder="EMAIL  " />
                <input type="password" placeholder="PASSWORD  " />
                <a href="#">Forgot password? </a>
                <input type="submit" formaction="#" value="LOGIN" />
                <p>Remember me</p>
                <input type="checkbox" checked="checked" />
                <small>DON'T HAVE AN ACCOUNT ? <label for="toggle">SIGN UP</label>
                </small>
            </form>
        </div>
        <div class="signup">
            <h1>CREATE AN ACCOUNT</h1>
            <form>
                <div class="social">
                    <a href="https://gmail.com"><i class="fab fa-google-plus-g"></i></a>
                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>OR ENTER YOUR DETAILS</p>
                <input type="text" placeholder="LAST NAME" />
                <input type="text" placeholder="FIRST NAME" />
                <input type="email" placeholder="EMAIL" />
                <input type="password" placeholder="PASSWORD" />
                <input type="password" placeholder="CONFIRM PASSWORD" />
                <input type="submit" value="CREATE ACCOUNT" />
                <small>ALREADY HAVE AN ACCOUNT ?
                    <label for="toggle">SIGN IN</label>
                </small>
            </form>
        </div>
    </div>
</body>
<!-- Online Bootstrap-js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!-- Local bootstrap-js -->
<script src="./js/bootstrap-js/bootstrap.js"></script>

<!-- JavaScript File -->
<script src="./js/login_signup.js"></script>

</html>