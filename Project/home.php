<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- Online bootstrap-css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

  <!-- Local bootstrap-css -->
  <link rel="stylesheet" href="./css/bootstrap-css/bootstrap.css" />

  <!-- Css File -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Brand Icon -->
  <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />

  <?php
  include("./include/header.php")
  ?>

</head>

<body>
  <!-- Login successful alert starts here.  -->
  <!-- <?php
        // Check if error messages are set and display them using JavaScript
        // if (isset($_SESSION['success_message'])) {
        //   echo "<script>alert('{$_SESSION['success_message']}');</script>";
        //   unset($_SESSION['success_message']); // Clear the error message
        // }
        ?> -->

  <!-- Login successful alert starts here.  -->

  <!-- Desktop View Learning Management starts here. -->
  <div class="container">
    <div class="row m-4 mt-5">

      <div class="col-md-1"></div>

      <div class="col-md-4 learning_display ">
        <h4 class="mt-5"> <strong>LEARNING MANAGEMENT SYSTEM</strong> </h4>
        <h1>Watch <span>lecture videos</span> of some of the best tutors on <span>programming languages</span> </h1>
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-5 video_display mt-5">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Wz19nXWJZbk?si=_N3huQykuSyDfHDg" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <!-- Desktop View Learning Management ends here. -->

  <!-- Mobile View Learning Management starts here. -->
  <div class="learning_display_mobile">
    <h4> <strong>LEARNING MANAGEMENT SYSTEM</strong> </h4>
    <h1>Watch <span>lecture videos</span> of some of the best tutors on <span>programming languages</span> </h1>
  </div>

  <div class="video_display_mobile mt-5">
    <iframe width="450" height="300" src="https://www.youtube.com/embed/Wz19nXWJZbk?si=_N3huQykuSyDfHDg" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
  <!-- Mobile View Learning Management starts here. -->

  <div class="container">
    <div class="row">
      <p class="Trust_Us_Text mt-5">We collaborate with over a thousand universities and companies and are trusted by over millions of learners around the world</p>
    </div>
  </div>

  <!-- Desktop View for Trusted By starts here. -->
  <div class="container trust_row bg-white">
    <div class="row trust_row_1 bg-white">
      <div class="col">
        <img src="./images/Trusted_By/download_1.png" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_2.png" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_3-removebg-preview.png" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_4.png" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_5.png" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_6-removebg-preview.png" width="93" height="58">
      </div>
    </div>

    <div class="row mt-5 trust_row_2 bg-white">

      <div class="col">
        <img src="./images/Trusted_By/download_7.jpeg" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_8.png" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_9-removebg-preview.png" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_10.jpeg" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_11.png" width="93" height="58">
      </div>

      <div class="col">
        <img src="./images/Trusted_By/download_12.png" width="93" height="58">
      </div>
    </div>
  </div>
  <!-- Desktop View for Trusted By ends here. -->

  <!-- Mobile View for Trusted By starts here. -->
  <div class="container trust_row_mobile text-center">
    <div class="row trust_row_mobile_1">
      <div class="col">
        <img src="./images/Trusted_By/download_1.png" width="93" height="58">
      </div>
      <div class="col">
        <img src="./images/Trusted_By/download_2.png" width="93" height="58">
      </div>
      <div class="col">
        <img src="./images/Trusted_By/download_3-removebg-preview.png" width="93" height="58">
      </div>
    </div>

    <div class="row mt-4 trust_row_mobile_2">
      <div class="col">
        <img src="./images/Trusted_By/download_4.png" width="93" height="58">
      </div>
      <div class="col">
        <img src="./images/Trusted_By/download_5.png" width="93" height="58">
      </div>
      <div class="col">
        <img src="./images/Trusted_By/download_6-removebg-preview.png" width="93" height="58">
      </div>
    </div>

    <div class="row mt-4 trust_row_mobile_3">
      <div class="col">
        <img src="./images/Trusted_By/download_7.jpeg" width="93" height="58">
      </div>
      <div class="col">
        <img src="./images/Trusted_By/download_8.png" width="93" height="58">
      </div>
      <div class="col">
        <img src="./images/Trusted_By/download_9-removebg-preview.png" width="93" height="58">
      </div>
    </div>

    <div class="row mt-4 trust_row_mobile_4">
      <div class="col">
        <img src="./images/Trusted_By/download_10.jpeg" width="93" height="58">
      </div>
      <div class="col">
        <img src="./images/Trusted_By/download_11.png" width="93" height="58">
      </div>
      <div class="col">
        <img src="./images/Trusted_By/download_12.png" width="93" height="58">
      </div>
    </div>
  </div>
  <!-- Desktop View for Trusted By ends here. -->
  <div class="container text-center">
    <div class="row mt-5">
      <div class="col-md-2 col-12 mb-3">
        <img src="./images/content/true-agency-unsplash.jpg" class="rounded img-fluid" width="100%">
      </div>

      <div class="col-md-8 col-12 free_online_display">
        <h2><strong>Free Online Programming Courses</strong></h2>
        <p>
          These free online courses in programming have everything you need to get familiar with programming at a
          professional level. Effective and competent programmers are in high demand on the employment market.
          Covering everything from the readability of code to creating algorithms, these courses have everything
          you need to build robust and reliable programming.
        </p>
      </div>

      <div class="col-md-2 col-12">
        <img src="./images/content/thisisengineering-unsplash.jpg" class="rounded img-fluid" width="100%">
      </div>
    </div>
  </div>

  <!-- Desktop View for the free online programaming courses starts here. -->


  <!-- Desktop View for Course Cards starts here. -->
  <div class="container d-flex flex-column mb-3">
    <div class="row course_card m-5">
      <div class="card col-md-2 course_card_body" style="width: 18rem;">
        <img src="./images/content/R Programming.png" class="card-img-top img-responsive" width="18rem" height="175">
        <div class="card-body">
          <h5 class="card-title">Business</h5>
          <p class="card-text">Introduction to R Programming and Consumers Wants in Marketing Analytics.<strong>₦12,000</strong></p>
          <a href="#" class="btn course_card_btn">Start Learning</a>
        </div>
      </div>

      <div class="card course_card_body col-md-2" style="width: 18rem;">
        <img src="./images/content/technologies.jpg" class="card-img-top" width="18rem" height="175">
        <div class="card-body">
          <h5 class="card-title">Information Technology</h5>
          <p class="card-text">Introduction to Connectivity Technologies and Sensor Networks.
            <strong>₦12,000</strong>
          </p>
          <a href="#" class="btn course_card_btn">Start Learning</a>
        </div>
      </div>

      <div class="card course_card_body col-md-2" style="width: 18rem;">
        <img src="./images/content/andy-holmes-webyw4NsFPg-unsplash.jpg" class="card-img-top" width="18rem" height="175">
        <div class="card-body">
          <h5 class="card-title">Information Technology</h5>
          <p class="card-text">Advanced Diploma in Modern Application Development.
            <strong>₦12,000</strong>
          </p>
          <a href="#" class="btn course_card_btn">Start Learning</a>
        </div>
      </div>

      <div class="card course_card_body col-md-2 ml-3" style="width: 18rem;">
        <img src="./images/content/Data Analytics with Python.jpg" class="card-img-top" width="18rem" height="175">
        <div class="card-body">
          <h5 class="card-title">Information Technology</h5>
          <p class="card-text">Diploma in Data Analytics with Python - Data Reporting and Communication.<strong>₦12,000</strong></p>
          <a href="#" class="btn course_card_btn">Start Learning</a>
        </div>
      </div>
    </div>


    <div class="row course_card m-5">

      <div class="card course_card_body col-md-2" style="width: 18rem;">
        <img src="./images/content/Network Server Security.jpg" class="object-fit-lg-contain border rounded card-img-top" width="18rem" height="175">
        <div class="card-body">
          <h5 class="card-title">Information Technology</h5>
          <p class="card-text">Network Server Security - Protecting the Server and Client Computers.<strong>₦12,000</strong></p>
          <a href="#" class="btn course_card_btn">Start Learning</a>
        </div>
      </div>

      <div class="card course_card_body col-md-2" style="width: 18rem;">
        <img src="./images/content/NLP.png" class="object-fit-lg-contain border rounded card-img-top" width="18rem" height="175">
        <div class="card-body">
          <h5 class="card-title">Personal Development</h5>
          <p class="card-text">NLP - Neuro Linguistic Programming - Your Ultimate Guide To NLP.
            <strong>₦12,000</strong>
          </p>
          <a href="#" class="btn course_card_btn">Start Learning</a>
        </div>
      </div>

      <div class="card course_card_body col-md-2" style="width: 18rem;">
        <img src="./images/content/Networks and Internet Protocol.jpg" class="object-fit-lg-contain border rounded card-img-top" width="18rem" height="175">
        <div class="card-body">
          <h5 class="card-title">Information Technology</h5>
          <p class="card-text">Advanced Diploma in Computer Networks and Internet Protocol - Cloud Networking.
            <strong>₦12,000</strong>
          </p>
          <a href="#" class="btn course_card_btn">Start Learning</a>
        </div>
      </div>

      <div class="card course_card_body col-md-2" style="width: 18rem;">
        <img src="./images/content/Master Linux Shell Scripting.jpg" class="object-fit-lg-contain border rounded card-img-top" width="18rem" height="175">
        <div class="card-body">
          <h5 class="card-title">Information Technology</h5>
          <p class="card-text">Master Linux and Shell Script From Beginner to Advanced.
            <strong>₦12,000</strong>
          </p>
          <a href="#" class="btn course_card_btn">Start Learning</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Desktop View for Course Cards ends here. -->


  <!-- Desktop View for ___ starts here. -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 bg-white">
        <div id="carouselExampleRide" class="carousel slide carousel-fade" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="./images/content/Carousel_1.jpg" class="object-fit-fill border rounded d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="./images/content/Carousel_2.jpg" class="object-fit-fill border rounded d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="./images/content/Carousel_3.jpg" class="object-fit-fill border rounded d-block w-100">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
              <img src="./images/content/Carousel_4.jpg" class="object-fit-fill border rounded d-block w-100">
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

      <div class="col-md-6">
        <div class="_gradient_">
          <h2><strong>Free Online Programming Courses</strong></h2>
          <p>
            These free online courses in programming have everything you need to get familiar with programming at a
            professional level. Effective and competent programmers are in high demand on the employment market.
            Covering everything from the readability of code to creating algorithms, these courses have everything
            you need to build robust and reliable programming.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Desktop View for ___ ends here. -->

  <div class="container-fluid h-100">
    <h2 class="text-center g-3 mt-5"><strong>Best Computer Programming Certificates for 2023</strong></h2>
    <div class="row">

      <!-- Best Programming Carousel Images starts here.  -->
      <div class="col-md-6 bg-white g-3 _image">
        <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="./images/content/Carousel_5 (2).jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="./images/content/Carousel_5.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="./images/content/Comp Science Certificate.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="./images/content/Microsoft Award_1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="./images/content/Carousel_6.jpg" class="d-block w-100">
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
      <!-- Best Programming Carousel Images ends here.  -->


      <!-- Desktop View for Best Computer Programming Certificates starts here. -->
      <div class="col-md-6 text-center g-3">
        <div class="_gradient">
          <p>Computer programming certificates can indeed help IT professionals
            enhance their skills and stand out in the competitive job market.
            Here are some popular and respected certificate programs that
            provide excellent training opportunities:</p>
          <ul class="text-blue">
            <li> <span>*</span>Microsoft Certified: Azure Developer Associate </li>
            <li> <span>*</span>AWS Certified Developer - Associate</li>
            <li> <span>*</span>Certified Information Systems Security Professional (CISSP)</li>
            <li> <span>*</span>Google Associate Android Developer</li>
            <li> <span>*</span>Certified Ethical Hacker (CEH)</li>
            <li> <span>*</span>Oracle Certified Professional, Java SE Programmer (OCPJP)</li>
            <li> <span>*</span>CompTIA Security</li>
          </ul>
          <span>
            Make choices of a certification that aligns with your career
            goals and the technologies you work with or plan to work with. Additionally,
            certificates should be complemented with hands-on experience and continuous
            learning to stay updated in the fast-paced field of IT and programming.
          </span>
        </div>
      </div>
      <!-- Desktop View for Best Computer Programming Certificates starts here. -->


      <!-- Mobile View for Best Computer Programming Certificates starts here. -->
      <div class="_gradient_mobile text-center">
        <p>Computer programming certificates can indeed help IT professionals
          enhance their skills and stand out in the competitive job market.
          Here are some popular and respected certificate programs that
          provide excellent training opportunities:</p>
        <ul class="text-blue">
          <li> <span>*</span>Microsoft Certified: Azure Developer Associate </li>
          <li> <span>*</span>AWS Certified Developer - Associate</li>
          <li> <span>*</span>Certified Information Systems Security Professional (CISSP)</li>
          <li> <span>*</span>Google Associate Android Developer</li>
          <li> <span>*</span>Certified Ethical Hacker (CEH)</li>
          <li> <span>*</span>Oracle Certified Professional, Java SE Programmer (OCPJP)</li>
          <li> <span>*</span>CompTIA Security</li>
        </ul>
        <span>
          Make choices of a certification that aligns with your career
          goals and the technologies you work with or plan to work with. Additionally,
          certificates should be complemented with hands-on experience and continuous
          learning to stay updated in the fast-paced field of IT and programming.
        </span>
      </div>

      <!-- Mobile View for Best Computer Programming Certificates ends here. -->

    </div>
  </div>

  <!-- Desktop View for FAQ starts here. -->
  <div class="container">
    <div class="row">
      <div class="f-a-q">
        <hr class="above-line">
        <h1>FREQUENTLY ASKED QUESTIONS</h1>
        <hr class="below-line">
      </div>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_1" role="button"><strong>What programming languages are covered in your courses?</strong></a>
      <h5 class="faq_row_ans default-open" id="faq_row_ans_1">Our platform offers a wide range of programming courses,
        including but not limited to Python, JavaScript, Java, C++,
        and more. You can explore our course catalog to find courses on your preferred programming language.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_2" role="button"><strong>How can I enroll in a course?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_2">To enroll in a course, simply browse our course catalog,
        select the course you're interested in, and click the "Start Learning" button.
        Follow the on-screen instructions to complete the enrollment process.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_3" role="button"><strong>Are your courses suitable for beginners?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_3">Yes, we offer courses suitable for beginners, intermediate learners,
        and advanced programmers. Each course has a suggested skill level, so you can choose courses
        that match your expertise.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_4" role="button"><strong>What types of course materials are provided?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_4">Our courses include video lectures, coding exercises, quizzes, assignments,
        and downloadable resources. You'll have access to a variety of materials to enhance your learning experience.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_5" role="button"><strong>Can I access the course content at my own pace?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_5">Yes, you have the flexibility to learn at your own pace.
        Once enrolled, you can access course materials 24/7 and progress through the content at a speed that suits you.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_6" role="button"><strong> Are there any prerequisites for specific courses?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_6">Some advanced courses may have prerequisites, which will be clearly mentioned in the course description.
        We recommend reviewing the prerequisites before enrolling in such courses.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_7" role="button"><strong>How long do I have access to a course after enrolling?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_7">You'll have lifetime access to course materials after enrolling.
        You can revisit and review the content as often as you like, even after completing the course.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_8" role="button"><strong>Is there any certification upon course completion?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_8">Yes, upon successful completion of a course, you'll receive a certificate of completion.
        This certificate can be a valuable addition to your resume.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_9" role="button"><strong> What payment methods do you accept?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_9">We accept various payment methods, including credit/debit cards and online payment platforms.
        You can choose the payment option that's most convenient for you during the enrollment process.</h5>
    </div>

    <div class="row faq_row">
      <a class="btn faq_row_ques text-start" id="faq_row_ques_10" role="button"><strong> Do you offer refunds if I'm not satisfied with a course?</strong></a>
      <h5 class="faq_row_ans" id="faq_row_ans_10">Yes, we have a refund policy. If you're not satisfied with a course, you can request a refund within
        7 days of enrollment. Please review our refund policy for more details.</h5>
    </div>
  </div>
  <!-- Desktop View for FAQ ends here. -->
</body>
<?php
include("./include/footer.php")
?>
<!-- Online Bootstrap-js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!-- Bootstrap File -->
<script src="./js/home.js"></script>

</html>