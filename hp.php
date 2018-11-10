<?php
session_start();
if(isset($_SESSION["login"]) && $_SESSION["login"]=="yes")
{
	
}
else{
	echo "Invalid user";
	header("Location:lp.php?error=RESTRICTED");
}
//if($_SESSION["login"]=="no")
//{header("LOCATION:lp.php");}
?>
<html>
<head>
<title>Crux Solver-HOME</title>
</head>
<?php


echo "<b>USER: ". $_SESSION["username"]."</b>";
echo "    <a href='lout.php'>LogOut</a>";
if($_SESSION["username"]=="rifat"){echo "    <a href='admin.php'>ADMIN PANEL</a>";}



?>


<body bgcolor=cyan>
<br><br>
<table align= "center" style="border2">
	<tr>
	<td>
	
	<form action="textfile.php" method="post">
      <h1 style="text-align:center">Question</h1><br>
	  
        Q.Title: <br/>
		<input type="text" name="title" value=""><br/>
		
		Question: <br/>
        <textarea CLASS="resize" rows="15" cols="100" name="question"></textarea><br/>
        <input type="Submit" name="text" value="Submit">
	 
	<style>
		textarea.resize
		{
		resize:none;
		}

	</style>
	</form>
	
	</td>
	</tr>
	</table>

</body>

</html>

