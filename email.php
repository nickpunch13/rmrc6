<html>
<body>
<?php
$name=$_POST['uname'];
$email=$_POST['uemail'];
$subj=$_POST['subj'];
$body=$_POST['ubody'];

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

</body>
</html>