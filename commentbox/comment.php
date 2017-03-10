<?php
include("db.php");
if(isset($_POST['submit']))
{
	$name=$_POST['namename'];
	
	$message=$_POST['message'];
	$insert=mysql_query("insert into `okaymunchy`.`commenttable`(`name`, `message`, `id`, `com_id`)values('$name','$message', NULL, '2')")or die(mysql_error());



	header("Location:comet.php");
	}
?>