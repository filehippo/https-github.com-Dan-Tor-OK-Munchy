<?php
include("db.php");
if(isset($_POST['submit']))
{
	$name=$_POST['namename'];
	
	$message=$_POST['message'];

        $num = 24;

	$insert=mysql_query("insert into `okaymunchy`.`commenttable`(`name`, `message`,`com_id`)values('$name','$message', '$num')")or die(mysql_error());



	header("Location:comet8.php");
	}
?>