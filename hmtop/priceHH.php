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

    <title>OKM Money Money</title>

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



        <h1><i>Higher prices $$$$$</i></h1>



<BR>
<BR>

<p align="left"><b><i>Description:</i><b></p>

<p>Because you got money money and decided that you dont want none of that cheap stuff bra $$$$$
</p>
<BR>
<BR>











<?php

$servername ="localhost";
$username ="uhdmunchy";
$password ="Coffee2017";
$dbName ="okaymunchy";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn -> connect_error){
	die ("connection failed: " . $conn -> connect_error);
}

//$sql = "SELECT * FROM  `Food Menu` WHERE  `price` >  '10' ";



$city ="10";

$sql = "SELECT name, item, price
FROM base
JOIN  `Food Menu` ON base.id_base =  `Food Menu`.rest_id
AND  `Food Menu`.`price` > '$city'  ";






//$select=mysql_query("SELECT * FROM  `Food Menu` WHERE  `rest_id` =  '18' ");



$result = $conn ->query($sql);

if ($result-> num_rows >0){
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';
	echo "<thead>
<tr>

<th>Name</th>
<th>Menu: Items</th>
<th>Price</th>
</tr>";
echo"</thead>";

	while($row = $result -> fetch_assoc())

{
echo"<tbody>
<tr>
<td>" . $row["name"] . "</td>
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
