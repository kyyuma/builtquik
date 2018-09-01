<?php 
include ('connect.php'); //connects to database
include ('Banner.php');
?>
<!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h2 class="text-uppercase mb-0">Contractor Added</h2>
      <br>
        <p class="font-weight-light mb-0"></p>
      </div>
</header>

<?php
session_start();

//create a new user
function NewContract($con)
{
	$name = $_POST['cconname'];
	$number = $_POST['cconnum'];
	$address = $_POST['cconaddress'];
    $region = $_POST['cconregion'];
    $type = $_POST['ctype'];
    $qual = $_POST['cqual'];
    $train = $_POST['ccontrain'];
	$supplier = $_SESSION['login'];
	//add user to database as unactivated
	$query = "INSERT INTO contractor (ContractorName, ContactNumber, Region, Address, Qualification, Trainees, Type, SupplierID) VALUES
	('$name', '$number', '$region', '$address', '$qual', '$train', '$type', '$supplier')";
	if($con->query($query) === TRUE)
	{
            $last_id = mysqli_insert_id($con);
            foreach($_POST['ccapa'] as $selected){
            $capup = "INSERT INTO contractorcapability (Capability, ContractorID) VALUES ('$selected', '$last_id')";
            $con->query($capup);
        }
        
         foreach($_POST['conequipment'] as $equipment){
            $equip = "INSERT INTO contractorequipment (EquipmentID, ContractorID) VALUES ('$equipment', '$last_id')";
            $con->query($equip);
        }
			//header('Location: supplierIndex.php#contractor');
			
			
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
<a href="supplierIndex.php#contractor">Add More</a>
</div>
	<footer style="position:absolute; width:100%; bottom:0px; text-align:center; background-color: rgba(0,0,0,0.8); z-index:5;">
		<div class="white" style="padding:6px; font-size:13px;">&copy; Khronos 2017</div>
	</footer>


<!--Page Authors -->
<!--Matthew Winslow -->
<!--Samasree Banik -->
