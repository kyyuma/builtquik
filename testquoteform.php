<?php
include ('connect.php');
include ('LoggedBanner.php');

if(!empty($_POST['Floor']) && !empty($_POST['Wall']) && !empty($_POST['Roof']))
{

        $query = mysqli_query($con, "SELECT * FROM structures WHERE RoofType = '$_POST[bays]' AND FloorMaterial = '$_POST[Floor]' AND WallMaterial = '$_POST[Wall]' AND RoofMaterial = '$_POST[Roof]'") or die(mysqli_connect_error());    
    if(!$row = mysqli_fetch_array($query))
        {
            //add structure if it doesn't exist
			$fcheck = mysqli_query($con, "INSERT INTO structures (Rooftype, FloorMaterial, WallMaterial, RoofMaterial) VALUES ('$_POST[bays]','$_POST[Floor]','$_POST[Wall]','$_POST[Roof]')");
        }

        $query2 = mysqli_query($con, "SELECT * FROM structures WHERE Rooftype = '$_POST[bays]' AND FloorMaterial = '$_POST[Floor]' AND WallMaterial = '$_POST[Wall]' AND RoofMaterial = '$_POST[Roof]'") or die(mysqli_error());
        if($row = mysqli_fetch_array($query2))
        {
            $structureID = $row[0];
        }

}


?>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">Get Your BuiltQuik Quote!</h1>
          <hr class="star-light mb-5">
      <br>
    
      </div>
</header>

<!-- About Section -->
<br><br>
<div class="container">
<form>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFname">First name</label>
      <input type="text" class="form-control" id="inputFname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
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
      <input type="tel" class="form-control" id="inputTel" placeholder="Password">
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
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputType">Item Type</label>
      <input type="text" class="form-control" id="inputType" placeholder="Frame" disabled>
    </div>
    <div class="form-group col-md-4">
        <label for="inputQuantity">Quantity (m<sup>2</sup>)</label>
        <input type="text" class="form-control" id="inputQuantity" placeholder="Input your requirements">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCost">Cost (m<sup>2</sup>)</label>
      <input type="text" class="form-control" id="inputCost" placeholder="$XX" disabled>
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputType" placeholder="Roof Material" disabled>
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="inputQuantity" placeholder="Input your requirements">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputCost" placeholder="$XX" disabled>
    </div>
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputType" placeholder="Floor Material" disabled>
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="inputQuantity" placeholder="Input your requirements">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputCost" placeholder="$XX" disabled>
    </div>
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputType" placeholder="Wall Material" disabled>
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="inputQuantity" placeholder="Input your requirements">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputCost" placeholder="$XX" disabled>
    </div>
  </div>


    
  <button type="submit" class="btn btn-primary">Submit Quote Request</button>
</form>
    </div>
    <br><br>

 <!-- Product Images Section -->


    <section class="product" id="product">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Our Products</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-4 col-lg-4">
            <a
                class="portfolio-item d-block mx-auto"
                href="#portfolio-modal-1"
                data-toggle="modal"
                data-target="#portfolio-modal-1"
            >
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                 
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/3-bay.png" alt="" >
                
            </a>
              
          </div>
          <div class="col-md-4 col-lg-4">
            <a
                class="portfolio-item d-block mx-auto"
                href="#portfolio-modal-2"
                data-toggle="modal"
                data-target="#portfolio-modal-2"
            >
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                 
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/7-bay.png" alt="">
            </a>
          </div>
         </div>   
      </div>
    </section>
   
<!-- Portfolio Modals -->

<!--Modal 1-->
<div class="modal fade" id="portfolio-modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="exampleModalLabel">3-Bay</h4>
           <br/>
              <p class="mb-5">Roof-pitch variations include skew, skillion or centred.</p>
      </div>
      <div class="modal-body">
          <div class="container">
                 <div class="row">
           <div class="col-lg-4" colspan=2>
               <img src="img/product/3skew.png" width=300px/>
               <p>Skew roof</p>
               <br>
            </div>
              </div>
              <div class="row">
           <div class="col-lg-4" colspan=2>
               <img src="img/product/3centred.png" width=300px/>
               <p>Centred roof</p>
            </div>
          </div>
          <div class="row">
           <div class="col-lg-4" colspan=2>
               <br><br>
               <img src="img/product/3skillion.png" width=300px/>
               <p>Skillion roof</p>
               <br/>
            </div>
              </div>
          <div class="row">
            <div class="col-lg-4" colspan=2>
               <img src="img/product/3topview.png" width=250px height=300px/>
                <p>Roof Top View</p>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 

 
<!--Modal 2-->
<div class="modal fade" id="portfolio-modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">7-Bay</h4>
          <p class="mb-5">Roof-pitch variations include skew or skillion.</p>
      </div>
      <div class="modal-body">
         <div class="container-fluid">
         <div class="row">
           <div class="col-lg-4" colspan=2>
               <img src="img/product/7skew.png" width=300px/>
               <p>Skew roof</p>
            </div>
             </div>
             <div class="row">
           <div class="col-lg-4" colspan=2>
               <br>
               <img src="img/product/7skillion.png" width=300px/>
               <p>Skillion roof</p>
            </div>
          </div>
          <div class="row">
           <div class="col-lg-4" colspan=2>
               <br><br>
               <img src="img/product/7skillion2.png" width=300px />
               <p >Skillion roof</p>
            </div>
             </div>
             <div class="row">
           <div class="col-lg-4" colspan=2>
               <br><br>
               <img src="img/product/2x7skew.png" width=400px/>
               <p align="center">2x7-Bay roof</p>
            </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
</div>
</div> 

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
                    <!-- <h4 class="text-uppercase mb-4">Around the Web (CONCEPT)</h4>-->
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

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

<!--Page Authors -->
<!--Matthew Winslow -->