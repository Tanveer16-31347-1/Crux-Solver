<?php


?>
<html>
<head><title>Crux Solver-ERROR</title>

</head>
<body bgcolor=cyan>
<?php


function load_from_file()
{
	global $auth;
	$myfile=fopen("cr.txt","r") or die("file open error");
	
	
	while($line=fgets($myfile))
	{
		$cr = explode(" ",trim($line));
			
	$auth[]=array("un"=>$cr[0],"pass"=>$cr[1]);
	}
	

	fclose($myfile);
	
}





function loadFromXML()
{
	global $auth;
	$xml=simplexml_load_file("cr.xml") or die("Error: Cannot create object");
	foreach($xml as $st)
	{
		
		//$auth[(string)$st->un] = (string)$st->pass;
		
		
		$dar=array();
		$dar["un"]=(string)$st->name;
		$dar["pass"]=(string)$st->pass;
		
		$auth[]=$dar;
	}
	//fclose($xml);
}




  ?>
   </body>
</html>
