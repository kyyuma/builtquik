<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

session_start();

//create a new user
function NewContract($con)
{
	$name = $_POST['cconname'];
	$type = $_POST['ctype'];
	$region = $_POST['cregion'];
    $capability = $_POST['ccapability'];
    $phone = $_POST['cphone'];
    $qual = $_POST['cqual'];
	$supplier = $_SESSION['login'];
	//add user to database as unactivated
	$query = "INSERT INTO contractor (ContractorName, Type, Region, SupplierID, Capability, Number, Qualification) VALUES
	('$name', '$type', '$region', '$supplier', '$capability', '$phone', '$qual')";
	if($con->query($query) === TRUE)
	{
		
			header('Location: supplierIndex.php#contractor');
			
			
	}else{
		echo "Error: " . $query . "<br>" . $con->error;
	}
}



if(isset($_POST['csubmit'])) //if submited on index.html run sign up function
{
	NewContract($con);
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
