<html>
<body>
<?php
require_once "Mail.php";

$name=$_POST['uname'];
$email=$_POST['uemail'];
$subj=$_POST['subj'];
$body=$_POST['ubody'];

$host = "smtp.mail.yahoo.com";
$username = "smtp_username";
$password = "smtp_password";

echo $name . " Name</br>";
echo $email . " EMAIL</br>";
echo $subj . " SUBJECT</br>";
echo $body . "</br>";

mail("nckpunch@yahoo.com.au", $subject,
	$name . " wrote " . $message, "From:" . $email);

if (isset($_POST['uemail']))
{
	$email = $_POST['uemail'] ;
	$subject = $_POST['subj'] ;
	$message = $_POST['ubody'] ;
	mail("nckpunch@yahoo.com.au", $subject,
	$name . " wrote " . $message, "From:" . $email);
	echo "Thank you for using our mail form";
}

?>

 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
</body>
</html>