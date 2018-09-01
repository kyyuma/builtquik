<?php
session_start();
include('connect.php');
if (!isset($_SESSION['login'])){ //checks login has been defined before allowing access to certain pages
	header('Location: supplier.html');  //if login not defined take back to login
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
        <a class="navbar-brand js-scroll-trigger" href="#">BuiltQuik</a>
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
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Back Home</a>
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
            <h2 class="font-weight-light mb-0">Prototype</h2>
        </div>
    </header>
   
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h3 class="text-center text-uppercase text-white">Your Workshops</h3>
        <hr class="star-light mb-5">
        <!--<div class="row">
          <div class="col-lg-4 ml-auto">-->
           
         <!-- </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">
                
          </div>
        </div> -->
        <div class="text-center mt-4">
            		<table border='1'>
				<tr>
					<th class='textalign'>Workshop ID</th>
					<th style='text-align: center;'>Address</th>
					<th style='text-align: center;'>Office Contact</th>
                    <th style='text-align: center;'>Email</th>
                    <th style='text-align: center;'>Type</th>
                    <th style='text-align: center;'>Delivery Distance</th>
				</tr>
        <?php
        $select = mysqli_query($con,"SELECT * FROM workshops WHERE SupplierId ='".$_SESSION['login']."' ");
            //WHERE SupplierId ='".$_SESSION['login']."'
        while($grab = mysqli_fetch_array($select,MYSQLI_ASSOC))
	   {
            $a = array();
            $a['workshopID'] = $grab['workshopID'];
            $a['Address'] = $grab['Address'];
            $a['OfficeContact'] = $grab['OfficeContact'];
            $a['Email'] = $grab['Email'];
            $a['Type'] = $grab['Type'];
            $a['deliveryDistance'] = $grab['deliveryDistance'];
            
            echo "

				<tr>
					<td class='accountdetailsedit'>". $a['workshopID']. "</td>
					<td class='accountdetailsedit'>". $a['Address']. "</td>
					<td class='accountdetailsedit'>". $a['OfficeContact']. "</td>
                    <td class='accountdetailsedit'>". $a['Email']. "</td>
                    <td class='accountdetailsedit'>". $a['Type']. "</td>
                    <td class='accountdetailsedit'>". $a['deliveryDistance']. "km</td>
				</tr>
				
		";
	}
        ?>     
         </table>
	<br> 
        </div>
      </div>
    </section>
      
        <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h3 class="text-center text-uppercase text-white">Your Info</h3>
        <hr class="star-light mb-5">
        <!--<div class="row">
          <div class="col-lg-4 ml-auto">-->
           
         <!-- </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">
                
          </div>
        </div> -->
        <div class="text-center mt-4">
        <?php
        $select = mysqli_query($con,"SELECT * FROM supplier WHERE SupplierId ='".$_SESSION['login']."' ");
            //WHERE SupplierId ='".$_SESSION['login']."'
        while($grab = mysqli_fetch_array($select,MYSQLI_ASSOC))
	   {
            $a = array();
            $a['SupplierID'] = $grab['SupplierID'];
            $a['CompanyName'] = $grab['CompanyName'];
            $a['ABN'] = $grab['ABN'];
            $a['PhoneNumber'] = $grab['PhoneNumber'];
            $a['Email'] = $grab['Email'];
            $a['StreetNumber'] = $grab['StreetNumber'];
            $a['StreetName'] = $grab['StreetName'];
            $a['Suburb'] = $grab['Suburb'];
            $a['State'] = $grab['State'];
            $a['Postcode'] = $grab['Postcode'];
            $a['Region'] = $grab['Region'];
            $a['password'] = $grab['password'];
            
            echo "<form action='UpdateDetails.php' method='post'>
		<table>
				<tr>
					<th class='textalign'>Field</th>
					<th style='text-align: left; text-indent: 50px;'>Current details</th>
					<th style='text-align: left; text-indent: 50px;'>New details</th>
				</tr>
				<tr>
					<th><br></th>
				</tr>
				<tr>
					<th class='textalign'>User ID </th>
					<th class='accountdetailsedit'>". $a['SupplierID']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[SupplierID]' disabled></input></th>
				</tr>
				<tr>
					<th class='textalign'>First  name</th>
					<th class='accountdetailsedit'>". $a['CompanyName']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[CompanyName]' name='Mfirstname' minlength='1'></input></th>
				</tr>
				<tr>
					<th class='textalign'>Last name</th>
					<th class='accountdetailsedit'>". $a['ABN']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[ABN]' name='Mlastname' minlength='1' required></input></th>
				</tr>
				<tr>
					<th class='textalign'>Agency</th>
					<th class='accountdetailsedit'>". $a['PhoneNumber']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[PhoneNumber]' name='Magency' minlength='1'></input></th>
				</tr>
				<tr>
					<th class='textalign'>Address</th>
					<th class='accountdetailsedit'>". $a['Email']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[Email]' name='Maddress' minlength='1' required></input></th>
				</tr>
				<tr>
					<th class='textalign'>Phone</th>
					<th class='accountdetailsedit'>". $a['StreetNumber']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[StreetNumber]' name='Mphone' minlength='1' required></input></th>
				</tr>
				<tr>
					<th class='textalign'>Birth date</th>
					<th class='accountdetailsedit'>". $a['StreetName']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[StreetName]' disabled></input></th>
				</tr>
				<tr>
					<th class='textalign'>Email</th>
					<th class='accountdetailsedit'>". $a['Suburb']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[Suburb]' name='Memail' minlength='1' required></input></th>
				</tr>
                <tr>
					<th class='textalign'>Email</th>
					<th class='accountdetailsedit'>". $a['State']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[State]' name='Memail' minlength='1' required></input></th>
				</tr>
                <tr>
					<th class='textalign'>Email</th>
					<th class='accountdetailsedit'>". $a['Postcode']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[Postcode]' name='Memail' minlength='1' required></input></th>
				</tr>
                <tr>
					<th class='textalign'>Email</th>
					<th class='accountdetailsedit'>". $a['Region']. "</th>
					<th class='accountdetailsedit'><input type='text' value='$a[Region]' name='Memail' minlength='1' required></input></th>
				</tr>
				<tr>
					<th class='textalign'>Password</th>
					<th class='accountdetailsedit'><img src='img/secureLogo.ico' style='width: 22px; height: 22px;'></img></th>
					<th class='accountdetailsedit'><input type='password' name='Mpassword' minlength='1' required></input></th>
				</tr>
		</table>
	<br></br>
	<input type=button onClick=location.href='Account.php' value=Back>
	<input type='submit' value='Update'></input>
	</form>";
	}
        ?>     
          
        </div>
      </div>
    </section> 
      
     <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h3 class="text-center text-uppercase text-white">Your Contractors</h3>
        <hr class="star-light mb-5">
        <!--<div class="row">
          <div class="col-lg-4 ml-auto">-->
           
         <!-- </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">
                
          </div>
        </div> -->
        <div class="text-center mt-4">
        		<table border='1'>
				<tr>
					<th class='textalign'>Contractor ID</th>
					<th style='text-align: center;'>Name</th>
                    <th style='text-align: center;'>Trade</th>
					<th style='text-align: center;'>Contact Number</th>
                    <th style='text-align: center;'>Address</th>
                    <th style='text-align: center;'>Region</th>
                    <th style='text-align: center;'>Level of Qualification</th>
                    <th style='text-align: center;'>Trainees</th>
                    
				</tr>
        <?php
        $select = mysqli_query($con,"SELECT * FROM contractor WHERE SupplierId ='".$_SESSION['login']."'");
            //WHERE SupplierId ='".$_SESSION['login']."'
        while($grab = mysqli_fetch_array($select,MYSQLI_ASSOC))
	   {
            $a = array();
            $a['ContractID'] = $grab['ContractID'];
            $a['ContractorName'] = $grab['ContractorName'];
            $a['ContactNumber'] = $grab['ContactNumber'];
            $a['Region'] = $grab['Region'];
            $a['Address'] = $grab['Address'];
            $a['Qualification'] = $grab['Qualification'];
            $a['Trainees'] = $grab['Trainees'];
            $a['Type'] = $grab['Type'];
            
            echo "
				<tr>
					<td class='accountdetailsedit'>".  $a['ContractID']. "</td>
					<td class='accountdetailsedit'>".  $a['ContractorName']. "</td>
					<td class='accountdetailsedit'>". $a['Type']. "</td>
                    <td class='accountdetailsedit'>". $a['ContactNumber']. "</td>
                    <td class='accountdetailsedit'>". $a['Address']. "</td>
                    <td class='accountdetailsedit'>". $a['Region']. "</td>
                    <td class='accountdetailsedit'>". $a['Qualification']. "</td>
                    <td class='accountdetailsedit'>". $a['Trainees']. "</td>
				</tr>
				
		";
	}
        ?>     
        </table>
	<br>  
        </div>
      </div>
    </section>
      
        <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h3 class="text-center text-uppercase text-white">Your Materials</h3>
        <hr class="star-light mb-5">
        <!--<div class="row">
          <div class="col-lg-4 ml-auto">-->
           
         <!-- </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">
                
          </div>
        </div> -->
        <div class="text-center mt-4">
        <table border='1'>
				<tr>
					<th class='textalign'>Material ID</th>
					<th style='text-align: center;'>Material Name</th>
                    <th style='text-align: center;'>Material Type</th>
					<th style='text-align: center;'>Component Type</th>
                    <th style='text-align: center;'>Length</th>
                    <th style='text-align: center;'>Width</th>
                    <th style='text-align: center;'>Thickness</th>
                    
				</tr>
        <?php
        $select = mysqli_query($con,"SELECT * FROM materials JOIN itemlist ON materials.MaterialID = itemlist.MaterialID WHERE SupplierId ='".$_SESSION['login']."' ");
            //WHERE SupplierId ='".$_SESSION['login']."'
        while($grab = mysqli_fetch_array($select,MYSQLI_ASSOC))
	   {
            $a = array();
            $a['MaterialID'] = $grab['MaterialID'];
            $a['MaterialName'] = $grab['MaterialName'];
            $a['MaterialType'] = $grab['MaterialType'];
            $a['Type'] = $grab['Type'];
            $a['Length'] = $grab['Length'];
            $a['Width'] = $grab['Width'];
            $a['Thickness'] = $grab['Thickness'];
            
            echo "
				<tr>
					<td class='accountdetailsedit'>".  $a['MaterialID']. "</td>
					<td class='accountdetailsedit'>".  $a['MaterialName']. "</td>
					<td class='accountdetailsedit'>". $a['Type']. "</td>
                    <td class='accountdetailsedit'>". $a['MaterialType']. "</td>
                    <td class='accountdetailsedit'>". $a['Length']. "</td>
                    <td class='accountdetailsedit'>". $a['Width']. "</td>
                    <td class='accountdetailsedit'>". $a['Thickness']. "</td>
				</tr>";
				
	}
    
        ?>     
          </table>
	   <br>
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
    <script src="js/supplierupdate.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>      