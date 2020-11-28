<?php

   require 'includes/PHPMailer.php';
   require 'includes/SMTP.php';
   require 'includes/Exception.php';
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
   $mail = new PHPMailer();
   $mail->isSMTP();
   $mail->Host = "smtp.gmail.com";
   $mail->SMTPAuth = true;
   $mail->SMTPSecure = "tls";
   $mail->Port = "587";
   $mail->Username = "ana2702nd@gmail.com";
   $mail->Password = "Anand@123";
   $mail->Subject = "OTP";
   $mail->setFrom('ana2702nd@gmail.com');
   $mail->isHTML(true);
   $send_to=$_POST['mail'];
   $code=rand(1,10000);
   $mail->Body = "your verification code is ".$code;
   $mail->addAddress($send_to);
   if ( $mail->send() ) {
      echo "Email Sent..!";
      $con=mysqli_connect('localhost','root','','auction');


$Select = "INSERT into checker values('$send_to','$code')";
$Rsc  = mysqli_query($con,$Select);

   }else{
      echo 'cant send';
      echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
      header('refresh:2;url=verify.php');
   }
//Closing smtp connection
   $mail->smtpClose();

?>
<html>
<body>

   <form name='checker' action='checker.php' method='post'>
      Your email id: 
      <input type=text name='email' id='email' value='<?php echo $send_to ?>' placeholder = '<?php echo $send_to ?>' ><br>

      Enter verification code<br>

      <input type='text' name='code' id='code' placeholder='Enter verification code'>
      <br>
      <input type="submit"  name="submit" value="Click here" id="submit">
</form>
</body>
</html>
