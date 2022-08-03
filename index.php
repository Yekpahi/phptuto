<?php 
/*
$counter = 1;
function increase($value)
{
	$value+= 1;
	echo $value;// 2
}


*/
$message = "bonjour";
function say() {
    $message = "Salut";
    echo $message;
}
require 'view.php';
?>