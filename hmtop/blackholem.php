<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap-3.3.7/favicon.ico">

    <title>OKM Black Hole</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bootstrap-3.3.7/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="collapse navbar-collapse">
         
        </div><!--/.nav-collapse -->
      </div>
    
    <div class="container">
      <div class="starter-template">



        <h1><i>Black Hole Coffee House</i></h1>

<iframe height='320' scrolling='no' title='Responsive Google Map' src='hmmaps/blackholemap.html' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>        
</iframe>

<BR>
<BR>

<p align="left"><b><i>Description:</i><b></p>

<p>Hidden Inside a residential area this hipster coffee shop is located near rice university making it an ideal place to get coffee and study, big tables and plenty of outlets. </p>
<BR>
<BR>

<p align="left"><b><i>Details:</i><b></p>




<?php

//Testing join operation on database sql query to finish this assignment 
//SQL DataBase log in information to connect to the database

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

//creates the database connection

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}



$city ="Black Hole Coffee House";

//This is a SQL command looking thew the base table and comparing an exact comparison name and the $city users input

$sql = "SELECT * FROM  `base` WHERE  `name` =  '$city' ";

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




<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}

$sql = "SELECT * FROM  `Food Menu` WHERE  `rest_id` =  '10' ";


//$select=mysql_query("SELECT * FROM  `Food Menu` WHERE  `rest_id` =  '18' ");



$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>


<th>Menu: Items</th>
<th>Price</th>
</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>

<td>" . $row["item"] . "</td>
<td>" . $row["price"] . "</td>

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






<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}

//$sql = "SELECT provider, speed, 
//PASSWORD FROM base
//JOIN wifi ON base.id_base = wifi.wifi_id";


$sql = "SELECT * FROM  `wifi` WHERE  `wifi_id` =  '10' ";

$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>

<th>Internet provider</th>
<th>downspeed Mbps</th>
<th>upspeed Mbps</th>
<th>password</th>
</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>

<td>" . $row["provider"] . "</td>
<td>" . $row["downspeed"] . "</td>
<td>" . $row["upspeed"] . "</td>
<td>" . $row["password"] . "</td>

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




<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}

//$sql = "SELECT event FROM base
//JOIN events ON base.id_base = events.event_id";


$sql = "SELECT * FROM  `events` WHERE  `event_id` =  '10' ";


$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>


<th>Special Events</th>
<th>Day</th>
<th>Event Time</th>


</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>

<td>" . $row["event"] . "</td>
<td>" . $row["day"] . "</td>
<td>" . $row["time"] . "</td>


</tr>";
echo"</tbody>";
		}
        echo'</table>';
        echo'</div>';
}else{
	echo"0 results";
}
$conn->close();
?>




<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}


//$sql = "SELECT vendor FROM base
//JOIN vendors ON base.id_base = vendors.vend_id";

$sql = "SELECT * FROM  `vendors` WHERE  `vend_id` =  '10' ";

$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>


<th>Vendors</th>
</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>

<td>" . $row["vendor"] . "</td>


</tr>";
echo"</tbody>";
		}
        echo'</table>';
        echo'</div>';
}else{
	echo"0 results";
}
$conn->close();
?>



<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}


//$sql = "SELECT slaves FROM base
//JOIN staff ON base.id_base = staff.staff_id ";


$sql = "SELECT * FROM  `staff` WHERE  `staff_id` =  '10' ";





$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>


<th>Staff members</th>
</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>

<td>" . $row["slaves"] . "</td>


</tr>";
echo"</tbody>";
		}
        echo'</table>';
        echo'</div>';
}else{
	echo"0 results";
}
$conn->close();
?>


<?php
$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";
$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}
//$sql = "SELECT slaves FROM base
//JOIN staff ON base.id_base = staff.staff_id ";

$sql = "SELECT * FROM  `Parking` WHERE  `park_id` =  '10' ";
$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>
<th>available parking spots</th>
<th>Parking Status </th>
<th></th>
</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>

<td>" . $row["availablespots"] . "</td>
<td>" . $row["pstatus"] . "</td>


</tr>";
echo"</tbody>";
		}
        echo'</table>';
        echo'</div>';
}else{
	echo"0 results";
}
$conn->close();
?>



<?php
$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";
$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}
//$sql = "SELECT slaves FROM base
//JOIN staff ON base.id_base = staff.staff_id ";

$sql = "SELECT * FROM  `payment method` WHERE  `payment_id` =  '10' ";
$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>


<th>available parking spots</th>




<th></th>
</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>

<td>" . $row["method"] . "</td>



</tr>";
echo"</tbody>";
		}
        echo'</table>';
        echo'</div>';
}else{
	echo"0 results";
}
$conn->close();
?>










<p align="left"><b><i>Comments :</i><b></p>
<BR>

<iframe height='375' scrolling='yes' title='Responsive Google Map' src='/commentbox/comet.php' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>        
</iframe>



      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
