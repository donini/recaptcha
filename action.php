<?php
  if(isset($_POST['email'])) {
    $email=$_POST['email'];
  }
  if(isset($_POST['g-recaptcha-response'])) {
    $captcha=$_POST['g-recaptcha-response'];
  }
  if(!$captcha) {
    echo '<h2>Please check the the captcha form.</h2>';
    exit;
  }

  $secret_key = "{{ YOUR SECRET KEY }}";

  $ip = $_SERVER['REMOTE_ADDR'];

  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$captcha."&remoteip=".$ip);

  $response_keys = json_decode($response,true);

  if(intval($response_keys["success"]) !== 1) {
    echo "<h2>No chance for you robot!</h2>";
  }
  else {
    echo "<h2>It's a human! :-)</h2>";
  }
?>
