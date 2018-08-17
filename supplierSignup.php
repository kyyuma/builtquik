<?php 
include ('connect.php'); //connects to database
include ('Banner.php');

session_start();

//create a new user
function NewUser($con)
{
	$companyName = $_POST['scname'];
	$ABN = $_POST['sABN'];
	$region = $_POST['sregion'];
	$phone = $_POST['sphone'];
	$STnum = $_POST['sstnum'];
	$STname = $_POST['sstname'];
	$suburb = $_POST['ssuburb'];
	$state = $_POST['sstate'];
	$postcode = $_POST['spostcode'];
	$email = $_POST['semail'];

	//adds cost and random salt to encryption to further secure passwords
	$options = [
    'cost' => 11,
    'salt' => random_bytes(22),
	];

	//hash password in database
	$password = password_hash($_POST['spass'], PASSWORD_BCRYPT, $options);

	$hash = md5(rand(0,1000)); // Generate random 32 character hash and assign it to a local variable. This hash is used for email verification.
	
	//add user to database as unactivated
	$query = "INSERT INTO supplier (CompanyName,ABN,Region,PhoneNumber, StreetNumber, StreetName, Suburb, State, Postcode, email, password, hash) VALUES
	('$companyName','$ABN','$region','$phone','$STnum','$STname','$suburb','$state','$postcode','$email', '$password', '$hash')";
	if($con->query($query) === TRUE)
	{
		$query = mysqli_query($con,"SELECT * FROM supplier WHERE email = '$_POST[semail]' ") /*AND active = '1'"*/ or die(mysql_error());
		if($row = mysqli_fetch_array($query))
		{
			$_SESSION['login'] = $row[0];
			$_SESSION['cname'] = $row[1];
			
			//$_SESSION['admin'] = $row[11];
			//if($_SESSION['admin'] == 1)
			//{
			//	header ('Location: admin/admin.php');
			//}
			//else
			//{
			header('Location: supplierIndex.php');
			//prepare email to user with link to verify.php with generated hash
			/*$to = $email;
			$subject = 'Signup | Verification';
			$message = '
			Thanks for signing up!
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

			Please click this link to activate your account:
			http://careways.krohnos.com.au/verify.php?email='.$email.'&hash='.$hash.'

			';
			$headers = 'From:noreply@careways.com' . "\r\n";
			//mail message to clients email
			if(mail($to, $subject, $message, $headers)){
				$message = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account.";
			}
			else{
				$message = "There was some sort of error, Please Try again";
			}
			echo $message;
			*/	
			}
	}else{
		echo "Error: " . $query . "<br>" . $con->error;
	}
}

function SignUp($con)
{
	if(!empty($_POST['semail']))
	{
		//check if user already registered
		$query = mysqli_query($con, "SELECT * FROM customer WHERE email = '$_POST[semail]'") or die(mysqli_error());
		if(!$row = mysqli_fetch_array($query))
		{
			//run new user function
			newuser($con);
		}
		else
		{
			echo "<br>SORRY...YOU ARE ALREADY REGISTERED USER...";
		}
	}
}



if(isset($_POST['ssubmit'])) //if submited on index.html run sign up function
{
	SignUp($con);
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
