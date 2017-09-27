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

    <title>OKM All Restaurants</title>

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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/index.php">All menus</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/index.php">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
      <div class="starter-template">



        <h1><i>All Restaurants</i></h1>


<p align="left"><b><i>Description:</i><b></p>


<?php
$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);
$query = "SELECT COUNT(*) FROM `base` ";
$output = $conn->query($query);
$count = $output->fetch_row();

//echo "Total number of retrieved rows is ". $count[0];
    
    echo '<div class="section bars">';
      echo '<div class="container">';
        echo'<div class="row">';
          echo'<div class="col-md-12">';

            echo'<h1 class="text-center">';
            echo "There is a total of $count[0] Restaurants";
            echo'</h1>';
            
          echo'</div>';
        echo'</div>';
      echo'</div>';
    echo'</div>';

$conn->close();

?>




<p align="left"><b><i>Details:</i><b></p>

<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}




$sql = "SELECT * FROM `base` ";


$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>


<th>name</th>
<th>#</th>
<th>st name</th>
<th>ST</th>
<th>ZIP</th>
<th>categ</th>
<th>ring ring</th>

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
<td>" . $row["zip"] . "</td>
<td>" . $row["categories"] . "</td>
<td>" . $row["phone"] . "</td>




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
$query = "SELECT COUNT(*) FROM `events` ";
$output = $conn->query($query);
$count = $output->fetch_row();

//echo "Total number of retrieved rows is ". $count[0];
    
    echo '<div class="section bars">';
      echo '<div class="container">';
        echo'<div class="row">';
          echo'<div class="col-md-12">';

            echo'<h1 class="text-center">';
            echo "There is a total of $count[0] Events";
            echo'</h1>';
            
          echo'</div>';
        echo'</div>';
      echo'</div>';
    echo'</div>';

$conn->close();

?>




<p align="left"><b><i>Details:</i><b></p>

<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}




$sql = "SELECT name,event,day,time FROM base 

JOIN `events` ON base.id_base = `events`.event_id";



$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>


<th>name</th>
<th>event</th>
<th>day</th>
<th>time</th>


</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>


<td>" . $row["name"] . "</td>
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
$query = "SELECT COUNT(*) FROM `Parking` ";
$output = $conn->query($query);
$count = $output->fetch_row();

//echo "Total number of retrieved rows is ". $count[0];
    
    echo '<div class="section bars">';
      echo '<div class="container">';
        echo'<div class="row">';
          echo'<div class="col-md-12">';

            echo'<h1 class="text-center">';
            echo "Parking data for $count[0] Restaurants ";
            echo'</h1>';
            
          echo'</div>';
        echo'</div>';
      echo'</div>';
    echo'</div>';

$conn->close();

?>




<p align="left"><b><i>Details:</i><b></p>

<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}




$sql = "SELECT name,availablespots,pstatus,crowdedtime FROM base 

JOIN `Parking` ON base.id_base = `Parking`.park_id";



$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>


<th>name</th>
<th>available spots</th>
<th>status</th>
<th>crowded times</th>


</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>


<td>" . $row["name"] . "</td>
<td>" . $row["availablespots"] . "</td>
<td>" . $row["pstatus"] . "</td>
<td>" . $row["crowdedtime"] . "</td>



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
