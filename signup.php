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
				<h1>Sign Up</h1><br><br><br> <br><br><br> 
				<!-- <input type='text' id="Name" name="name" placeholder="Name" required/>
				<input type='email' id="Email" name="email" placeholder="Email"/>
				<input type='numbers' id="mobile" name="phone" placeholder="phone" />
				<input type='text' name='society' placeholder='society'/>
				<input type='text' name='road' placeholder='street'/>
				<input type='text' name='area' placeholder='Area'/>
				<input type="password" id="Password" name="password" placeholder="Password" />
				<input type="password" id="Confirm_Password" name="cpassword" placeholder="Confirm Password" />
				<input type="submit" name="signup" value="Signup" onClick="return checkdetails();"/> -->
                <input type="submit" name="user" value="User" /><br><br>
                <?php
                if(isset($_POST['user']))
                {
                    header('location:usignup.php');
                }
                ?>

                <input type="submit" name="helper" value="Helper" /><br><br>
                <?php
                if(isset($_POST['helper']))
                {
                    header('location:hsignup.php');
                }

                ?>

                <label>Already Have an Account?</label><a href='login.php'>Click Here</a>

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

