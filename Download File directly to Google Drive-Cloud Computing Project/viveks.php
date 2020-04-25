<?php

//echo "here is the put";



$v=shell_exec("php filep.php 2>&1");

//echo "-------------------------------------------------------------";
$start=strpos($v,"Location: ")+10;

$end=strpos($v,"\n",$start);


echo $url=substr($v,$start,$end-$start-1);

exec("wget --content-disposition $url");


//echo "output is ".$out;



?>
