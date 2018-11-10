<html>
<head>
<title>Crux Solver-ERROR</title>
</head>

<body>

<?php
session_start();



if(strlen($_SESSION["username"])==0)
{
	echo "USER RESTRICTION";
}

else {require ("hp.php");}

?>

</body>
</html>
