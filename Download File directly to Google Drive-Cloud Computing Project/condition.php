<?php


$url=$_POST['url'];
$type=$_POST['type'];
$email=$_POST['semail'];



if($type=='file'){

exec(curl --data "url=$url&semail=$email" hacknirma.ph");

}else if($type=='utube'){

exec(       );

}



?>
