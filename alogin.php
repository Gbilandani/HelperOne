<?php
session_start();
require_once('database.php');
    
    if(isset ($_POST["login"]))
    {
        //$username = $_REQUEST['Username'];
        $password = $_REQUEST['Password'];
        /*echo $Username;
        echo $Password;*/
        // $q = ("select * from helper where phone='$username' and Password='$password'");     
        // $query = mysqli_query($conn, $q);
        // $count=mysqli_num_rows($query);
        // $row = mysqli_fetch_assoc($query);
        // $count=mysqli_num_rows($query);       
        if($password == 123123)
        {   
            $_SESSION['phone']=123123;
            // $_SESSION['email']=$row['Email'];
            // $_SESSION['department']=$row['Department'];
            // $_SESSION['enrollment']=$row['Username']; 
            header('location:aindex.php');
        }
        else{
            echo "Invalid login";
        }
        
        /*while
        $rowcount = mysqli_num_rows($query);
        if($rowcount>0)
        {
            header('location:dashboard.html');
           // echo "Login Successful";
        }
        else{
            echo "Invalid Login";
        }*/
    }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Admin</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form method="post">
				<h1>Admin Login</h1><br><br><br>
				<!-- <input type='text' name="Username" id="mobile" placeholder="Phone Number" /> -->
				<input type='password' name="Password" id="password" placeholder="Password" /><br>
				<!-- <a href="forgotpassword.php">Forgot your password?</a> -->
                <input type="submit" name="login" value="Login" onClick="return checkdetails();"/><br><br>
                
                <label>Dont have an account?</label><a href='signup.php'>Click Here</a>

            </form>

		</div>
		<div class="overlay-container">
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

