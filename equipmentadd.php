<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

session_start();

//create a new user
function NewEquipment($con)
{
	$name = $_POST['cconname'];
	$type = $_POST['ctype'];
    $capability = $_POST['ccapability'];
	$supplier = $_SESSION['login'];
	//add user to database as unactivated
	$query = "INSERT INTO equipment (equipmentName, type, SupplierID, Capability) VALUES
	('$name', '$type', '$supplier', '$capability')";
	if($con->query($query) === TRUE)
	{
		
			header('Location: supplierIndex.php#equipment');
			
			
	}else{
		echo "Error: " . $query . "<br>" . $con->error;
	}
}



if(isset($_POST['esubmit'])) //if submited on index.html run sign up function
{
	NewEquipment($con);
}
?>

<br>
<a href="index.html">Home</a>
</div>
	<footer style="position:absolute; width:100%; bottom:0px; text-align:center; background-color: rgba(0,0,0,0.8); z-index:5;">
		<div class="white" style="padding:6px; font-size:13px;">&copy; Khronos 2017</div>
	</footer>


</body>
</html>

<!--Page Authors -->
<!--Matthew Winslow -->
<!--Samasree Banik -->
