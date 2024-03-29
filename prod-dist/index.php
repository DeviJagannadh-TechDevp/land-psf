<?php

 session_start();

?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Secure Donation Page</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
   <section id="formHolder">

      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">
<br>
            <a href="#" class="logo">POTTI SREERAMULU FOUNDATION <span></span></a>

            <div class="heading">
<br><br>
               <h2>DONATE</h2>
               <p>IN 20 SECONDS</p>
            </div>

            <div class="success-msg">
               <p></p>
               <a href="#" class="profile"></a>
            </div>
         </div>


         <!-- Form Box -->
         <div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice switched">
               <form class="login-form" action="" method="post">
                 
<a href="index.html"></a>
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            <div class="signup form-peice">

               <form class="signup-form" action="SecPay.php" method="POST">

                  <div class="form-group">
                     <label for="name"></label>
                     <input type="text" name="name" id="name" class="name" REQUIRED placeholder="Full Name *">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email"></label>
                     <input type="email" name="email" id="email" class="email" REQUIRED placeholder="Email Adderss *">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="phone"><small></small></label>
                     <input type="number" name="mobile" id="mobile" REQUIRED placeholder="Phone Number *">
                  </div>

<div class="form-group">
                     <label for="phone"><small></small></label>
                     <input type="number" name="amt" id="amt" REQUIRED placeholder="Amount in Indian Rupees*">
                  </div>


                  <div class="CTA">
                     <input type="submit" value="Pay Now"/>

<br><br>
                  </div>
                     <a href="#" class="switch">Want to become a member??</a>
               </form>
            </div><!-- End Signup Form -->



         </div>
      </div>

   </section>


   <footer>
      <p>
         © 2021, Potti Sreeramulu Foundation, Inc. or its affiliates
<br>Made By : <a href="https://thedj.tech/" target="black">DJ</a>
      </p>


   </footer>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./script.js"></script>

</body>

</html>
