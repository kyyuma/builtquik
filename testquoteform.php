<?php
include ('connect.php');
include('LoggedBanner.php'); //logged banner is the top banner for all pages that can only be viewed once logged in
?>	

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h2 class="text-uppercase mb-0">Your BuiltQuik Quote!</h2>
      <br>
    
      </div>
</header>

<!-- Quote Body -->



<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-3 main">
            <div class="col-md-12">
               <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8 text-right">
                        <h5 style="color: #33ff7d;"><strong>Company Name</strong></h5>
                        <p>54, North Road</p>
                        <p>+1 888 455 6677</p>
                        <p>mail@example.com</p>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>INVOICE</h2>
                        <h5>00000846382</h5>
                    </div>
                </div>
                <br />
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th><h5>Description</h5></th>
                                <th><h5>Amount</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-md-9">Apple iPhone 8 64 GB</td>
                                <td class="col-md-3"><i class="fa fa-usd" aria-hidden="true"></i> 759,00 </td>
                            </tr>
                            <tr>
                                <td class="col-md-9">Apple iPhone 7 Plus 128 GB</td>
                                <td class="col-md-3"><i class="fa fa-usd" aria-hidden="true"></i> 1023,00 </td>
                            </tr>
                            <tr>
                                <td class="col-md-9">Apple iPhone 6s Plus 16GB</td>
                                <td class="col-md-3"><i class="fa fa-usd" aria-hidden="true"></i> 595,00 </td>
                            </tr>
                            <tr>
                                <td class="col-md-9">Apple iPhone 6s Plus 64 GB</td>
                                <td class="col-md-3"><i class="fa fa-usd" aria-hidden="true"></i> 1052,00 </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                <p>
                                    <strong>Total Amount: </strong>
                                </p>
                                <p>
                                    <strong>Late Fees: </strong>
                                </p>
							    <p>
                                    <strong>Payable Amount: </strong>
                                </p>
							    <p>
                                    <strong>Balance Due: </strong>
                                </p>
							    </td>
                                <td>
                                <p>
                                    <strong><i class="fa fa-usd" aria-hidden="true"></i> 2569,00 </strong>
                                </p>
                                <p>
                                    <strong><i class="fa fa-usd" aria-hidden="true"></i> 700,00</strong>
                                </p>
							    <p>
                                    <strong><i class="fa fa-usd" aria-hidden="true"></i> 159,00 </strong>
                                </p>
							    <p>
                                    <strong><i class="fa fa-usd" aria-hidden="true"></i> 5010,00 </strong>
                                </p>
							    </td>
                            </tr>
                            <tr style="color: #12d784;">
                                <td class="text-right"><h4><strong>Total:</strong></h4></td>
                                <td class="text-left"><h4><strong><i class="fa fa-usd" aria-hidden="true"></i> 2365,00 </strong></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="col-md-12">
                        <p><b>Date :</b> 28 June 2017</p>
                        <br />
                        <p><b>Signature</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .main {
        background: #ffffff;
        border-bottom: 15px solid #12d784;
        border-top: 15px solid #1E1F23;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 40px 30px !important;
        position: relative;
        box-shadow: 0 1px 21px #808080;
        font-size:10px;
    }

    .main thead {
		background: #1E1F23;
        color: #fff;
		}
</style>

 <!-- Footer -->

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
