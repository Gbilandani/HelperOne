


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
				<h1>User Sign Up</h1><br>
				<input type='text' id="FName" name="fname" placeholder="FirstName" />
				<input type='text' id="LName" name="lname" placeholder="LastName" />
				<input type='email' id="Email" name="email" placeholder="Email"/>
				<input type='numbers' id="mobile" name="phone" placeholder="phone" />
				
				<input type='text' id="area" name='area' placeholder='Area'/>
				<input type="password" id="password" name="password" placeholder="Password" />
				<input type="password" id="confirmPassword" name="cpassword" placeholder="Confirm Password" />
				<input type="submit" name="signup" value="Signup" onClick="return checkdetails();"/>
				<label>Already Have an Account?  &nbsp;<a href='login.php'>Click Here</a></label>
<?php
//echo "TRYING CONNECTING WITH MYSQL DATABASE LOGIN";
require_once('database.php');

if(isset($_POST['signup']))
{
	//echo "hi";
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
	$area=$_POST["area"];
	$password=$_POST['password'];
	$q="INSERT INTO `user`(`firstname`, `lastname`, `email`, `phone`,  `area`, `password`) VALUES ('$fname', '$lname','$email','$phone','$area','$password')";
	$query = mysqli_query($conn, $q);
	if(!$query)
	{
		echo"<script>alert('not submit');</script>";
	}
	else
	{
		echo"<script>alert('sucessful submit');</script>";
		header('Refresh:1 ; url=login.php');
		
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

		// var soc = document.getElementById('soc');
		// var road = document.getElementById('road');
		var area = document.getElementById('area');

		var Email = document.getElementById('Email');
		var password = document.getElementById('password');
		var confirmpassword = document.getElementById('confirmPassword');
		
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

		

		if(Email.value == "" ){
			alert("Please Enter Email_Id.");
			Email.focus(); // set the focus to this input
			return false;
		}
		
		var EmailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if(!Email.value.match(EmailExp)){
			alert("Please Enter Your Correct Email Address.");
			Email.value="";
			Email.focus(); // set the focus to this input
			return false;
		}
		
		
	
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

		// if(mobile.value.length < 10 || mobile.value.length > 10)
		// {
		//    alert('Please Enter 10 Digit Number for PhoneNo.');
		//    mobile.focus();
		//    return false;
		// }

		// if(soc.value == ""){
        //     alert("Please Enter Your Society.");
		// 	soc.focus(); // set the focus to this input
		// 	return false;
		// }

		// if(road.value == ""){
        //     alert("Please Enter Your Road.");
		// 	road.focus(); // set the focus to this input
		// 	return false;
		// }

		if(area.value == ""){
            alert("Please Enter Your Area.");
			area.focus(); // set the focus to this input
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