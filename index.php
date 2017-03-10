<html>
<head>

<!-- Generic Boot Strap Code that used by pigeon html tool -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="indexsources/jquery.min.js"></script>
        <script type="text/javascript" src="indexsources/bootstrap.min.js"></script>
        <link href="indexsources/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="cssfiles/munchy.css" rel="stylesheet" type="text/css">


<!-- Under are the librarys that help the search drop down menu box -->

        <link rel="stylesheet" href="indexsources/searchsc/jquery-ui.css">
        <script src="indexsources/searchsc/jquery-1.10.2.js"></script>
        <script src="indexsources/searchsc/jquery-ui.js"></script>


<!-- The Start of the code that dynamically searches  -->

 <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'prengine/search.php'
    });
  });
  </script>

<!-- The End of the code that dynamically searches  -->


    </head>
     <body>

<!-- Under is the Navigation Bar yo  -->

        <div class="cover">
            <div class="navbar-default navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><span>OKM!</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <!--This here is the links for the about page-->
                                <a href="about.html">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

<!-- End of Navigation Bar -->


            <div class="cover-image" style="background-image : url('pics/lightpaper.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 id="title">
                            <strong>Okay Munchy</strong>
                        </h1>


                        <!--id seach_gap has a top_margin of 50px-->
                                          <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                 
                      <fieldset>
                      


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
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>

<!-- JavaScript that makes the page scroll down to the Body of the page -->

<script src="indexsources/scroll/jquery.min.js"></script>
<script src="indexsources/scroll/jquery.smooth-scroll.min.js"></script>
<script>
$('.smooth').on('click', function() {
    $.smoothScroll({
        scrollElement: $('body'),
        scrollTarget: '#' + this.id
    });
    
    return false;
});
</script>
<!-- End the scroll down script  -->


<!-- Start of the page block  -->

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


if(array_intersect($array1, $array2))
{
echo "<iframe height='300' scrolling='yes' title='Responsive Google Map' src='exp/comet.php' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>        
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
            <div class="background-image background-image-fixed" style="background-image : url('pics/lightpaper.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">
                            <b>Hottest Munchies!</b>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
<!-- Under is the style that allows hyperlinks to remove that stupid line underneath -->

        <style type="text/css">a {text-decoration: none}</style>

<!-- Under Hot munchys sections where rows and columns take you independent pages by category's   -->
<!-- Simple enough create a page for all 9 pages with a sql command and we are done    -->


        <!--This is the table for "Hottest Munchies" nuke it as neccessary a better
        one can be built this is a place holder -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Top</th>
                                    <th>Categories</th>
                                    <th>Price Range</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">Black Hole</a></td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">Coffee</a></td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">Low$</a></td>

                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">Catalina Cafe</a></td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">Sandwich</a></td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">Medium$</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">Honey Moon Cafe</a></td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">Tacos</a></td>
                                    <td><a href="http://www.computerhope.com" style="text-decoration: none">High$$</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	
	
		


        <div class="section">
            <div class="background-image" style="background-image : url('pics/lightpaper.png')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>
                            <b>Okay Munchy!</b>
                        </h1>
                        <p>Okay Munchy is a simple food and drink Web App. Made by sleep deprived
                            students for sleep deprived students.</p>
                        <p>Alfred Albizures, Carlos Moreno, Daniel Torres. All Rights Reserved 2017.</p>
                    </div>
                    <div class="col-md-6">
                        <!--So these BR tags are actually really ghetto but it gets the job done,
                        might switch em later-->
                        <br>
                        <br>
                        <br>
                        <p>If you are a business owner who would like to see your business on Okay
                            Munchy, send us an email @ email.okaymunchy.com
                            <br>with: Your name, the name of your business, and a business details (Category,
                            hours, phone, etc) and a short description of what you guys do.</p>
                    </div>
                </div>
                <div class="row">

                     <div class="col-md-12 hidden-xs text-right">
                <a href="adminprofile/admin.php"><img src="pics/cf.png"></a>
              </div>


                </div>
            </div>
        </div>
    
<!-- This code is for the dynamic jquery that guesses the entrys and drop down query -->

<link rel="stylesheet" href="indexsources/searchsc/jquery-ui.css">
  <script src="indexsources/searchsc/jquery-1.10.2.js"></script>
  <script src="indexsources/searchsc/jquery-ui.js"></script>


</body></html>

