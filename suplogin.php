<?php
include ('connect.php');
include ('Banner.php');

session_start();

function Login($con)
{
	if(!empty($_POST['lemail']))
	{
		//selects hashed password from database for your email
		$hash = mysqli_query($con,"SELECT password FROM supplier WHERE email = '$_POST[lemail]'");
		if ($hashArray = mysqli_fetch_array($hash))
		{
			$hashResult = $hashArray[0];
		}


		//verifies password with supplied password
		if(password_verify($_POST['lpass'], $hashResult)){
			$query = mysqli_query($con,"SELECT * FROM supplier WHERE email = '$_POST[lemail]' ") /*AND active = '1'"*/ or die(mysql_error());
			if($row = mysqli_fetch_array($query))
			{
				//create session data on successfull login and redirect to appropriate page
				$_SESSION['login'] = $row[0];
				$_SESSION['fname'] = $row[3];
				$_SESSION['lname'] = $row[4];
				//$_SESSION['admin'] = $row[11];
				//if($_SESSION['admin'] == 1)
				//{
				//	header ('Location: admin/admin.php');
				//}
				//else
				//{
					header('Location: supplierIndex.php');
				//}
			}
			else
			{
				echo "<br>SORRY, You have not yet verified your email";
			}
		}
		else
		{
			echo "<br>SORRY Your login is incorrect";
		}
	}
}

if(isset($_POST['lsubmit'])) //if user submit login from index.html run login function
{
	Login($con);
}
?>
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
                    <h4 class="text-uppercase mb-4">Around the Web (CONCEPT)</h4>
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
            <small>Copyright &copy; Krohnos 2018</small>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

</body>
</html>

<!--Page Authors -->
<!--Matthew Winslow -->
<!--Nikolina Trajceska -->
