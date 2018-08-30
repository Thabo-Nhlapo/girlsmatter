<?php get_header(); ?>


<!-- Page top section start -->
<div class="page-top-area set-bg" data-setbg="https://images.pexels.com/photos/953213/pexels-photo-953213.jpeg?cs=srgb&dl=computer-device-display-953213.jpg&fm=jpg">
  <div class="breadcrumb-area">
    <a href="http://localhost/wordpress/">Home</a> / <span>Contact</span>
  </div>
</div>
<!-- Page top section end -->

  <!-- Contact section start -->
<section class="contact-section set-bg spad" data-setbg="https://images.pexels.com/photos/48605/pexels-photo-48605.jpeg?cs=srgb&dl=iphone-mobile-mobile-phone-48605.jpg&fm=jpg">
  <div class="container-fluid contact-warp">
    <div class="contact-text">
      <div class="container p-0">
        <span class="sp-sub-title">One Man Studio</span>
        <h3 class="sp-title">Stay in touch</h3>
        <p>So you found your way here, I'm glad.
          Please let me know what you think, HIRE ME even.
          Let's create and innovate!
        </p>

        <ul class="con-info">
          <li><i class="flaticon-phone-call"></i>+27 067 038 5244</li>
          <li><i class="flaticon-envelope"></i>thabonhlapo.tn@gmail.com</li>
          <li><i class="flaticon-placeholder"></i>0B Dorset Street, Woodstock<br> Cape Town, 8001</li>
        </ul>
      </div>
    </div>
    <div class="container p-0">
      <div class="row">
        <div class="col-xl-8 offset-xl-4">

          <?php
          if(isset($_POST['submit'])){
              $to = "thabonhlapo.tn@gmail.com"; // this is your Email address
              $from = $_POST['email']; // this is the sender's Email address
              $first_name = $_POST['name'];
              $last_name = $_POST['last_name'];
              $subject = "Form submission";
              $subject2 = "Copy of your form submission";
              $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
              $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

              $headers = "From:" . $from;
              $headers2 = "From:" . $to;
              mail($to,$subject,$message,$headers);
              mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
              echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
              // You can also use header('Location: thank_you.php'); to redirect to another page.
              }
          ?>

          <form class="contact-form" method="post" >
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="name" placeholder="Your name">
              </div>
              <div class="col-md-6">
                <input type="email" name="email" placeholder="E-mail">
              </div>
              <div class="col-md-12">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button class="site-btn light" type="submit">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact section end -->




<?php get_footer(); ?>
