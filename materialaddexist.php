<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

session_start();
?>
<!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h2 class="text-uppercase mb-0">Materials Added</h2>
      <br>
        <p class="font-weight-light mb-0"></p>
      </div>
</header>
<br>
<a href="supplierIndex.php#material">Add More</a>

<?php
//create a new user
function NewMaterials($con)
{
    $supplier = $_SESSION['login'];
    foreach($_POST['smaterial'] as $selected){
        $materials = mysqli_query($con, "SELECT * FROM itemlist WHERE SupplierID = '$supplier' AND MaterialID = '$selected'");
        if ($existmaterial = mysqli_fetch_array($materials)){}
        else{
          $query = "INSERT INTO itemlist (SupplierID, MaterialID) VALUES ('$supplier', '$selected')";
            $con->query($query);
        }
    }
}



if(isset($_POST['msubmit'])) //if submited on index.html run sign up function
{
	NewMaterials($con);
}
?>

	<footer style="position:absolute; width:100%; bottom:0px; text-align:center; background-color: rgba(0,0,0,0.8); z-index:5;">
		<div class="white" style="padding:6px; font-size:13px;">&copy; Khronos 2017</div>
	</footer>


<!--Page Authors -->
<!--Matthew Winslow -->
<!--Samasree Banik -->
