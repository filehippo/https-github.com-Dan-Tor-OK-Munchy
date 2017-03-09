<?php

//Started in 12/26/2016 - 9:40 am nook cafe 
//Alfred Albizures in collaboration with william albizures
//Completed code on 12/30/2016 - 3:42PM Starbucks wallisville rd
// 832-414-0264 alfredalbizures@gmail.com

//SQL DataBase log in information from the Cpanel in Godaddy

$servername = "localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";


//create connection

$conn = new mysqli($servername, $username, $password, $dbName);

//check connection

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}


if(!mysqli_select_db($conn,'okaymunchy'))
{

echo 'database not selected ';

}





$Name = $_POST[`name`];
$addr = $_POST[`stnum`];
$stn = $_POST[`stname`];
$st = $_POST[`state`];
$zip = $_POST[`zip`];




INSERT INTO  `okaymunchy`.`base` (

`id` ,
`name` ,
`address num` ,
`street` ,
`state` ,
`zip`
)
VALUES (
NULL ,  '$Name',  '$addr',  '$stn',  '$st',  '$zip'
);



if (!mysqli_query($conn,$sql))
{

echo 'Not Inserted';

}

else
{
echo"Inserted";


}

header("refresh:2; url=test.html");

    



?>








