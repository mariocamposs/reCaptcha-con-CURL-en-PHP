<?php 
/*
require("./admin/db_class/Database.class.php");
include('./admin/functions/mail.php');
//validation
$email = $_POST['email'];
$email = is_valid_email($email);

 // First we set the to address. I would not let anyone put in a to 
 // address in a web form, and neither should you.
 //$to = 'info@karolimakeupschool.com';
  $to = 'mario.campos.salazar@gmail.com';

 $from = $_POST['email'];
 $subject = 'New inquiry on Karolimakeupschool.com';
 $body = $_POST['message'];

 // Then create the ZFmail object using the information from above
 $mail = new ZFmail($to,$from,$subject,$body);

 // Finally, call the object's send method to deliver the mail.
 $mail->send();
 header('Location: ./contact.php?m=1');
 */

 $secret = "6LfHxJAUAAAAAAfOl1CJmIzGKYBz8r973czncL82";
 
if (isset($_POST['g-recaptcha-response'])) {
$captcha = $_POST['g-recaptcha-response']; 
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
'secret' => $secret,
'response' => $captcha,
'remoteip' => $_SERVER['REMOTE_ADDR']
);
 
$curlConfig = array(
CURLOPT_URL => $url,
CURLOPT_POST => true,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POSTFIELDS => $data
);
 
$ch = curl_init();
curl_setopt_array($ch, $curlConfig);
$response = curl_exec($ch);
curl_close($ch);
}
 
$jsonResponse = json_decode($response);
 
if ($jsonResponse->success === true) {
 
		require("./admin/db_class/Database.class.php");
		include('./admin/functions/mail.php');
		//validation
		$email = $_POST['email'];
		$email = is_valid_email($email);

		 // First we set the to address. I would not let anyone put in a to 
		 // address in a web form, and neither should you.
		 $to = 'info@karolimakeupschool.com';
		 //$to = 'mario.campos.salazar@gmail.com';

		 $from = $_POST['email'];
		 $subject = 'New inquiry on Karolimakeupschool.com';
		 $body = $_POST['message'];

		 // Then create the ZFmail object using the information from above
		 $mail = new ZFmail($to,$from,$subject,$body);

		 // Finally, call the object's send method to deliver the mail.
		 $mail->send();
		 header('Location: ./contact.php?m=1'); 
 
} else { 
 
header('Location: ./contact.php'); 
 
}

?>