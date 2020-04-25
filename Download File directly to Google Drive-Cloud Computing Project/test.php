<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);


// Function to make GET request using cURL
function curlGet($url) {
$ch = curl_init();  // Initialising cURL session
// Setting cURL options
//www.it-ebooks.info
//Instant PHP Web Scraping
//13
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$results = curl_exec($ch); // Executing cURL session
curl_close($ch); // Closing cURL session
return $results; // Return the results
}
$packtPage = curlGet('http://google.com');
echo $packtPage;

echo "script is now complete";
?>
