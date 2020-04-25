<?php

$caller_name = "VIVEK";
$caller_phone = "8866668487";
$caller_requirement = "Web sites";


error_reporting(E_ALL);
ini_set('display_errors', 1);



$user = "Omegaweb";

echo "test test";

// Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
$apikey = "rGUhaSjrB9jV7CED0GA6"; 

// Replace if you have your own Sender ID, else donot change
$senderid  =  "BYTECK"; 

// Replace with the destination mobile Number to which you want to send sms
$mobile  =  $caller_phone; 

// Replace with your Message content
$message   =  "Dear $caller_name, thank you for your Enquiry for $caller_requirement. One of our representative will contact you within 24 Hours. ";
$message = urlencode($message);

// For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
$type   =  "txt";

$ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=".$type.""); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);      
    curl_close($ch); 

// Display MSGID of the successful sms push
echo $output;


?>