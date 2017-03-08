<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="okmunch.css" rel="stylesheet" type="text/css">



<!-- This code is for the dynamic jquery that guesses the entrys and drop down query -->

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<!-- This code is is the one that accesses the search.php and sql table thats a scrip -->

 <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>



  </head><body>
    <div class="cover">
      <div class="navbar-default navbar-inverse navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>



            <a class="navbar-brand" href="index.php"><img src=""></a>


          </div>

          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cover-image" style="background-image : url('pics/blaco.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">

            <div class="section">
              <div class="container">
                <div class="row" style="margin-top:20px">
                  <!--This whole block below is the search function-->
                  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form action="" method="post">
                      <fieldset>
                        <div class="section">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-12">
                                <img class="center-block img-responsive" src="pics/logo.png">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="colorgraph">
                        <div class="form-group">
                          <div class="ui-widget">

<form name="form1" method = "post" action="index.php/#portfolio">

                            <input id="skills" input="" name="skills" type="text" label="" for="skills" class="form-control input-lg">
                          </div>
                          <hr class="colorgraph">
                          <div class="row">
                            <div class="col-md-12">
                           <input type="submit" value="Search for Munchies"  class="btn btn-lg btn-primary btn-block" name="Submit"formaction="#portfolio">
                             </form>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>

                  <!-- END of search block-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
<script>
$('.smooth').on('click', function() {
    $.smoothScroll({
        scrollElement: $('body'),
        scrollTarget: '#' + this.id
    });
    
    return false;
});
</script>



<div id="page2">
  <a id="portfolio" class="smooth"></a>
 


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

$array1 = array(0 => 'Fix Coffeebar', 1 => 'Slowpokes', 2 => 'A 2nd Cup', 3 => 'Cafeza');

//the post command is taking the input from html to the php

$city = $_POST['skills'];

//array 2 puts the value in an array for comparing 

$array2 = array($city);

//array 3 is grabbing the maps and placing them into the iframe exeption

$array3 = array('maps/black.html','maps/black2.html');

//array 4 is the description 

$array4 = array('des/dex.html','maps/black2.html');

//array 5 has the title placed in iframe mode

$array5 = array('title/t.html','maps/black2.html');

$key = array_search($city, $array1);

//the key is found based on the locations compared on array1 to the users input

if(array_intersect($array1, $array2))
{
echo "<iframe height='120' scrolling='no' title='Responsive Google Map' src='$array5[$key]' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>        
</iframe>";  
}



if(array_intersect($array1, $array2))
{
echo "<iframe height='320' scrolling='no' title='Responsive Google Map' src='$array3[$key]' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>        
</iframe>";  
}


if(array_intersect($array1, $array2))
{
echo "<iframe height='150' scrolling='no' title='Responsive Google Map' src='$array4[$key]' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>        
</iframe>";  
}


//This is a SQL command looking thew the base table and comparing an exact comparison name and the $city users input

$sql = "SELECT * FROM  `base` WHERE  `name` =  '$city' ";


//If there is a connection display the results 
//It displays in a table format on the buttom 
//The echo commands display to the website

$result = $conn ->query($sql);

if ($result-> num_rows >0){

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped">';

	echo "<thead><tr><th>name</th><th>address #</th><th>str name</th><th>state</th><th>zip</th></tr>";

echo"</thead>";

	while($row = $result -> fetch_assoc()){

		echo"<tbody><tr><td>" . $row["name"] . "</td><td>" . $row["address num"] . "</td><td>" . $row["street"] . "</td><td>" . $row["state"] . "</td><td>"  . $row["zip"] . "</td></tr>";

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


    <div class="section">
      <div class="background-image background-image-fixed" style="background-image : url('pics/pattern.png')"></div>
      <div class="container"></div>
      
    </div>
    <!--Display CODE WOULD GO HERE-->
    <div class="section">
      <div class="background-image background-image-fixed" style="background-image : url('pics/pattern.png')"></div>
      <div class="container"></div>
      
    </div>
    <!--Footer section-->
    <footer class="section">
      <div class="background-image background-image-fixed" style="background-image : url('pics/foot.jpeg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>
              <font color="white">Okay Munchey!</font>
            </h1>
            <font color="white">
              <p contenteditable="true">Made by sleep deprived students for sleep deprived students.&nbsp;</p>
            </font>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="admin.php"><i class="fa fa-3x fa-cogs fa-fw hub text-inverse"></i></a>


              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

<!-- This code is for the dynamic jquery that guesses the entrys and drop down query -->

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



  

</body></html>