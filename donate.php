
<?php
// for Contact Form
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

	$mail = new PHPMailer(true);
    $femail='diddimanojkumar@gmail.com';
	$message="Hello Sir, I would like to donate for children education.";
	$amound='Children Education';
	$name='Manoj Kumar';
	try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mk2062714@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Manu@0610'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom($femail,$name); 
    $mail->addAddress('mk2062714@gmail.com'); 

    $mail->isHTML(true);
    $mail->Subject = 'Care For Needy';
    $mail->Body = "<h3>Name : $name <br>Email: $femail <br>Subjcet : $amound <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
	echo "<script> alert('Message sent Successful');
            window.location='index.html';
        </script>";
	
  } 
  catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  } 
   
?>
