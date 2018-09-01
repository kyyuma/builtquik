<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

session_start();
?>
<!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h2 class="text-uppercase mb-0">Material Added</h2>
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
	$name = $_POST['mname'];
	$type = $_POST['mtype'];
    
    if ($_POST['comptype'] == "Other"){
    $comtype = $_POST['comptypeoth'];
    }
    else{
     $comtype = $_POST['comptype']; } 
    $length = $_POST['clength'];
    $width = $_POST['cwidth'];
    $thick = $_POST['cthick'];
	$supplier = $_SESSION['login'];
	
    $materials = mysqli_query($con, "SELECT * FROM materials WHERE MaterialName = '$name' AND MaterialType = '$type' AND Length = '$length' AND Thickness ='$thick' AND Width = '$width'");
                              
    if ($existmaterial = mysqli_fetch_array($materials))
    {
        $materialID = $existmaterial[0];
        $query = "INSERT INTO itemlist (SupplierID, MaterialID) VALUES ('$supplier', '$materialID')";
        if($con->query($query) === TRUE)
	    {
            //header('Location: supplierIndex.php#material');
        }
    }
    else
    {
	    $query = "INSERT INTO materials (MaterialName, MaterialType, Type, Length, Width, Thickness) VALUES ('$name', '$type', '$comtype', '$length', '$width', '$thick')";
    
        if($con->query($query) === TRUE)
	    {
		    $last_id = mysqli_insert_id($con);                       
            $query = "INSERT INTO itemlist (SupplierID, MaterialID) VALUES ('$supplier', '$last_id')";
                if($con->query($query) === TRUE)
	            {
		
			         //header('Location: supplierIndex.php#material');
						
	           }else{
		          echo "Error: " . $query . "<br>" . $con->error;
	           }
		    }                             
            else
            {
                echo "Error: " . $query . "<br>" . $con->error;
            }
            
           
                              
	
}}



if(isset($_POST['msubmit'])) //if submited on index.html run sign up function
{
	NewMaterials($con);
}
?>

	<footer style="position:absolute; width:100%; bottom:0px; text-align:center; background-color: rgba(0,0,0,0.8); z-index:5;">
		<div class="white" style="padding:6px; font-size:13px;">&copy; Khronos 2017</div>
	</footer>


</body>
</html>

<!--Page Authors -->
<!--Matthew Winslow -->
<!--Samasree Banik -->
