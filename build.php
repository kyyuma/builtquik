<?php
include ('connect.php');
include('LoggedBanner.php'); //logged banner is the top banner for all pages that can only be viewed once logged in
?>	

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h2 class="text-uppercase mb-0">Get Your BuiltQuik Quote!</h2>
          <hr class="star-light mb-5">
      <br>
    
      </div>
</header>

<!-- Input Contact Details -->

<div class="container">
<form>
    <div class="form-row">
    <div class="form-group col-md-6">
        <br><br>
      <label for="inputFname">First name</label>
      <input type="text" class="form-control" id="inputFname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
        <br><br>
      <label for="inputLname">Last name</label>
      <input type="text" class="form-control" id="inputLname" placeholder="Last Name">
    </div>
  </div>
    

    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputTel">Mobile</label>
      <input type="tel" class="form-control" id="inputTel" placeholder="+614 XXXX XXXX">
    </div>
  </div>
    
      <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputCompany">Company Name</label>
      <input type="text" class="form-control" id="inputCompanyName" placeholder="Company Name">
  </div>
    </div>
    
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="123 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, building, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
          <option>A.C.T.</option>
          <option selected>New South Wales</option>
          <option>Northern Territory</option>
          <option>Queensland</option>
          <option>South Australia</option>
          <option>Tasmania</option>
          <option>Victoria</option>
          <option>Western Australia</option>
       
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputPostCode">Post Code</label>
      <input type="text" class="form-control" id="inputPostCode">
    </div>
  </div>
    </form>
    </div>

 <div class="container buildcon">
     <form method="POST" action="quote.php" class="cd-form">
      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
          <img id="build" class="img-fluid rounded" src="img/builds/3bay.png" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>Frames</h1>
          <p>Select the number of frames you would like</p>
            <select id="baysnum" name="baysnum">
                <option value="3"> 3</option>
                <option value="6"> 6</option>
                <option value="9"> 9</option>
                <option value="11"> 11</option>
            </select><br><br>
             <p>Select the type of roof</p>
            <select id="bays" name="bays">
                <option value="Skew"> Skew</option>
                <option value="Skillion"> Skillion</option>
                <option value="Centre"> Centre Pitch</option>
            </select><br><br>
          <a class="btn btn-primary btn-lg" href="#">More Info</a>
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Floors</h2>
                  <?php
                    $fcheck = mysqli_query($con,"SELECT * FROM materials  WHERE MaterialType = 'Floor'");
                    echo '<select name="Floor">';
                        while ($fetch = mysqli_fetch_array($fcheck, MYSQLI_ASSOC))
                        {
                            echo '<option value="'.$fetch['MaterialName'].'">'.$fetch['MaterialName'].'</option>';
                        }
                    echo '</select>';
	               ?>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Walls</h2>
              <?php
                $fcheck = mysqli_query($con,"SELECT * FROM materials  WHERE MaterialType = 'Wall'");
                echo '<select name="Wall">';
                    while ($fetch = mysqli_fetch_array($fcheck, MYSQLI_ASSOC))
                    {
                        echo '<option value="'.$fetch['MaterialName'].'">'.$fetch['MaterialName'].'</option>';
                    }
                echo '</select>';
                ?>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Roof</h2>
              <?php
                $fcheck = mysqli_query($con,"SELECT * FROM materials  WHERE MaterialType = 'Roof'");
                echo '<select name="Roof">';
                    while ($fetch = mysqli_fetch_array($fcheck, MYSQLI_ASSOC))
                    {
                        echo '<option value="'.$fetch['MaterialName'].'">'.$fetch['MaterialName'].'</option>';
                    }
                echo '</select>';
                ?>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
			<input class="full-width has-padding" type="submit" name="bsubmit" value="Get Quote">
					
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->
     </form>
    </div>
    <!-- /.container -->


        <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">Place holder
                        <br></p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
            
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
                    <h4 class="text-uppercase mb-4">About Lifting Point</h4>
                    <p class="lead mb-0">Placeholder</p>
                </div>
            </div>
        </div>
    </footer>

   <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; BuiltQuik 2018</small>
        </div>
    </div>

    <!--
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    
    <script src="js/buildupdate.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

<!--Page Authors -->
<!--Matthew Winslow -->
<!--Vincent Barila -->
<!--Tony Tupanceski -->
<!--Jacob Irving -->