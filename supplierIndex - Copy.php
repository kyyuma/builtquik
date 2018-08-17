<?php
session_start();
if (!isset($_SESSION['login'])){ //checks login has been defined before allowing access to certain pages
	//header('Location: supplier.html');  //if login not defined take back to login
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">BuiltQuik</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#workshop">Workshops</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contractor">Contractors</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#material">Materials</a>
            </li>
              <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#equipment">Equipment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
            <h1 class="text-uppercase mb-0">Builtquiks Building Solutions</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Prototype</h2>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="workshop">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Add Workshop Details</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
             <form name="sentMessage" id="workshopForm" novalidate="novalidate" method="POST" action="workshopadd.php">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name"  name="sworkshop" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <br>
                <select id="stype" name="stype" class="form-control" required="required" data-validation-required-message="Please enter your email address." >
                    <option value="Fabrication"> Fabrication</option>
                    <option value="Carpentry"> Carpentry</option>
                    <option value="Mechanics"> Mechanics</option>
                    <option value="Products Distribution"> Products Distribution</option>
                    <option value="Shed/Factory Space"> Shed/Factory Space</option>
                </select>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div id="workshopupdate" class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Capability</label>
                  <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Welding and Fabrication<br>
                  <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Metal Cutting<br>
                  <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Processing<br>
                    <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Galvanising<br>
                    <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Distribution<br>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
                 
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Qualifications</label>
                  <input id="cregion" name="sregion" type="text"  placeholder="Trade Qualification Type" required="required" data-validation-required-message="Please enter your Region."> <br>
                    <input id="cregion" name="sregion" type="text"  placeholder="Number of Qualified" required="required" data-validation-required-message="Please enter your Region."> <br>
                    <button type="submit" name="wsubmit" class="btn btn-primary btn-xl" id="sendMessageButton">Add Another Qualification</button>
                    
                    <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Equipment</label>
                  <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Crane<br>
                    <input class="form-control" id="cdel" name="cdel" type="tel" placeholder="Loading Capacity" required="required" data-validation-required-message="Please enter your Delivery Distance.">
                  <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Forklift<br>
                    <input class="form-control" id="cdel" name="cdel" type="tel" placeholder="Loading Capacity" required="required" data-validation-required-message="Please enter your Delivery Distance.">
                  <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Welder<br>&nbsp&nbsp
                    <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Mig<br>&nbsp&nbsp
                    <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Tig<br>
                    <input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Truck<br>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Delivery Distance</label>
                  <input class="form-control" id="cdel" name="cdel" type="tel" placeholder="Delivery Distance" required="required" data-validation-required-message="Please enter your Delivery Distance.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" name="wsubmit" class="btn btn-primary btn-xl" id="sendMessageButton">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="contractor">
      <div class="container">
        <h2 class="text-center text-uppercase text-white mb-0">Add Contractor Details</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contractorForm" novalidate="novalidate" method="POST" action="contractadd.php">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name"  name="cconname" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <br>
                <select id="ctype" name="ctype" class="form-control" required="required" data-validation-required-message="Please enter your email address." >
                    <option value="Electrician"> Electrician</option>
                    <option value="Plumber"> Plumber</option>
                    <option value="Carpenter/Builder"> Carpenter/Builder</option>
                    <option value="Concreter"> Concreter</option>
                    <option value="Roofer"> Roofer</option>
                    <option value="Brickie"> Brickie</option>
                </select>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Region</label>
                  <input class="form-control" id="cregion" name="cregion" type="tel" placeholder="Region" required="required" data-validation-required-message="Please enter your Region.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Capabilities</label>
                  <textarea class="form-control" id="ccapability" name="ccapability" rows="5" placeholder="Capabilities" required="required" data-validation-required-message="Please enter your capabilities."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="cphone" name="cphone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Qualification</label>
                  <input class="form-control" id="cqual" name="cqual" type="tel" placeholder="Qualification" required="required" data-validation-required-message="Please enter your qualificaition.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" name="csubmit" class="btn btn-primary btn-xl" id="sendMessageButton">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="material">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Add materials</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="materialForm" novalidate="novalidate" method="POST" action="materialadd.php">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <br>
                <select id="ctype" name="ctype" class="form-control" required="required" data-validation-required-message="Please enter your email address." >
                    <option value="Wood"> Wood</option>
                    <option value="Metal"> Metal</option>
                    <option value="Fit-out Materials"> Fit-out Materials</option>
                    <option value="Windows and Doors"> Windows and Doors</option>
                    <option value="Plumbing Suppliers"> Plumbing Suppliers</option>
                    <option value="Appliances"> Appliances</option>
                </select>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
             <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Type</label>
                  <input id="cregion" name="sregion" type="radio" required="required" data-validation-required-message="Please enter your Region."> Structural<br>
                  <input id="cregion" name="sregion" type="radio" required="required" data-validation-required-message="Please enter your Region."> Cladding<br>
                  <input id="cregion" name="sregion" type="radio" required="required" data-validation-required-message="Please enter your Region."> Connection<br>
                </div>
              </div>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Length</label>
                  <input class="form-control" id="clength" name="clength" type="tel" placeholder="Material Name" required="required" data-validation-required-message="Please enter your Region.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Thickness</label>
                  <input class="form-control" id="clength" name="clength" type="tel" placeholder="Thickness" required="required" data-validation-required-message="Please enter your Region.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Length</label>
                  <input class="form-control" id="clength" name="clength" type="tel" placeholder="Length" required="required" data-validation-required-message="Please enter your Region.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Width</label>
                  <input class="form-control" id="cwidth" name="cwidth" type="tel" placeholder="Width" required="required" data-validation-required-message="Please enter your Region.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" name="msubmit" class="btn btn-primary btn-xl" id="sendMessageButton">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
      
      <section class="bg-primary text-white mb-0" id="equipment">
      <div class="container">
        <h2 class="text-center text-uppercase text-white mb-0">Add Equipment details</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="equipmentForm" novalidate="novalidate" method="POST" action="equipmentadd.php">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name"  name="cconname" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <br>
                <select id="ctype" name="ctype" class="form-control" required="required" data-validation-required-message="Please enter your email address." >
                    <option value="Fabrication & Workshop Facilities"> Fabrication & Workshop Facilities</option>
                    <option value="Materials Processing and Packaging"> Materials Processing and Packaging</option>
                    <option value="Distribution"> Distribution</option>
                    <option value="Installation Contractor Equiptment"> Installation Contractor Equiptment</option>
                    <option value="Building, Plumbing Concreter, Civil"> Building, Plumbing Concreter, Civil</option>
                </select>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Capabilities</label>
                  <textarea class="form-control" id="ccapability" name="ccapability" rows="5" placeholder="Capabilities" required="required" data-validation-required-message="Please enter your capabilities."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" name="esubmit" class="btn btn-primary btn-xl" id="sendMessageButton">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">2215 John Daniel Drive
              <br>Clark, MO 65243</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Freelancer</h4>
            <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
