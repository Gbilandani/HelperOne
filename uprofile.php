<?php
session_start();
if(isset($_SESSION['phone']))
    {

$phone=$_SESSION['phone'];
include_once('database.php');
$q="select * from user where phone='$phone'";
$re=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($re);

$fname=$row['firstname'];
  
  $lname=$row['lastname'];
  $email=$row['email'];
  
  $phone=$row['phone'];
  // $soc= $row['society'];
  // $road $row['street'];
  $area= $row['area'];
    }
/*
echo $_SESSION['username']."<br>";
echo $_SESSION['email']."<br>";
echo $_SESSION['phone']."<br>";
echo $_SESSION['lname'];
*/
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by http://www.bluewebtemplates.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html >
<head>
<title>User profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="uindex.php" class="nobg"><img src="images/logo.jpg" width="300" height='75'></a></h1></div>
      <div class="menu_nav">
        <ul>
          <li><a href="uindex.php">Home</a></li>
          <li><a href="uplumber.php">Plumber</a></li>
          <li><a href="uelectrician.php">Electrician</a></li>
		  <li><a href="umechanic.php">Mechanic</a></li>
		  <li><a href="uarchitect.php">Architect</a></li>
        </ul>
      </div>
	   <br><br><br><br><br><br>
     <div class="welcome">
	  		<h3 >WELCOME 
          <?php 
          if(isset($_SESSION['phone']))
          { echo $fname; } ?> 
        </h3></div>
        <div class="menu_login" >
        <ul>
        <li class="active"><a href="uprofile.php">User
          <?php
          //echo $fname;
          ?>
          </a>
        </li>
          <li><a href="logout.php" ><?php
          if(!isset($_SESSION['phone']))
          {
            echo "Login";
          }
          else
          {
            echo "Logout";  
          }
          ?></a>

          </li>
          
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
  <?php
    if(!isset($_SESSION['phone']))
    {
      echo "<br><center style='font-size:30;color:cyan;'>Please Login First<br><br><a href='ulogin.php'>Click Here</a></center>";
    }
    else
    {
    ?>
    <div class="content_resize">
      <div class="mainbar">
      <div class="profile">
		<h2 style="margin-bottom:10px">My Profile</h2>


    <?php
    
    // if(empty($_SESSION['email'] || $_SESSION['username']))
    // {
    //     header('location:gprofile.php');
    // }
    ?>


		<div class="card">
            <div class="card-body" align="center">
                
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php
								echo $fname." ".$lname;?>
							</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php
								echo $email;?></td>
                        </tr>
						<tr>
                            <td>Phone No.</td>
                            <td>:</td>
                            <td><?php
								echo $phone;?></td>
                        </tr>
                        <tr>
                            <td>Area</td>
                            <td>:</td>
                            <td><?php echo $area;  ?></td>
                        </tr>
                       
                        
                    </tbody>
                </table>
				<button><?php echo "<a style='color:red' href=uproedit.php?uid=".$row['uid']."><b>Edit</b></a>"; }?></button>
            </div>
        </div>
		
		</div>
	  
     
      <div class="clr"></div>
    </div>
    </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
    <div class="fbg_resize">
      
      <div class="col c2">
        <h2 style="color:#1DFFF8">About US</h2>
		<a href="images/gb.jpg"><img src="images/gb.jpg" style="float:left" title="Gaurav" width="220px" height="150px"></a>
		<a href="images/shobhit.jpg"><img src="images/shobhit.jpg" style="float:center" title="Shobhit" width="140px" height="150px"></a>
        <p><strong>Enrollment Number:</strong><li>19012011004 Bilandani Gauravkumar Jayeshkumar</li>
		<li>19012011024 Shobhit Ajay Mendiratta</li><br>
		Students of 7th Semester Computer Engineering in<br><strong>U. V. Patel College Of Engineering</strong></p>
        <ul class="sb_menu">	
         
        </ul>
        
      </div>
      <div class="col c3">
        <h2 style="color:#1DFFF8">Contact</h2>
        <a href="images/photo.jpg"><img src="images/photo.jpg" width="120" height="150px" alt="photo" /></a>
        
        <p><ul><strong>Phone:</strong><li><a style="color:#1DFFF8" href="callto:+919664560737">+91 9664560737</a></li>
                                          <li><a style="color:#1DFFF8" href="callto:+918140104757">+91 8140104757</a></li></ul><br>
          <strong>Address:</strong><br><a style="color:#1DFFF8" href="https://www.google.com/maps/dir//23.5285594,72.458591/@23.5275462,72.4571784,18.19z/data=!4m2!4m1!3e0">7CEIT-B,&nbsp; B-Tech,<br>U. V. Patel College Of Engineering,<br> Ganpat University - 384012 .</a>
		  <br><br>
          <strong>E-mail:</strong>
		  <ul> 
		  <li><a style="color:#1DFFF8" href="mailto:gbilandani72@gmail.com">gbilandani72@gmail.com</a></li>
		  <li><a style="color:#1DFFF8" href="mailto:shobhitmendiratta510@gmail.com">shobhitmendiratta510@gmail.com</a></li>
		  </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf" style="color:#cff6f4">&copy; Gaurav Bilandani and Shobhit Mendiratta </a></p>
      
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
