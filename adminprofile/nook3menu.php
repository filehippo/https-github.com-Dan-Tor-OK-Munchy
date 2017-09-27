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
$addpw = mysqli_real_escape_string($link, $_REQUEST['stnum']);
$addnewrest = mysqli_real_escape_string($link, $_REQUEST['select']);



$sql = "INSERT INTO  `okaymunchy`.`Food Menu` (`fo_id` ,`item`,`price`,`rest_id` ) VALUES (NULL ,  '$Name',  '$addpw',  '$addnewrest')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("refresh:2; url=addmenuitem.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>