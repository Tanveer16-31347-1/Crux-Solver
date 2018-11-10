<html>
<head>
<title>Registration</title>
</head>

<body bgcolor=cyan>
<pre>
<?php
//print_r($_POST);
foreach($_POST as $data)
{
	if(!$data)
	{
		echo"<p style='color: red'>  PLEASE ENTER ALL THE FIELDS</p>";
		break;
	}
		
}


if(strlen($_POST["fn"])==0   )
{echo" <p style='color: red'>  PLEASE ENTER FIRST NAME</p>";}

if(strlen($_POST["ln"])==0   )
{echo" <p style='color: red'>  PLEASE ENTER LAST NAME</p>";}

if(strlen($_POST["pn"])==0   )
{echo" <p style='color: red'>  PLEASE ENTER PHONE NUMBER</p>";}
if(strlen($_POST["em"])==0   )
{echo" <p style='color: red'>  PLEASE ENTER EMAIL</p>";}
if(strlen($_POST["pss"])==0   )
{echo" <p style='color: red'>  PLEASE ENTER PASSWORD</p>";}
if(strlen($_POST["cpss"])==0   )
{echo" <p style='color: red'>  PLEASE ENTER CONFIRM PASSWORD</p>";}







if(strlen($_POST["pn"])!= 11   )
{echo" <p style='color: red'>  PLEASE ENTER CORRECT PHONE NUMBER</p>";}




if(isset($_POST["gn"])=="")
	
		echo "<p style='color: red'> PLEASE CHOOSE GENDER</p>";
	


	
if(    strpos($_POST["em"], "@") < 1 || strpos($_POST["em"], "@")  > strpos($_POST["em"], ".com")            )
{echo" <p style='color: red'> ENTER VALID EMAIL</p>";}


if(isset($_POST["pss"]))
if(strlen($_POST["pss"]) < 8 && strlen($_POST["pss"])!=0 ){
		echo "<p style='color: red'> WEAK PASSWORD. MUST BE GREATER THAN 8</p>";
	}




if($_POST["pss"] != $_POST["cpss"]){
		echo "<p style='color: red'>  Password DOSE'NT MATCH</p>";
}

echo "<br><p style='color: green'>  THANKYOU</p>";





	

?>
</pre>
</body>
</html>

