<?php
session_start();


$phone=$_SESSION['phone'];
include_once('database.php');
$hid=$_GET['hid'];

$sql="select * from helper where hid='$hid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$q="select * from helper where phone='$phone'";
$re=mysqli_query($conn,$q);
$row2=mysqli_fetch_assoc($re);

$fname=$row2['firstname'];
  
  
  // $soc= $row['society'];
  // $road $row['street'];
//   $area= $row['area'];
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
<title>Edit Profile</title>
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
      <div class="logo"><h1><a href="index.html" class="nobg"><img src="images/logo.jpg" width="300" height='75'></a></h1></div>
      <!-- <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="support.html">Plumber</a></li>
          <li><a href="contact.html">Electrician</a></li>
		  <li><a href="contact.html">Mechanic</a></li>
		  <li><a href="about.html">Architech</a></li>
        </ul>
      </div> --> 
	   <br><br><br><br><br><br>
     <div class="welcome">
	  		<h3 >WELCOME 
          <?php echo $fname; ?> 
        </h3></div>
        <div class="menu_login" >
        <ul>
        <li class="active"><a>
            <?php
            //echo $fname;
            ?>Helper
            </a></li>
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
    <div class="content_resize">
      <div class="mainbar">
      
		<h2 style="margin-bottom:10px">Edit Profile</h2>
            <center><form method="post">
            <table align="center">
            <tr>
                    <td><h5>Firstname</h5></td><td><h5>:</h5></td>
                    <td> <input type="text" name="name1" value="<?php echo $row['firstname'];?>" /></td></tr>
                    <tr>
                    <td><h5>Lastname</h5></td><td><h5>:</h5></td>
                    <td> <input type="text" name="name2" value="<?php echo $row['lastname'];?>" /></td></tr>
                    <tr>
                    
                    <td><h5>Phone Number</h5></td><td><h5>:</h5></td>
                    <td> <input type="text" value="<?php echo $row['phone'];?>" readonly/></td></tr>
                    
                    <tr>
                    <td><h5>Area</h5></td><td><h5>:</h5></td>
                    <td> <input type="text" name="area" value="<?php echo $row['area'];?>" /></td></tr>

                            
            
                        
            <tr>		<td></td><td></td><td><input type="submit" name="editprofile" value="Save"/></td></tr>
            <?php
            if(isset($_POST['editprofile']))
            {
                $fname=$_POST['name1'];
                $lname=$_POST['name2'];
                
            
                $area=$_POST['area'];

                
                $sql="update helper set firstname='$fname', lastname='$lname', area='$area' where hid='$hid'";
                if(mysqli_query($conn,$sql))
                {
                    header("location:hindex.php");
                }
            }


            ?>
                            
            </table>
                    </form>
                    
                    
                    </center>

   


		
	  
     
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
