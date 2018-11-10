<?php
function storeToFile()
{
	GLOBAL	$X;
	
	GLOBAL	$Y;
	

	$myfile = fopen('cr.txt' , 'a') or die('File not found');
	$txt = $X . ' ' .  $Y . ' ' . "\r\n" ;
	fwrite($myfile, $txt);
	fclose($myfile);
	}
?>

