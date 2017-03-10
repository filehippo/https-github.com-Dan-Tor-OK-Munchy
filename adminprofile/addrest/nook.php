<?php


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "uhdmunchy", "Coffee2017", "okaymunchy");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['name']);
$addr = mysqli_real_escape_string($link, $_REQUEST['stnum']);
$stn = mysqli_real_escape_string($link, $_REQUEST['stname']);
$st = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);




$sql = "INSERT INTO  `okaymunchy`.`base` (`id` ,`name` ,`address num` ,`street` ,`state` ,`zip`) VALUES (NULL ,  '$Name',  '$addr',  '$stn',  '$st',  '$zip')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("refresh:2; url=test.html");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>