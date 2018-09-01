<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

session_start();
?>
<!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h2 class="text-uppercase mb-0">Equipment Added</h2>
      <br>
        <p class="font-weight-light mb-0"></p>
      </div>
</header>
<br>
<a href="supplierIndex.php#equipment">Add More</a>

<?php
//create a new user
function NewEquipment($con)
{
	$name = $_POST['cconname'];
	$type = $_POST['ctype'];
	$supplier = $_SESSION['login'];
	//add user to database as unactivated
	$query = "INSERT INTO equipment (equipmentName, type) VALUES
	('$name', '$type')";
	if($con->query($query) === TRUE)
	{
		  $last_id = mysqli_insert_id($con);
          $query = "INSERT INTO supplierequipment (SupplierID, EquipmentID) VALUES ('$supplier', '$last_id')";
			//header('Location: supplierIndex.php#equipment');
			
			
	}else{
		echo "Error: " . $query . "<br>" . $con->error;
	}
}



if(isset($_POST['esubmit'])) //if submited on index.html run sign up function
{
	NewEquipment($con);
}
?>

	<footer style="position:absolute; width:100%; bottom:0px; text-align:center; background-color: rgba(0,0,0,0.8); z-index:5;">
		<div class="white" style="padding:6px; font-size:13px;">&copy; Khronos 2017</div>
	</footer>



<!--Page Authors -->
<!--Matthew Winslow -->
<!--Samasree Banik -->
