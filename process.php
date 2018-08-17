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

if(isset($_POST['savesubmit'])) //if submited on index.html run sign up function
{
	$saved = "INSERT INTO orderlist (CustomerID,StructureID) VALUES
	('$_SESSION[login]', '".$structureID."')";
	$con->query($saved);
}

?>

<br><br>
	 <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Your Build</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              
              
	<h3>Floor Materials</h3>
	<?php
        if(!empty($_POST['Floor']))
            echo "<p>".$_POST['Floor']."</p>"; 
        Else
            echo "<p>No Selection made for this option</p><br>"
    ?>
	<br/><br/><h3>Wall Materials</h3>
                
	<?php
                
        if(!empty($_POST['Wall']))
	        echo "<p>".$_POST['Wall']."</p>";
        Else
            echo "<p>No Selection made for this option</p><br>"
	?>
                
	<br/><br/><h3>Roof Materials</h3>
	
    <?php
                
        if(!empty($_POST['Roof']))
            echo "<p>".$_POST['Roof']."</p>";
        Else
            echo "<p>No Selection made for this option</p><br>"
		
	?>
	
    </div>
	
	
<footer style="position:fixed; width:100%; bottom:0px; left:0px; text-align:center; background-color: rgba(0,0,0,0.8); z-index:2;">
	<div class="white" style="padding:6px; font-size:13px;">&copy; UOW 2017</div>
</footer>


</body>
</html>

<!--Page Authors -->
<!--Matthew Winslow -->
