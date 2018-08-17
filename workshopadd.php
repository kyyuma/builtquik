<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

session_start();

function NewWorkshop($con)
{
	$name = $_POST['sworkshop'];
	$type = $_POST['stype'];
	$region = $_POST['sregion'];
	$supplier = $_SESSION['login'];
	$capability = $_POST['scapability'];
	$delivery = $_POST['cdel'];

	//add user to database as unactivated
	$query = "INSERT INTO workshops (workshopName, type, region, SupplierID, Capability, deliveryDistance) VALUES
	('$name', '$type', '$region', '$supplier', '$capability','$delivery')";
	if($con->query($query) === TRUE)
	{
		
			header('Location: supplierIndex.php#workshop');
			
			
	}else{
		echo "Error: " . $query . "<br>" . $con->error;
	}
}



if(isset($_POST['wsubmit'])) //if submited on index.html run sign up function
{
	NewWorkshop($con);
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
