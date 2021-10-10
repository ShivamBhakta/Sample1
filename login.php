<?php
include("connection.php");
if(isset($_POST["login_sbt"])){
	$uemail=$_POST["useremail"];
	$pwd=$_POST["pwd"];
	$query="select * from user where email='$uemail' and password = '$pwd'";
	//echo $query;
	$res=mysql_query($query);
	$row=mysql_fetch_row($res);
	
    if($row[0]){
			header("location:view.php");
    	   //echo "valid";
	}
	else{
		echo "invalid username or password<br>";
	}

}
?>

<html>
<head><title>LOGIN PAGE</title></head>
<body>
<form method="post">
<fieldset>
<legend> LOGIN DETAILS</legend>
<table width="60%" border="0">
<tr>
<td> ENTER EMAIL ID:</td>
<td> <input type="text" name="useremail" required></td>
</tr>
<tr>
<td>ENTER PASSWORD:</td>
<td><input type="text" name="pwd" required></td>
</tr>
<tr>
<td><input type="submit" name="login_sbt" value="LOGIN"></td>
<td><a href="insert.php">NEW USER</a></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>