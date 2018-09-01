<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

?>


<?php
session_start();


function NewWorkshop($con)
{
	$Address = $_POST['swaddress'];
	$contact = $_POST['scontact'];
	$email = $_POST['semail'];
	$type = $_POST['stype'];
	$supplier = $_SESSION['login'];
	$delivery = $_POST['cdel'];

	//add user to database as unactivated
	$query = "INSERT INTO workshops (Address, OfficeContact, Email, Type, SupplierID, deliveryDistance) VALUES
	('$Address', '$contact', '$email', '$type', '$supplier','$delivery')";
	if($con->query($query) === TRUE)
	{
        
        $last_id = mysqli_insert_id($con);
        foreach($_POST['sctype'] as $selected){
            $capup = "INSERT INTO workshopcapabilities (Capability, WorkshopID) VALUES ('$selected', '$last_id')";
            $con->query($capup);
        }
        foreach($_POST['sequipment'] as $equipment){
            $equip = "INSERT INTO workshopequipment (equipmentID, WorkshopID) VALUES ('$equipment', '$last_id')";
            $con->query($equip);
        }
        foreach($_POST['sqtype'] as $qualification){
                $qual = "INSERT INTO workshopqualification (QualificationType, NumberQualified, WorkshopID) VALUES ('$qualification[0]', '$qualification[1]', '$last_id')";
                $con->query($qual);
                
        }
        
        //header('Location: supplierIndex.php#workshop');
			
			
	}else{
		echo "Error: " . $query . "<br>" . $con->error;
	}
}

if(isset($_POST['wsubmit'])) //if submited on index.html run sign up function
{
	NewWorkshop($con);
}

?>
<!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h2 class="text-uppercase mb-0">Workshop Added</h2>
      <br>
        <p class="font-weight-light mb-0"></p>
      </div>
</header>
<br>
<a href="supplierIndex.php#workshop">Add More</a>

	<footer style="position:absolute; width:100%; bottom:0px; text-align:center; background-color: rgba(0,0,0,0.8); z-index:5;">
		<div class="white" style="padding:6px; font-size:13px;">&copy; Khronos 2017</div>
	</footer>


<!--Page Authors -->
<!--Matthew Winslow -->
<!--Samasree Banik -->
