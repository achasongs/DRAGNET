<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DRAGNET OFFICIAL WEBSITE</title>
        <meta name="description" content="DRAGNET OFFICIAL WEBSITE">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">

        <!-- Bootstrap CSS-->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/style.css">

        <!-- -- font-awesome-- -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <!-- Tweaks for older browsers-->
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endifx]-->
            
            <!-- -------- fonts ------- -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <body>

<!-- Background image -->
        <section class="head-section">
    <!-- navbar-->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top shadow-sm bg-white">
      
      <a href="index.php" class="navbar-brand" id="dragnetText"><img src="images/logonav.png" alt="dragnetlogo" class="logo">Dragnet</a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link text-primary">Home</a></li>
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


       <section class="services" id="services">
       <div class="container col-xxl-8 px-4 py-5 mt-4">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="images/happyteam.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3 text-dark">what we <strong> DO</strong></h1>
      <p class="lead">Dragnet Group empowers people to succeed, create sustainable wealth and attain financial freedom by providing them with opportunities to earn passive income, invest for interest and gain personal development while doing so.

You can earn passive income by becoming a registered affiliate of this revolutionary Multi-Level Marketing System that already eliminates the challenges of other traditional MLMs around the world.

You can become an investor with Dragnet and earn an interest daily on the amount invested.

And through the process the company is committed to your personal development through trainings and valuable resource materials.
<br><br>
The company is focused on creating sustainable investment vehicles that will lead to achieving these goals of wealth creation for the members of the Dragnet community in the following industries:
    </p>
<ol>
<li>Agriculture</li>
<li>Food and Groceries</li>
<li>Retail Pharmaceuticals</li>
<li>Hospitality</li>
<li>Education</li>
<li>Technology</li>
</ol>
<p class="lead">
The unique innovation that Dragnet brings is meeting all your  personal and family shopping needs in one place by establishing DRAGNET MALLS: A chain of World Class Shopping Mall across different states in the country. These Model Malls are a one-stop shop for all your shopping needs ranging from groceries, pharmaceuticals, local food items in the “Village market” section of the mall, a world class Restaurant offering a wide variety of cousins and a state of the art event center.
</p>

<a href ="index.php"><button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Back to home</button></a>

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
                <span id="message"></span>
                    <form action="config/mail_handler.php" id="sample_form">   
                    <h5>Subscribe to our Newsletter</h5>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <input type="text" placeholder="Enter Full Name" name="subName" id="name" class="col-6 mr-2 form-control form_data"> 
                    <span class="text-danger hidden" id="nameError"></span> 
                    <input type="email" placeholder="Enter Email" name="subEmail" id="email" class="col-6 mr-2 form-control form_data">
                    <span class="text-danger hidden" id="emailError"></span>  
                  </div>
              
                    <!-- <button type="button" class="btn btn-lg px-4 me-md-2 mt-2" id="subscribeBtn">Subscribe</button> -->
                    <input type="button" name="submit"  class="btn btn-lg px-4 me-md-2 mt-2"  id="submit" value="Subscribe">
                    <p class="mt-2 subPara">Subscribing to our Newsletter will help you know when we will officially launch our services...</p>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Links</h5>
                        <ul class="links list-unstyled">
                            <li> <a href="index.php">Home</a></li>
                            <li> <a href="#about-us">About</a></li>
                            <li> <a href="#services">Services</a></li>
                            <li> <a href="#contact">Contact</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3" id="lastfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center text-md-left">
                    <p class="mb-md-0"> &copy; 2021 Dragnet Investment Limited. All rights reserved. </p>
                </div>
                <div class="col-md-5 text-center text-md-right">
                    <p class="mb-0"><a href="#" class="external text-white"></a> </p>
                </div>
            </div>
        </div>
        </div>

        <!-- JavaScript -->
        <script src ="assets/js/script.js"></script>
        <script src="assets/js/ajax_subscribe.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
</html>