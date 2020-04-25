<?php




$url=$argv[1];

$url="filepi.com/i/wFo41IO";
//$url="filepi.com/i/qdGsC3I";

//$url="http://filepi.com/i/t8BWuqS";
//$url="http://filepi.com/i/Nm8gA4c";
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_REFERER, 'http://it-ebooks.info');
curl_setopt($ch, CURLOPT_URL,$url);
echo $result=curl_exec($ch);
echo var_dump($result);

echo "------------------------------------".$result;


?>
