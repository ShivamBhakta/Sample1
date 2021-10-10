<?php
include("connection.php");
$r=$_REQUEST["rno"];
$query="select * from student where rollno=$r";
$res=mysql_query($query,$conn);
$row=mysql_fetch_array($res);
?>


<form method="post">
<input type="hidden" name="rno" value="<?php echo $row[0];?>">
<table>
<tr>
<td>ROLL NO:</td>
<td><input type="text" name="r" value="<?php echo $row[0];?>" disabled></td>
</tr>
<tr>
<td> Enter Name of Student:</td>
<td><input type="text" name="studname" value="<?php echo $row[1];?>"></td>
</tr>
<tr>
<td> Enter Address:</td>
<td> <input type="text" name="addr" value="<?php echo $row[2];?>"></td>
</tr>
<tr>
<td> Enter Mobile No.:</td>
<td> <input type="number" name="mob" value="<?php echo $row[3];?>"></td>
</tr>
<tr>
<td> Enter Email ID:</td>
<td> <input type="email" name="email" value="<?php echo $row[4];?>"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="UPDATE" name="up_sbt">
</table>
</form>
<?php
if(isset($_POST["up_sbt"])){

$r=$_POST["rno"];

$nm=$_POST["studname"];
$addr=$_POST["addr"];
$m=$_POST["mob"];
$e=$_POST["email"];
$query="update student set name='$nm', address='$addr', mobileno=$m, email_id='$e' where rollno=$r";
$res=mysql_query($query,$conn);

if($res==1){
	header("location:view.php");
}
else
{
	echo "Not updated";
}
}

?>