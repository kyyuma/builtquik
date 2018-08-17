<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

session_start();

//create a new user
function NewMaterials($con)
{
	$name = $_POST['mname'];
	$type = $_POST['ctype'];
    $mtype = $_POST['mtype'];
    $length = $_POST['clength'];
    $width = $_POST['cwidth'];
	$supplier = $_SESSION['login'];
	
    $materials = mysqli_query($con, "SELECT * FROM materials WHERE MaterialName = '$name' AND MaterialType = '$mtype' AND Type = '$type' AND Length = '$length' AND Width = '$width'");
                              
    if ($existmaterial = mysqli_fetch_array($materials))
    {
        $materialID = $existmaterial[0];
        $query = "INSERT INTO itemlist (SupplierID, MaterialID) VALUES ('$supplier', '$materialID')";
        if($con->query($query) === TRUE)
	    {
            header('Location: supplierIndex.php#material');
        }
    }
    else
    {
	    $query = "INSERT INTO materials (MaterialName, MaterialType, Type, Length, Width) VALUES ('$name', '$mtype', '$type', '$length', '$width')";
    
        if($con->query($query) === TRUE)
	    {
		   $materials = mysqli_query($con,"SELECT * FROM materials WHERE MaterialName = '$name' AND MaterialType = '$mtype' AND Type = '$type' AND Length = '$length' AND Width = '$width'");
                                      
            if ($existmaterial = mysqli_fetch_array($materials))
		    {
                $materialID = $existmaterial[0];
                $query = "INSERT INTO itemlist (SupplierID, MaterialID) VALUES ('$supplier', '$materialID')";
                if($con->query($query) === TRUE)
	            {
		
			         header('Location: supplierIndex.php#material');
						
	           }else{
		          echo "Error: " . $query . "<br>" . $con->error;
	           }
		    }                             
            else
            {
                echo "Error: " . $query . "<br>" . $con->error;
            }
            
           
                              
	
}}}



if(isset($_POST['msubmit'])) //if submited on index.html run sign up function
{
	NewMaterials($con);
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
