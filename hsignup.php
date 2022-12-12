<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="style1.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<title>HelperOne</title>
</head>
<body>
	<div class="container" id="container">
		<div class="overlay-container">
			<form action="#" method="post">
				<h1>Helper Sign Up</h1>
				<input type='text' id="FName" name="fname" placeholder="FirstName" />
				<input type='text' id="LName" name="lname" placeholder="LastName" />	
				<!-- <input type='email' id="Email" name="email" placeholder="Email"/> -->
				<input type='numbers' id="mobile" name="phone" placeholder="phone" />
				
                <!-- <label align='left'>Category</label> -->
                <!-- <select name='type' >
                     <option >---Select---</option>
                    <option value='plumber'>Plumber</option>
                    <option value='electrician'>Electrician</option>
                    <option value='mechanic'>Mechanic</option>
                    <option value='architect'>Architect</option>
                </select> -->

                <?php
                    include_once('database.php');
                    $query1 = "SELECT * FROM category";
                    $result1 = mysqli_query( $conn,$query1) or die(mysqli_error()); 
                    echo "<select name='type'  id='category' >";
                ?>
                
                   <?php
                    while ($row = mysqli_fetch_array( $result1 )) {
                         $name=$row['type'];
                    echo "<option value='".$name."'>".$name."</option>";
                      }
					  echo "</select>";
               ?><a href='adcat.php'>Add New Category</a>
				<input type='text' id="Area" name="area" placeholder="Area" />
				<input type="password" id="password" name="password" placeholder="Password" />
				<input type="password" id="confirmPassword" name="cpassword" placeholder="Confirm Password" />
				<input type="submit" name="signup" value="Signup" onClick="return checkdetails();"/><br>

                <label>Already Have an Account?</label><a href='login.php'>Click Here</a>

<?php
//echo "TRYING CONNECTING WITH MYSQL DATABASE LOGIN";
require_once('database.php');

if(isset($_POST['signup']))
{
	//echo "hi";
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	// $email=$_POST['email'];
	$phone=$_POST['phone'];

	$type=$_POST['type'];
	$area=$_POST['area'];
	$password=$_POST['password'];
	$q="INSERT INTO `helper`(`firstname`, `lastname`, `phone`, `type`, `area`, `password`) VALUES ('$fname', '$lname','$phone','$type', '$area', '$password')";
	$query = mysqli_query($conn, $q);
	if(!$query)
	{
		echo"<script>alert('not submit');</script>";
	}
	else
	{
		echo"<script>alert('sucessful submit');</script>";
		header('Refresh:1 ; url=login.php');
		// header('Refresh:1 ; url=hsignup.php');
		
	}
}
?>

			</form>
		</div>
		<div class="form-container log-in-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Volunteer Helpers</h1>
					<h2></h2>
					<p>This project is made by Shobhit and Gaurav.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script language="javascript" type="text/javascript">

	function checkdetails(){
		var FName = document.getElementById('FName');
		var LName = document.getElementById('LName');
		//var Email = document.getElementById('Email');
		var Area = document.getElementById('Area');
		var password = document.getElementById('password');
		var confirmpassword = document.getElementById('confirmPassword');
		
		//var EmailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		
        
		if(FName.value == ""){
            alert("Please Enter Your First Name.");
			FName.focus(); // set the focus to this input
			return false;
		}

		if(LName.value == ""){
            alert("Please Enter Your Last Name.");
			LName.focus(); // set the focus to this input
			return false;
		}

		

        // if(!Email.value.match(EmailExp))
		// {
		// 	alert("Please Enter Your Correct Email Address.");
		// 	Email.value="";
		// 	Email.focus(); // set the focus to this input
		// 	return false;
		// }

		
		var mobile = document.getElementById('mobile');
	   	
		var phExp = /^[6-9][0-9]{9}$/;

		if(mobile.value == "")
		{
			alert('Please Enter PhoneNo.');	
			mobile.focus();
			return false;
		}

		if(!mobile.value.match(phExp))
		{
			alert("Please Enter Your Correct Phone Number.");
			mobile.value="";
			mobile.focus(); // set the focus to this input
			return false;
		}

		if(Area.value == ""){
            alert("Please Enter Your Area in Mehsana.");
			Area.focus(); // set the focus to this input
			return false;
		}

		if(password.value == ""){
			alert('Please Enter Password.');	
			password.focus();
			return false;
		}
		if(password.value.length < 8)
		{
			alert('Please Enter Minimum 8 Character For Password.');
			password.focus();
			return false;
		}
		
		if(confirmpassword.value == "" ){
			alert("Please enter confirm Password");
			confirmpassword.focus();		
			return false;
		}
				
		if((password.value) != (confirmpassword.value)){
			alert("Password and Confirm Password should be same! Re-enter confirm-password!");
			confirmpassword.value = "";
			confirmpassword.focus();	   
			return false;
		}	

		
	
		
		return true;
	}
</script>

