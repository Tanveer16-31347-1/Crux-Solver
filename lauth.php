<?php
session_start();

$_SESSION["login"]="";

?>
<html>
<head><title>Crux Solver-ERROR</title>
</head>


<body bgcolor=cyan>
<?php








$un=$_REQUEST["un"];
$ps=$_REQUEST["pass"];


include("logfunc.php");

		

//loadFromXML();
load_from_file();





foreach ($auth as $ath)
{
	if($un == $ath["un"] && $ps == $ath["pass"])
	{
		$_SESSION["username"]=$ath["un"];
		$_SESSION["login"]="yes";
		
		header("LOCATION:hp.php");
		
	}
	else if ($_SESSION["login"]=="")
	{header("Location:lp.php?error=INVALID USER");}
	
	
	
}

















  ?>
   </body>
</html>
