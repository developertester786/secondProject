<?php
$to = "garla.anita7@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

if(mail($to,$subject,$txt,$headers)){
    
    echo "sent";
}else{
    echo "not sent";
}
?>