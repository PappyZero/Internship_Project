<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Online bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <!-- Local bootstrap-css -->
    <link rel="stylesheet" href="./css/bootstrap-css/bootstrap.css" />

    <!-- Css File -->
    <link rel="stylesheet" href="./css/header.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <!-- Brand Icon -->
    <link rel="shortcut icon" href="../images/logo/14_Education.jpg" type="image/x-icon" />

    <title>HEADER</title>


</head>

<body>
    <!-- Desktop View Top Nav Starts Here -->
    <nav class="navbar bg-white top_nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/logo/14_Education-removebg-preview.png" alt="Logo" width="120" height="74" class="d-inline-block align-text-top top_nav_img">
            </a>

            <p class="mt-3 nav_brand_text">Enlightened Tempest</p>

            <div class="gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="./logout.php" role="button">LOGOUT</a>
            </div>
        </div>
    </nav>
    <!-- Desktop View Top Nav Ends Here -->

    <!-- Desktop View Middle Nav Starts Here. -->
    <nav class="navbar navbar-expand-lg bg-blue bg-gradient">
        <div class="container-fluid mid_nav">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav_items" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="over_view" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Overview
                        </a>
                        <ul class="dropdown-menu" id="overview_dropdown">
                            <li><a class="dropdown-item" href="#">Online Lessons</a></li>
                            <li><a class="dropdown-item" href="#">Course Builder</a></li>
                            <li><a class="dropdown-item" href="#">Page Builders</a></li>
                            <li><a class="dropdown-item" href="#">Live Streams</a></li>
                            <li><a class="dropdown-item" href="#">Advanced Quiz</a></li>
                            <li><a class="dropdown-item" href="#">Student Management</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="reso_urse" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resource
                        </a>
                        <ul class="dropdown-menu" id="resourse_dropdown">
                            <li><a class="dropdown-item" href="#">Documentation</a></li>
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">Facebook Community</a></li>
                            <li><a class="dropdown-item" href="#">LinkedIn Community</a></li>
                            <li><a class="dropdown-item" href="#">My Account</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pricing
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="live_demo" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Live Demo
                        </a>
                        <ul class="dropdown-menu" id="livedemo_dropdown">
                            <li><a class="dropdown-item" href="#">Student Demo</a></li>
                            <li><a class="dropdown-item" href="#">Starter Theme</a></li>
                            <li><a class="dropdown-item" href="#">Teacher Demo</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Teach Here
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Online Degree
                        </a>
                    </li>

                </ul>
            </div>

            <!-- Mobile View Top Nav Starts Here -->
            <p class="mt-3 mobile_nav_brand_text">Enlightened Tempest</p>

            <!-- <div class="gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary mobile_top_nav" href="./login_signup.php" role="button">LOGIN</a>
                <a class="btn btn-primary mobile_top_nav" href="./login_signup.php" role="button">SIGN IN</a>
            </div> -->
            <!-- Mobile View Top Nav Ends Here -->
        </div>
    </nav>
    <!-- Desktop View Middle Nav Ends here. -->

    <!-- Online Bootstrap-js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- JavaScript File -->
    <script src="./js/header.js"></script>
</body>


</html>