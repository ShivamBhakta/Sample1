<?php

$conn=@mysql_connect("localhost","root","");
if (!$conn){
	die("Cannot establish connection");
}
else
{
	echo("Connection establish")."<br>";
}
$db=mysql_select_db("tyb",$conn);
if (!$db){
	die("Cannot select database");
}
else
{
	echo("Database Selected")."<br>";
}
?>