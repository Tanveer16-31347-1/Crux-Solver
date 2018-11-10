<!DOCTYPE html>
<html>
	<body bgcolor=cyan   >>
	<table align= "center" style="border2">
	<tr>
	<td>
	
      <h1 style="text-align:center">Admin Panel</h1><br>
	  
	<form name="openfile" method="post" action="">
        Open File: 
		<input type="text" name="filename" value="">
        <input type="submit" name="submitopen" value="Open"><br/><br/>

    
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
		<textarea CLASS="resize" rows="5" cols="100">
         
		</textarea><br>
		<input type="Button" name="Submit" value="Delete"><br><br>
	   
	  Enter Any Text:<br>
		<textarea CLASS="resize" rows="5" cols="100">
         
		</textarea><br>
		<input type="Button" name="Submit" value="Remove"><br><br>
		
	  Enter Any Text:<br>
		<textarea CLASS="resize" rows="5" cols="100">
         
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