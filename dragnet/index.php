<?php
// require_once "contactDb.php";
        
        //Message Variables
        $msg = '';
        $msgClass = '';

        //Check for Submit
        if(filter_has_var(INPUT_POST,'submit')){
        // echo 'Submitted';
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        // $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
        }

        //Check Required Fields
        if(!empty($name) && !empty($email) && !empty($message)){
              //passed
              //Check Email
          if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            //failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
          }
          else {
            //passed
            // Recipient Email
            $toEmail = 'dragnetgroup@gmail.com';
            $subject = 'Contact Feedback From ' .$name;
            $body = '<html><body>';
            $body .= '<div style="width: 100%; height: 100%; align-items:center; background-color:black; color:white;"><h1 style="color:#f40; padding-left: 30px;">Feedback Form</h1>';
            $body .= '<p style="color:#fff;font-size:16px; padding-left: 30px;"> <strong>NAME:</strong> ' .$name. '</p>';
            $body .= '<p style="color:#fff;font-size:16px; padding-left: 30px;"> <strong>EMAIL:</strong> ' .$email. '</p>';
            $body .= '<p style="color:#fff;font-size:16px; padding-left: 30px;"> <strong>MESSAGE:</strong> ' .$message. '</p> </div>';
            $body .= '</body></html>';

            //Email Headers
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        

            //Additional Headers
            $headers .= 'From: ' .$name. '<' .$email. '>' ."\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                //Email Sent
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            }
            else{
                   //Email Failed
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
          }
        } else {
              //Failed
              $msg = 'Please fill in all fields';
              $msgClass = 'alert-danger';
        }
          ?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DRAGNET OFFICIAL WEBSITE</title>
        <meta name="description" content="DRAGNET OFFICIAL WEBSITE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">

        <!-- Javascript -->
        <!-- <script src='subform.js'></script> -->
        <!-- Bootstrap CSS-->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- -- font-awesome-- -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <!-- Tweaks for older browsers-->
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endifx]-->
            
            <!-- -------- fonts ------- -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <body>

        <!-- Your wave goes here... -->
      
      <div class="wave-container">
          
        <div class="titleBx container">
          <h1>BUILDING A WORLD OF HAPPY PEOPLE</h1>
          <p class="firstPara">
            We are fully and freely committed to Building a Community of Successful and Wealthy People through Opportunities and Empowerment...
          </p>
          <a href="services.php"><button type="button" class="btn btn-large text-light pr-2 knowBtn">Know More <i class="fa fa-arrow-right"></i></button></a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#0099ff" fill-opacity="1" d="M0,32L120,64C240,96,480,160,720,181.3C960,203,1200,181,1320,170.7L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
        
        </svg>
        

      


<!-- Background image -->
        <section class="head-section">
  >
    <!-- navbar-->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top shadow-sm bg-white">
      
      <a href="index.php" class="navbar-brand" id="dragnetText"><img src="images/logonav.png" alt="dragnetlogo" class="logo">Dragnet</a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#index.html" class="nav-link text-primary">Home</a></li>
            <li class="nav-item"><a href="#about-us" class="nav-link text-primary">About</a></li>
            <li class="nav-item"><a href="#services" class="nav-link text-primary">Services</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link text-primary">Contact</a></li>
        </ul>
            <div class="navbar-text ml-lg-3">
            <!-- <a href="#" onclick="myFunction()" class="btn btn-primary text-white shadow">Talk to Us</a> -->
            <a href="#contact" class="btn text-white shadow talkBtn">Talk to Us</a>
            </div>
        </div>
      </nav>  
      </section>
        <!-- Hero Section-->

</div>
        <!-- About Dragnet -->

  
        <section id="about-us">
        <div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="images/header.jpg" class="d-block mx-lg-auto img-fluid imgContainer" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    
    <div class="col-lg-6">
    <div class="horizontal"></div>
      <h1 class="display-5 fw-bold lh-1 mb-3 mt-2 text-dark aboutText">ABOUT <strong>DRAGNET</strong></h1>
      <p class="lead">Dragnet Investment Limited is a chain of related industries in the food, technology and education.

Dragnet brings a breath of fresh air to the global Food Retail Industry by infusing multi-level marketing system into its  marketing and promotional strategy.

This integration is aimed at creating a community of affiliates and users whose daily needs and financial needs are met through the same system.

At dragnet our focus is building a global community of successful people who aspire to create sustainable wealth, attain financial freedom and impact the world positively while doing so.</p>
      
    </div>
  </div>
</div>
</section>

       <section class="services" id="services">
       <div class="container col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6 imgContainer">
      <img src="images/happyteam.jpg" class="d-block mx-lg-auto img-fluid service-img" alt="Bootstrap Themes" width="800" height="700" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3 text-dark">what we <strong> DO</strong></h1>
      <p class="lead">Dragnet Group empowers people to succeed, create sustainable wealth and attain financial freedom by providing them with opportunities to earn passive income, invest for interest and gain personal development while doing so.

You can earn passive income by becoming a registered affiliate of this revolutionary Multi-Level Marketing System that already eliminates the challenges of other traditional MLMs around the world.

You can become an investor with Dragnet and earn an interest daily on the amount invested.

