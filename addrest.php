<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="addrest.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="profile.php">Admin Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
      
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal" role="form">







<div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Add Restaurant</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->


<form name="contactform" method="POST" action="insertrest.php">


                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">



                                <label>Name</label>
                                <input name="first_name" type="text" placeholder="Name"  class="form-control" id="first_name"  required data-validation-required-message="Please enter your name.">


                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">

                                <label>address number</label>
                                 <input name="address_number" type="text" placeholder="address number"  class="form-control" id="address_number" required data-validation-required-message="Please enter your name.">


                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">

                                <label>street name</label>
                                 <input name="address_name" type="text" placeholder="street name"  class="form-control" id="address_name" required data-validation-required-message="Please enter your name.">


                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">

                                 <label>State</label>
                                 <input name="state" type="text" placeholder="state"  class="form-control" id="state" required data-validation-required-message="Please enter your name.">

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>


<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">

                                <label>Zipcode</label>
                                 <input name="Zipcode" type="text" placeholder="Zipcode"  class="form-control" id="Zipcode" required data-validation-required-message="Please enter your name.">


                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <br>
                        <div id="success"></div>


                        <div class="row">


                            <input type="submit" value="Submit" name='submit' />
	

                            </div>
                        </div>
<a href="profile.php" class="btn btn-default">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
		
		
		
    </section>


  

</body></html>