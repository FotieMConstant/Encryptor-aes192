<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/sfast-1.0.0-Beta/sfast.min.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/images/favicon.png' />
    <title>Encryptor AES 192</title>
<body>
<!-- php code to encrypt text  -->

<?php
include 'AES.php';

$inputText = $_POST["message"];
$inputKey = $_POST["encryptkey"];
$blockSize = 192;
$aes = new AES($inputText, $inputKey, $blockSize);
$dec=$aes->decrypt();
$aes->setData($dec);

 ?>


  <style media="screen">
 a{
   text-decoration: none;
 }
.btn {
display: block;
margin: 30px auto;
padding: 10px;
border: 2px solid #333;
text-transform: uppercase;
font-weight: bold;
background: #333;
color: #fff;
width: 60%;
}

.btn:hover {
background: transparent;
color: #333;
}

#timer {
font-size: 16px;
font-size: 1rem;
}

.copyright {
font-size: 14px;
font-size: 0.875rem;
text-align: center;
}


/* Animation */

.animated {
-webkit-animation-duration: 1.2s;
-moz-animation-duration: 1.2s;
-ms-animation-duration: 1.2s;
-o-animation-duration: 1.2s;
animation-duration: 1.2s;
-webkit-transform: translate3d(0, 0, 0);
-webkit-backface-visibility: hidden;
}

.animated.fast {
-webkit-animation-duration: 800ms;
-moz-animation-duration: 800ms;
-ms-animation-duration: 800ms;
-o-animation-duration: 800ms;
animation-duration: 800ms;
}

.animated.slow {
-webkit-animation-duration: 1.4s;
-moz-animation-duration: 1.4s;
-ms-animation-duration: 1.4s;
-o-animation-duration: 1.4s;
animation-duration: 1.4s;
}

@-webkit-keyframes fadeInUp {
0% {
  opacity: 0;
  -webkit-transform: translateY(20px);
}
100% {
  opacity: 1;
  -webkit-transform: translateY(0);
}
}

@-moz-keyframes fadeInUp {
0% {
  opacity: 0;
  -moz-transform: translateY(20px);
}
100% {
  opacity: 1;
  -moz-transform: translateY(0);
}
}

@-o-keyframes fadeInUp {
0% {
  opacity: 0;
  -o-transform: translateY(20px);
}
100% {
  opacity: 1;
  -o-transform: translateY(0);
}
}

@keyframes fadeInUp {
0% {
  opacity: 0;
  transform: translateY(20px);
}
100% {
  opacity: 1;
  transform: translateY(0);
}
}

.fadeInUp {
-webkit-animation-name: fadeInUp;
-moz-animation-name: fadeInUp;
-o-animation-name: fadeInUp;
animation-name: fadeInUp;
}


/* Layout: center box */

#logo-box {
text-align: center;
padding: 30px;
}

h1 {
font-size: 30px;
margin: 0 auto;
}


/* Desktop only */

@media (min-width: 481px) {
#logo-box {
  position: absolute;
  text-align: center;
  left: 50%;
  top: 48%;
  width: 400px;
  margin-left: -230px;
  height: 440px;
  margin-top: -250px;
  font-size: 20px;
  border: 3px solid #999;
  box-shadow: 6px 6px 0px #333;
}
h1 {
  font-size: 36px;
}
}

  </style>




  <!-- Redirection Counter -->
  <script type="text/javascript">
    var count = 20; // Timer
    var redirect = "index.php"; // Target URL

    function countDown() {
      var timer = document.getElementById("timer"); // Timer ID
      if (count > 0) {
        count--;
        timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
        setTimeout("countDown()", 1000);
      } else {
        window.location.href = redirect;
      }
    }
  </script>

  <div id="master-wrap">
    <div id="logo-box">

      <div class="animated fast fadeInUp">
          <h2> Message decrypted successfully!</h2>
          <hr/>
          <?php
          echo '<div class="wrap-all">';
          echo 'Key: <strong><font color="red">'.$inputKey.'</font></strong><br/>';
          echo 'Pain text: <strong><font color="red">'.$dec.'</font></strong><br/>';
          echo "</div>";
          ?>
        <h1>Thank you</h1>
      </div>

      <div class="notice animated fadeInUp">
        <p class="lead">Your message has been successfully Decrypted!</p>
        <a class="btn animation" href="javascript:history.back()">&larr; Back</a>
      </div>

      <div class="footer animated slow fadeInUp">
        <p id="timer">
          <script type="text/javascript">
            countDown();
          </script>
        </p>
        <p class="copyright">&copy; Encryptor</p>
      </div>

    </div>
    <!-- /#logo-box -->
  </div>
  <!-- /#master-wrap -->


  <style>
footer{
    text-align: center;
  }
</style>

<footer>
Copyright Group 7, 2018 - 2019

</footer>

</body>

</html>
