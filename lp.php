<marquee direction="up" behavior="alternate" style="border:RED 1px solid">
<p style="color:red;">
<?php 
if(isset($_REQUEST["error"]))echo $_REQUEST["error"];
 
?>
</marquee>

<!DOCTYPE html>
<html>
<head>
<title>Crux Solver-LOGIN</title>

</head>

<body bgcolor=cyan   >


<p style="text-align:center;">
<img src ="temp_logo.png"  alt="LOGO"  >
</p>




<form action="lauth.php" method="post">

<table style="float: left;" >


<tr>
<td colspan="2"><h3 style="text-align:center">LOGIN</h3></td>
</tr>

<tr>
   <td>UserName: </td>
   <td>	  <input style="background-color:rgb(191,255,255)" type="text" name="un"></td>
   
 </tr>
   
      
	  
<tr>

 <td>PassWord: </td>
 <td><input style="background-color:rgb(255,136,136)" type="password" name="pass"></td>
</tr>
	  
<tr>
	 <td align ="center" colspan="2"> <input style="background-color:rgb(128,255,128)" type="submit" name="submt" value="LOGIN"> </td>
</tr>
   
   
   
   
  </table>


</form>










<form action="rauth.php" method="post">
<table  align= "center" style="float: right;" >
<tr> <td colspan="2"><h3 style="text-align:center">REGISTRATION</h3></td></tr> 
<tr> 

<td> 
First name: </td>
<td> <input     style="background-color:rgb(191,255,255)" type="text" name="fn" /></td>


</tr>

<tr> 

<td> Last name: </td>
<td> <input  style="background-color:rgb(191,255,255)"   type="text" name="ln"/></td>
</tr>



<tr> 
<td> Phone number: </td>
<td> <input style="background-color:rgb(191,255,255)"  type="text" name="pn"/></td>
</tr>



<tr> 
<td> Email: </td>
<td> <input  style="background-color:rgb(191,255,255)"  type="text" name="em"/></td>
</tr>



<tr> 
<td> Password: 
<td> <input   style="background-color:rgb(255,136,136)" type="password" name="pss"/>
</tr>


<tr> 
<td> Confirm Password: </td>
<td> <input   style="background-color:rgb(255,136,136)" type="password" name="cpss"/> </td>
</tr>


<tr>
<td>
Gender:
</td>
<td> <input type="radio" name ="gn" value="Male" /> Male
 <input type="radio" name ="gn" value="Female"/> Female </td>
</tr>



<tr>
<td>
DOB: 
</td>
<td>

<?php
echo "<select name='doby'>";
for ($cm = 1960; $cm <= 2018; $cm++) echo "<option value='$cm'>$cm </option>";
echo "</select>";
	?>



&nbsp; &nbsp; &nbsp;

<select name="dobm">
<option value="january">january</option>
<option value="february">february</option>
<option value="march">march</option>
<option value="april">april</option>
<option value="may">may</option>
<option value="june">june</option>
<option value="july">july</option>
<option value="august">august</option>
<option value="september">september</option>
<option value="october">october</option>
<option value="november">november</option>
<option value="december">december</option>


</select>





&nbsp; &nbsp; &nbsp;



<?php
echo "<select name='dobd'>";
for ($cm = 1; $cm <= 31; $cm++) echo "<option value='$cm'>$cm </option>";
echo "</select>";
	?>








</select>
</td>
</tr>
<tr>
<td></td>
<td colspan="2" > <input style="background-color:rgb(128,255,128)" type="submit" value ="REGISTER"/>

</td></tr>

</table>
</form>










</body>
</html>

