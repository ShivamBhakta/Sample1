<?php
if(isset($_POST["ins_sbt"])){
include("connection.php");
$nm=$_POST["studname"];
$addr=$_POST["addr"];
$m=$_POST["mob"];
$e=$_POST["email"];
   
$query="insert into student(name,address,mobileno,email_id) values('$nm','$addr',$m,'$e')";

$res=mysql_query($query,$conn);
if($res==1){
	header("location:view.php");
}
else
{
	echo "Not inserted";
}

}
?>
<form method="post">
<table>
<tr>
<td> Enter Name of Student:</td>
<td><input type="text" name="studname"></td>
</tr>
<tr>
<td> Enter Address:</td>
<td> <input type="text" name="addr"></td>
</tr>
<tr>
<td> Enter Mobile No.:</td>
<td> <input type="number" name="mob"></td>
</tr>
<tr>
<td> Enter Email ID:</td>
<td> <input type="email" name="email"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="INSERT" name="ins_sbt">
</table>
</form>