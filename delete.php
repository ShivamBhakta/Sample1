<?php
include("connection.php");
$r=$_REQUEST["rno"];
$query= "delete from student where rollno=$r";
$res=mysql_query($query,$conn);
if($res==1){
?>
	<script language="javascript">
		alert("record deleted successfully");
		window.location.href="view.php";
	</script>
<?php
}
else
{
	echo "record not deleted";
}
?>