And through the process the company is committed to your personal development through trainings and valuable resource materials.
</p>
<a href ="services.php"><button type="button" class="btn btn-lg px-4 me-sm-3 serviceBtn">Read More</button></a>

</section>

<!-- ------ Contact Us ------ -->
<section id="contact">

<div class="container-fluid col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-4 fw-bold lh-1 mb-3 text-dark">Reach Out to Us</h1>
      <p class="col-lg-10 fs-4 text-center">You can contact or follow us through the given information below and our various
          social media handles...
      </p>
    <div class="faBx">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-envelope"></i></a>
        <a href="#"><i class="fa fa-whatsapp"></i></a>
    </div>
    </div>
  
      <form method="POST" id="contactForm" class="p-5 border rounded-3 bg-light">
          <h4 class="text-primary text-center">Feedback Form</h4>
        <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control" id="contactName" placeholder="Enter Full Name"> 
        <!--value="<?php echo isset($_POST['name']) ? $name : ''; ?>-->
        

        </div>
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="contactEmail" placeholder="Enter Email"
          value="<?php echo isset($_POST['email']) ? $email : ''; ?>
        ">
        </div>
        
        <div class="form-floating mb-3"><textarea class="form-control" name = "message" id="contactText" placeholder="Enter your Message Here"
        value="<?php echo isset($_POST['message']) ? $message : ''; ?>
        "></textarea>
      </div>
    
        <div class="contactSubmit">
        <input type="button" class="w-100 btn btn-lg btn-primary" name="submit" value="Send a Message" id="submitBtn" onclick="contact()">
        </div>
        <span id="feedResponse"></span>


        <hr class="my-4">
        <small class="text-muted">We are open to hear you out and meet your needs...</small>
      </form>
    </div>
  </div>
</div>


</section>

        <!-- Footer-->
        <div class="py-5" id="footerbox">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-lg-0">
                    <h5><strong>Dragnet</strong></h5>
                        <ul class="contact-info list-unstyled" >
                            
                            <li><strong>Lokoja Office: </strong> Suites 5&6, Okonu Plaza, Opposite Specialist Hospital, Lokoja, Kogi State..</li>
                            <li><strong>Lagos Office: </strong> No. 5 Osho Street, Opebi, Lagos State..</li>
                            <li><i class="fa fa-envelope mt-3"><span style="font-size:1rem; font-weight: 500; font-family: 'poppins', sans serif; color: #fff;">  dragnetgroup@gmail.com</span></i></li>
                          </ul>
          
                    </div>


                    <!-- <div class="status"></div> -->
                <div class="col-lg-4 col-md-6">
                <!-- onsubmit="return doSubscribe();" -->
                    <form method="POST" id="subForm">   
                    <h5>Subscribe to our Newsletter</h5>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <input type="text" placeholder="Enter Full Name" name="name" id="name" class="col-6 mr-2 form-control form_data"> 
                    <span class="text-danger hidden" id="nameError"></span> 
                    <input type="email" placeholder="Enter Email" name="email" id="email" class="col-6 mr-2 form-control form_data">
                    <span class="text-danger hidden" id="emailError"></span>  
                  </div>
              
                    <!-- <button type="button" class="btn btn-lg px-4 me-md-2 mt-2" id="subscribeBtn">Subscribe</button> -->
                    <input type="button" name="submit"  class="btn btn-lg px-4 me-md-2 mt-2"  id="submit" value="Subscribe" onclick="subscribe()">
                    <p class="mt-2 subPara">Subscribing to our Newsletter will help you know when we will officially launch our services...</p>
                    </form>
                    <div id="messageBx">
                    <p></p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Links</h5>
                        <ul class="links list-unstyled">
                            <li> <a href="#index.php">Home</a></li>
                            <li> <a href="#about-us">About</a></li>
                            <li> <a href="#services">Services</a></li>
                            <li> <a href="#contact">Contact</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="lastfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center text-md-left">
                    <p class="mb-md-0 py-2"> &copy; 2021 Dragnet Investment Limited. All rights reserved. </p>
                </div>
                <div class="col-md-5 text-center text-md-right">
                    <p class="mb-0"><a href="#" class="external text-white"></a> </p>
                </div>
            </div>
        </div>
        </div>

        <!-- JavaScript -->
        <script>
          function subscribe() {
    // Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();
    
    // Instantiating the request object
    request.open("POST", "subscribeDb.php");
    
    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("messageBx").innerHTML = this.responseText;
        }
    };
    
    // Retrieving the form data
    var subForm = document.getElementById("subForm");
    var formData = new FormData(subForm);

    // Sending the request to the server
    request.send(formData);
}

          function contact() {
    // Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();
    
    // Instantiating the request object
    request.open("POST", "contactDb.php");
    
    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("feedResponse").innerHTML = this.responseText;
        }
    };
    
    // Retrieving the form data
    var contactForm = document.getElementById("contactForm");
    var formData = new FormData(contactForm);

    // Sending the request to the server
    request.send(formData);
}
        </script>
        <!-- <script src="js/jquery.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/jquery.validate.js"></script> -->
        <!-- <script src="js/ajax_subscribe.js"></script> -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>