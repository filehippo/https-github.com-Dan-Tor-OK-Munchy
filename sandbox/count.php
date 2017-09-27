<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>




<?php

//Started in 12/26/2016 - 9:40 am nook cafe 
//Alfred Albizures in collaboration with william albizures
//Completed code on 12/30/2016 - 3:42PM Starbucks wallisville rd
// 832-414-0264 alfredalbizures@gmail.com

//SQL DataBase log in information to connect to the database

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";


//creates the database connection

$conn = new mysqli($servername, $username, $password, $dbName);

//check connection for errors

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}


//The input of the search bar gets placed in this line html
//then placed in the city interval or string


//array 1 has the names of all the entry in the database
$array1 = array(0 => 'Black Hole Coffee House', 1 => 'The Nook Cafe', 2 => 'Honeymoon', 3 => 'Toasters', 4 => 'Brown Bag Deli', 5 => 'Which wich', 6 => 'Dizzy Kaktus', 7 => 'La Calle Tacos', 8 => 'Fusion Taco');


//the post command is taking the input from html to the php
$city = $_POST['skills'];


//array 2 puts the value in an array for comparing 
$array2 = array($city);


//array 3 is grabbing the maps and placing them into the iframe exeption
$array3 = array('hmtop/blackholem.php','hmtop/nookm.php','hmtop/honeym.php','hmtop/toasterm.php','hmtop/brownbagm.php','hmtop/wichm.php','hmtop/dism.php','hmtop/callem.php','hmtop/ftm.php');


$key = array_search($city, $array1);
//the key is found based on the locations compared on array1 to the users input



if(array_intersect($array1, $array2))
{
echo "<iframe height='2300' scrolling='no' title='Dynamic website calls' src='$array3[$key]' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>        
</iframe>";  
}





//This is a SQL command looking thew the base table and comparing an exact comparison name and the $city users input

//$sql = "SELECT * FROM  `base` WHERE  `name` =  '$city' ";


//If there is a connection display the results 
//It displays in a table format on the buttom 
//The echo commands display to the website

$result = $conn ->query($sql);

if ($result-> num_rows >0){

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';

	echo "<thead>
<tr>

<th>name</th>
<th>address #</th>
<th>str name</th>
<th>state</th>
<th>zipcode</th>
<th>categories</th>
<th>phone #</th>

</tr>";

echo"</thead>";

	while($row = $result -> fetch_assoc())
{

echo"<tbody>
<tr>

<td>" . $row["name"] . "</td>
<td>" . $row["address num"] . "</td>
<td>" . $row["street"] . "</td>
<td>" . $row["state"] . "</td>
<td>"  . $row["zip"] . "</td>
<td>"  . $row["categories"] . "</td>
<td>"  . $row["phone"] . "</td>
 
</tr>";



echo"</tbody>";

		}

        echo'</table>';
        echo'</div>';

       

}else{
	//echo"0 results";
}

$conn->close();


?>


<body>
  <script src="js/scripts.js"></script>
</body>
</html>


