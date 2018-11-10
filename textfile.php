<html>
	<body bgcolor="cyan">
    <?php
		if (isset($_POST))
		{
			if ($_POST['text'] == "Submit"  && !empty($_POST['title'])) 
		{
            $file = fopen($_POST['title'] . ".txt","a+");  
            $text = $_POST["question"];
            file_put_contents($_POST['title'] . ".txt", $text); 
            fclose($file);
			echo "<h3> Question is Been Uploaded for Verification </h3>";
        }
		
		else if($_POST['text'] =="" || $_POST['title']=="")
		{echo "ENTER QUESTION";}
			
		}
    ?>
	</body>
</html>
