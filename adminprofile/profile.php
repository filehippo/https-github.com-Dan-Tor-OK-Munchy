<?php
include('session.php');
?>
<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="/indexsources/jquery-ui.css">
  <script src="/indexsources/jquery-1.10.2.js"></script>
  <script src="/indexsources/jquery-ui.js"></script>


<meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/docs/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/cssfiles/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/cssfiles/JS/html5shiv.min.js"></script>
      <script src="/cssfiles/JS/respond.min.js"></script>
    <![endif]-->

 <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: '/prengine/search.php'
    });
  });
  </script>

<head>
<title>Okay Munchy DB</title>
<link href="/cssfiles/style.css" rel="stylesheet" type="text/css">
</head>


<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/adminprofile/profile.php">Entry Management</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="manadmins.php">Manage Admins</a></li>
            <li><a href="/adminprofile/addrest/test.html">Add Restaurant</a></li>
            <li><a href="addmenuitem.php">Manage Menu</a></li>
            <li><a href="/adminprofile/managecomment.php">Manage Comments </a></li>
            
          </ul>
        </div>
      </div>
    </nav>









<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="/adminprofile/logout.php">Log Out</a></b>
</div>


<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action="" method="post">
        <fieldset>
          <h2>Admin Search.....</h2>
          <hr class="colorgraph">
          <div class="form-group">

<div class="ui-widget">
<form name="form1" method = "post" action="/adminprofile/profile.php">

            <input id="skills" input name="skills" type="text" label for="skills" class="form-control input-lg">
          </div>
          
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="Submit" value="Search" class="btn btn-lg btn-success btn-block">
            </div>
</form>
</div>


            
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>




    


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


$sql = "SELECT * FROM `base` ";


$city = $_POST['skills'];


if($city)
{
$sql = "SELECT * FROM  `base` WHERE  `name` =  '$city' ";
}


//If there is a connection display the results 
//It displays in a table format on the buttom 
//The echo commands display to the website

$result = $conn ->query($sql);

if ($result-> num_rows >0){

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';

echo "<thead><tr>

<th>name</th>
<th>address #</th>
<th>str name</th>
<th>state</th>
<th>zip</th>
<th>categories</th>
<th>phone #</th>

<th>actions</th></tr>";

echo"</thead>";

	while($row = $result -> fetch_assoc()){

echo"<tr><tbody><tr>

<form action=update.php method=post>

<td><input type=text name=rname value='" . $row["name"] . "'></td>
<td><input type=text name=address value='" . $row["address num"] . "'></td>
<td><input type=text name=street value='" . $row["street"] . "'></td>
<td><input type=text name=state value='" . $row["state"] . "'></td>
<td><input type=text name=zipo value='"  . $row["zip"] . "'></td>
<td><input type=text name=cate value='"  . $row["categories"] . "'></td>
<td><input type=text name=phonn value='"  . $row["phone"] . "'></td>

<td><input type=hidden name=id_base value='" . $row["id_base"] . "'></td>

<td><input type=submit value=Update></td>

</form>

<td><a href =delete.php?id_base=". $row["id_base"] . " >Delete</a></td></tr>";

echo"</tbody>";

		}

        echo'</table>';
        echo'</div>';





       

}else{
	echo"0 results";
}

$conn->close();


?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https:/cssfiles/JS/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/bootstrap-3.3.7/docs/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

  <link rel="stylesheet" href="/indexsources/jquery-ui.css">
  <script src="/indexsources/jquery-1.10.2.js"></script>
  <script src="/indexsources/jquery-ui.js"></script>








</body>
</html>