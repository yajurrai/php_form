<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require_once "./vendor/autoload.php";

  require './vendor/phpmailer/phpmailer/src/Exception.php';
  require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require './vendor/phpmailer/phpmailer/src/SMTP.php';

  if(isset($_POST['submit'])) {
    // GET POST DATA
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '958bfa4d651b3f';
    $mail->Password = '649cab00f4d297';

    $mail->From = $email;
    $mail->FromName = $name;

    $mail->addAddress('yajur.rai@outlook.com');

    $mail->isHTML(true);

    $mail->Subject = "Contact Request From ".$name;
    $mail->Body = "<p>$message</p>";
    $mail->AltBody = 'Thanks';

  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>PHP Form | Thank You</title>
</head>
<body>
  <div class="container">
    <?php
      if($name === '' || $email === '' || $message === '') {
        echo '<h3 class="text-center">An <span class="text-danger">ERROR</span> occurred</h3>';
        echo '<h3 class="my-1 text-center">Your email was not sent</h3>';
      } else {
        if($mail->send()) {
          echo '<h2 class="my-1 text-center">Thanks For Contacting Us</h2>';
          echo '<h4 class="text-center my-3">Your email was sent <span class="text-success">SUCCESSFULLY</span></h4>';
        } else {
          echo '<h2 class="my-3 text-center">An <span>ERROR</span> occurred</h2>';
          echo '<h3 class="my-1 text-center">Your email was not sent</h3>';
        }
      }
    ?>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
