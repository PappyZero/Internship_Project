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
    <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />

    <title>Document</title>


</head>

<body>
    <!-- Desktop View Top Nav Starts Here -->
    <nav class="navbar bg-white top_nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/logo/14_Education-removebg-preview.png" alt="Logo" width="120" height="74" class="d-inline-block align-text-top"></a>
            <div class="gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="./login_signup.php" role="button">LOGIN</a>
                <a class="btn btn-primary" href="./login_signup.php" role="button">SIGN IN</a>
            </div>
        </div>
    </nav>
    <!-- Desktop View Top Nav Ends Here -->

    <nav class="navbar navbar-expand-lg bg-grey">
        <div class="container-fluid mid_nav">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav_items" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Overview
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Online Lessons</a></li>
                            <li><a class="dropdown-item" href="#">Course Builder</a></li>
                            <li><a class="dropdown-item" href="#">Page Builders</a></li>
                            <li><a class="dropdown-item" href="#">Live Streams</a></li>
                            <li><a class="dropdown-item" href="#">Advanced Quiz</a></li>
                            <li><a class="dropdown-item" href="#">Student Management</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resource
                        </a>
                        <ul class="dropdown-menu">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Live Demo
                        </a>
                        <ul class="dropdown-menu">
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
            <div class="gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary mobile_top_nav" href="./login_signup.php" role="button">LOGIN</a>
                <a class="btn btn-primary mobile_top_nav" href="./login_signup.php" role="button">SIGN IN</a>
            </div>
            <!-- Mobile View Top Nav Ends Here -->
        </div>


    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 bg-white  _image">
                <div id="carouselExampleRide" class="carousel slide carousel-fade" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="./images/content/Carousel_1.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="./images/content/Carousel_2.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="./images/content/Carousel_3.jpg" class="d-block w-100">
                        </div>

                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="./images/content/Carousel_4.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-6 _gradient">
                <p>hdhdhddhdhdhd</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 _gradient">
                <h2>Best Computer Programming Certificates for 2023</h2>
                <p>Computer programming certificates can indeed help IT professionals
                    enhance their skills and stand out in the competitive job market.
                    Here are some popular and respected certificate programs that
                    provide excellent training opportunities:</p>
                <ol>
                    <li><span>*</span> Microsoft Certified: Azure Developer Associate </li>
                    <li> <span>*</span> AWS Certified Developer - Associate</li>
                    <li> <span>*</span> Certified Information Systems Security Professional (CISSP)</li>
                    <li> <span>*</span> Google Associate Android Developer</li>
                    <li> <span>*</span> Certified Ethical Hacker (CEH)</li>
                    <li> <span>*</span> Oracle Certified Professional, Java SE Programmer (OCPJP)</li>
                    <li> <span>*</span> CompTIA Security</li>
                </ol>
                <p>
                    Make choices of a certification that aligns with your career
                    goals and the technologies you work with or plan to work with. Additionally,
                    certificates should be complemented with hands-on experience and continuous
                    learning to stay updated in the fast-paced field of IT and programming.
                </p>

            </div>

            <div class="col-md-6 bg-white  _image">
                <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="./images/content/Carousel_5 (2).jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="./images/content/Carousel_5.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="./images/content/Carousel_6.jpg" class="d-block w-100">
                        </div>

                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="./images/content/Carousel_8.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>