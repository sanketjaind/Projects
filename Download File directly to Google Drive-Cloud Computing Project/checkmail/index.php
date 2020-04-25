<?php
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'pavanm4321@gmail.com';
$password = '9825187103';
 
 //echo get_cfg_var('cfg_file_path');

 
error_reporting(E_ALL);
ini_set('display_errors', 1);



set_time_limit(0);
ignore_user_abort(true);





function getBetween($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}


function send_message($caller_name,$caller_phone,$caller_requirement){

// Replace with your username
$user = "Omegaweb";

// Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
$apikey = "rGUhaSjrB9jV7CED0GA6"; 

// Replace if you have your own Sender ID, else donot change
$senderid  =  "BYTECK"; 

// Replace with the destination mobile Number to which you want to send sms
$mobile  =  $caller_phone; 

// Replace with your Message content
$message   =  "Dear $caller_name, thank you for your Enquiry for $caller_requirement. One of our representative will contact you within 24 Hours. "; ; 
$message = urlencode($message);

// For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
$type   =  "txt";

$ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=".$type.""); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);      
    curl_close($ch); 

// Display MSGID of the successful sms push
//echo $output;
}


 
// Initial connection to the inbox
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());


//while(true){

 
// Grabs any e-mail that is not read
$emails = imap_search($inbox,'SUBJECT "Enquiry for you at"');
 
if($emails) {
   foreach($emails as $email_number) {
    $message = imap_fetchbody($inbox,$email_number,1.1);
    if ($message == "") { // no attachments is the usual cause of this
        $message = imap_fetchbody($inbox, $email_number, 1);

        

        $caller_requirement = "Website Development";

        if(strpos($message,"Requirement:")!=0){


        $caller_name = getBetween($message,"Name","Caller");

		$caller_requirement = getBetween($message,"Requirement","Caller");

		$caller_phone = getBetween($message,"Phone","Caller");


        }else{

        $caller_name = getBetween($message,"Name","Caller");

		$caller_phone = getBetween($message,"Phone","Caller");

        }


        
        $caller_phone = preg_replace("/[^0-9+]/", "", $caller_phone);

		echo $caller_name."------".$caller_phone."-------".$caller_requirement."------";

		//send_message($caller_name,$caller_phone,$caller_requirement);
		
    }
                 
    print_r($message);
 	

    imap_delete($inbox, $email_number);

   }// end foreach loop
} // end if($emails)

sleep(10);

//}





?>