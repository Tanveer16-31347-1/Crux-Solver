<html>
<head><title>Crux Solver-ERROR</title></head>
<body bgcolor=cyan>

<pre>
<?php
global $X;
global $Y;

$X=$_POST["ln"];
$Y=$_POST["pss"];
$c=0;
//print_r($_POST);
foreach($_POST as $data)
{
	if(!$data)
	{
		echo"<p style='color: red'>  PLEASE ENTER ALL THE FIELDS</p>";
		//print_r($_POST);
		$c=1;
		//break;
    }
}


if(strlen($_POST["fn"])==0)
{//echo" <p style='color: red'>  PLEASE ENTER FIRST NAME</p>";$c=1;
$fn= " PLEASE ENTER FIRST NAME";
}

if(strlen($_POST["ln"])==0)
{//echo" <p style='color: red'>  PLEASE ENTER LAST NAME</p>";$c=1;
// header("Location:lp.php?k=enter ln error=enter fn");
$ln= " PLEASE ENTER LAST NAME";
}

if(strlen($_POST["pn"])==0   )
{
	//echo" <p style='color: red'>  PLEASE ENTER PHONE NUMBER</p>";$c=1;
	$pn=" PLEASE ENTER PHONE NUMBER";
	}
if(strlen($_POST["em"])==0   )
{
	$em=" PLEASE ENTER EMAIL";
	//echo" <p style='color: red'>  PLEASE ENTER EMAIL</p>";
	$c=1;}
if(strlen($_POST["pss"])==0   )
{
	$pss=" PLEASE ENTER PASSWORD";
	//echo" <p style='color: red'>  PLEASE ENTER PASSWORD</p>";
	$c=1;}
if(strlen($_POST["cpss"])==0   )
{
	$cpss=" PLEASE ENTER CONFIRM PASSWORD";
	//echo" <p style='color: red'>  PLEASE ENTER CONFIRM PASSWORD</p>";
	$c=1;}







if(strlen($_POST["pn"])!= 11   )
{
	$pn=" PLEASE ENTER CORRECT PHONE NUMBER";
	//echo" <p style='color: red'>  PLEASE ENTER CORRECT PHONE NUMBER</p>";
	$c=1;}




if(isset($_POST["gn"])=="")
{
	$gn=" PLEASE CHOOSE GENDER";
	//echo "<p style='color: red'> PLEASE CHOOSE GENDER</p>";
$c=1;}
		
	


	
if(    strpos($_POST["em"], "@") < 1 || strpos($_POST["em"], "@")  > strpos($_POST["em"], ".com")            )
{
	$em1=" ENTER VALID EMAIL";
	//echo" <p style='color: red'> ENTER VALID EMAIL</p>";
	$c=1;}


if(isset($_POST["pss"]))
if(strlen($_POST["pss"]) < 8 && strlen($_POST["pss"])!=0 ){
	
	$pss1=" WEAK PASSWORD. MUST BE GREATER THAN 8";
		//echo "<p style='color: red'> WEAK PASSWORD. MUST BE GREATER THAN 8</p>";
		$c=1;
	}




if($_POST["pss"] != $_POST["cpss"]){
		echo "<p style='color: red'>  Password DOSE'NT MATCH</p>";$c=1;
}


header("Location:lp.php?error=$fn.$ln.$pn.$em.$pss.$cpss.$pn.$em1.$pss1.$gn");

echo "<br><p style='color: green'>  THANKYOU</p>";



if($c==0)
{
	
   
   include("file1insert.php");
   storeToFile();
	header("Location:lp.php?error=  THANKYOU REGISTRATION COMPLETE");
		exit;
}


	

?>
</pre>


   </body>
</html>
