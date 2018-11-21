<!DOCTYPE html>

<?php
session_start();
if(isset($_SESSION["login"]) && $_SESSION["login"]=="yes")
{
	
}
else
{
	echo "Invalid user";
	header("Location:lp.php?error=RESTRICTED");
}
?>

<html>
	<head><title>Crux Solver-ADMIN</title></head>
	<body bgcolor=cyan>
	<?php


echo "<b style='color:purple'><img src='man.png' alt='LogOut' height='30' width='30'> ". strtoupper($_SESSION["username"]."</b>");

echo " <a href='lout.php'><img src='logout.png' alt='LogOut' height='25' width='25'></a>";

if($_SESSION["username"]=="rifat")
{echo " <a href='admin.php'><img src='adminpanel.png' alt='admin panel' height='25' width='25'></a>";}
?>


<body bgcolor=cyan>
<br><br>
	
	
	<table align= "center" style="border2">
	<tr>
	<td>
	
      <h1 style="color:rgb(192,192,192);text-align:center">Admin Panel</h1><br>
	  
	<form name="openfile" method="post" action="">
        Open File: 
		<input style="background-color:rgb(191,255,255)" type="text" name="filename" value="" >
        <input type="submit" style="background-color:rgb(128,255,128)" name="submitopen" value="Open"><br/><br/>

    
    File Data:<br/>
    <?php

        if (isset($_POST['submitopen']) == "Open" && !empty($_POST['filename'])) 
		{
            if(!file_exists($_POST['filename'] . ".txt"))
			{
                exit("Error: File does not exist.");
            }
            $file = fopen($_POST['filename'] . ".txt", "r");
            while(!feof($file))
			{
                echo fgets($file). "<br />";
            }
            fclose($file);
        }

    ?>
	
		</form>
	  <br>
	  Report:<br>

		
		<textarea placeholder="Enter Report Description" style="background-color:rgb(191,255,255);height: 150; width:1457;"></textarea> <br>
         
		<input type="Button" name="Submit" value="Delete"><br><br>
	  Remove: <br> 
		<textarea placeholder="Enter User Description" style="background-color:rgb(191,255,255);height: 150; width:1457;"></textarea> <br>

		<input type="Button" name="Submit" value="Remove"><br><br>
		
	  Block:<br>
		<textarea placeholder="Enter User Description" style="background-color:rgb(191,255,255);height: 150; width:1457;"></textarea> <br>
         
		</textarea><br>
		<input type="Button" name="Submit" value="Block"><br><br>
	 
	<style>
		textarea.resize
		{
			resize:none;
		}

	</style>

	
	</td>
	</tr>
	</table>

	</body>
</html>
