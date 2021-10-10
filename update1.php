<?php 
include("connection.php");
$r=$_REQUEST["rno"];
$query="select * from student where rollno=$r";
$res=mysql_query($query,$conn);
$row=mysql_fetch_array($res);
?>
<form method="post">
<table>
<input type="hidden" name="rno" value="<?php echo $row[0];?>">
<tr>
<td>ROLLNO:</td>
<td><input type="text" name="rno" value="<?php echo $row[0]; ?>" disabled></td></tr>
<tr>
<td> Enter Name of Student:</td>
<td><input type="text" name="studname" 
     value="<?php echo $row[1];?>">
</td>
</tr>
<tr>
<td> Enter Address:</td>
<td> <input type="text" name="addr" value="<?php echo $row[2];?>">
</td>
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
<input type="submit" value="UPDATE" name="update_sbt">
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST["update_sbt"])){
$r=$_POST["rno"];	
$nm=$_POST["studname"];
$addr=$_POST["addr"];
$m=$_POST["mob"];
$e=$_POST["email"];

$query="update student set name='$nm', address='$addr', mobileno=$m, email_id='$e' where rollno=$r ";
echo $query;
$res=mysql_query($query,$conn);
if($res==1){
	header("location:view.php");
	/*?>
    <script language="javascript">
		alert("record updated");
		window.location.href='view.php';
	</script>
<?php*/
}
else
{
	echo "Not updated";
}
}
?>
