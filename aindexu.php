<?php
session_start();

if(isset($_SESSION['phone']))
    {
$phone=$_SESSION['phone'];
include_once('database.php');

//echo $_SESSION['phone']."<br>";
    }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by http://www.bluewebtemplates.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html >
<head>
<title>Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="styles2.css" rel="stylesheet" type="text/css" />
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
      <div class="logo"><h1><a href="aindexu.php" class="nobg"><img src="images/logo.jpg" width="300" height='75'></a></h1></div>
      <div class="menu_nav">
        <ul>
          <li><a href="aindex.php">Helpers</a></li>
          <li class="active"><a href="aindexu.php">Users</a></li>
          <!-- <li><a href="contact.html">Electrician</a></li>
		  <li><a href="contact.html">Mechanic</a></li>
		  <li><a href="about.html">Architech</a></li> -->
        </ul>
      </div> 
	   <br><br><br><br><br><br>
     <div class="welcome">
	  		<h3 >WELCOME <?php
        if(isset($_SESSION['phone']))
    { echo"ADMIN" ;}?>  
        </h3></div>
        <div class="menu_login" >
        <ul>
        <!-- <li class="active"><a>
            <?php
            //echo $fname;
            ?>ADMIN
            </a></li> -->
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
          echo "<br><center style='font-size:30;color:cyan;'>Please Login First<br><br><a href='hlogin.php'>Click Here</a></center>";
        }
        else
        {
    ?>
    <div class="content_resize">
      <div class="mainbar">
      <center><br><br>
      <form method='post'>
          <input type='text' name='search' placeholder='Search' />
          <input type="submit" name="submit" />
        </form></center>

          <div class="helper">
        
                <?php
                // $sql="select * from helper where type='architect' order by hid";
                // $result = mysqli_query($conn, $sql);
                // echo "<table align='center' cellspacing='50'><tr>";
                // $count=0;
                // while($row2=mysqli_fetch_assoc($result))
                // {
                
                // // $target_path1="./admin/images/";
                // // $image=$target_path1.$row2['ProductImage'];
                // //echo $image;
                // echo "<td>";
                // echo "<div class='card'>";
                // echo "<div class='cardbody' align='center'>";
                // echo "<table><tbody>";
                // echo "<tr><td>Name</td><td>:</td>";
                // echo "<td>".$row2['firstname']." ".$row2['lastname']."</td></tr>";
                // echo "<tr><td>Phone</td><td>:</td>";
                // echo "<td>".$row2['phone']."</td></tr>";
                // echo "<tr><td>Area</td><td>:</td>";
                // echo "<td>".$row2['area']."</td></tr>";
                // echo "<tr><td>Type</td><td>:</td>";
                // echo "<td>".$row2['type']."</td></tr>";
                // echo "</tbody></table>";
                // echo "</div>";
                // echo "</div>";
                // echo "</td>";
                
                // $count++;
                // if($count>=5)
                // {
                //     echo "</tr><tr>";
                //     $count=0;
                // }
                
                // }
                
                // echo "</tr></table>";

                ?>
            <?php
                  if(isset($_REQUEST['submit']))
                  {
                    
                    

                    $name=$_POST['search'];

                      if($name=='')
                      {
                            $sql="select * from user order by uid";
                            $result = mysqli_query($conn, $sql);
                            echo "<table align='center' cellspacing='50'><tr>";
                            $count=0;
                            while($row2=mysqli_fetch_assoc($result))
                            {
                            
                            // $target_path1="./admin/images/";
                            // $image=$target_path1.$row2['ProductImage'];
                            //echo $image;
                            echo "<td>";
                            echo "<div class='card'>";
                            echo "<div class='cardbody' align='center'>";
                            echo "<table><tbody>";
                            echo "<tr><td>Name</td><td>:</td>";
                            echo "<td>".$row2['firstname']." ".$row2['lastname']."</td></tr>";
                            echo "<tr><td>Email</td><td>:</td>";
                            echo "<td>".$row2['email']."</td></tr>";
                            echo "<tr><td>Phone</td><td>:</td>";
                            echo "<td>".$row2['phone']."</td></tr>";
                            echo "<tr><td>Area</td><td>:</td>";
                            echo "<td>".$row2['area']."</td></tr>";
                            echo "<tr><td colspan='3'><center><a style='color:red' href=deleteu.php?id1=".$row2['uid'].">Delete</a></center> </td></tr>";

                            // echo "<tr><td>Type</td><td>:</td>";
                            // echo "<td>".$row2['type']."</td></tr>";
                            echo "</tbody></table>";
                            echo "</div>";
                            echo "</div>";
                            echo "</td>";
                            
                            $count++;
                            if($count>=5)
                            {
                                echo "</tr><td colspan='5'><hr style='height:5px;border-width:0;background-color:#CFCFCF'/></td><tr>";
                                $count=0;
                            }
                            
                            }
                            
                            echo "</tr></table>";
                          
                        
                        
                            
                      }


                    $q="select * from user where firstname='$name' or lastname='$name' or phone='$name' or email='$name' or area='$name' ";
                    $result = mysqli_query($conn, $q);
                    echo "<table align='center' cellspacing='50'><tr>";
                            $count=0;
                            while($row2=mysqli_fetch_assoc($result))
                            {
                            
                            // $target_path1="./admin/images/";
                            // $image=$target_path1.$row2['ProductImage'];
                            //echo $image;
                            echo "<td>";
                            echo "<div class='card'>";
                            echo "<div class='cardbody' align='center'>";
                            echo "<table><tbody>";
                            echo "<tr><td>Name</td><td>:</td>";
                            echo "<td>".$row2['firstname']." ".$row2['lastname']."</td></tr>";
                            echo "<tr><td>Email</td><td>:</td>";
                            echo "<td>".$row2['email']."</td></tr>";
                            echo "<tr><td>Phone</td><td>:</td>";
                            echo "<td>".$row2['phone']."</td></tr>";
                            echo "<tr><td>Area</td><td>:</td>";
                            echo "<td>".$row2['area']."</td></tr>";
                            echo "<tr><td colspan='3'><center><a style='color:red' href=deleteu.php?id1=".$row2['uid'].">Delete</a></center> </td></tr>";

                            // echo "<tr><td>Type</td><td>:</td>";
                            // echo "<td>".$row2['type']."</td></tr>";
                            echo "</tbody></table>";
                            echo "</div>";
                            echo "</div>";
                            echo "</td>";
                            
                            $count++;
                            if($count>=5)
                            {
                                echo "</tr><td colspan='5'><hr style='height:5px;border-width:0;background-color:#CFCFCF'/></td><tr>";
                                $count=0;
                            }
                            
                            }
                            
                            echo "</tr></table>";
                    
                    
                  }
                  else
                  {
                        $sql="select * from user order by uid";
                        $result = mysqli_query($conn, $sql);
                        echo "<table align='center' cellspacing='50'><tr>";
                        $count=0;
                        while($row2=mysqli_fetch_assoc($result))
                        {
                        
                        // $target_path1="./admin/images/";
                        // $image=$target_path1.$row2['ProductImage'];
                        //echo $image;
                        echo "<td>";
                        echo "<div class='card'>";
                        echo "<div class='cardbody' align='center'>";
                        echo "<table><tbody>";
                        echo "<tr><td>Name</td><td>:</td>";
                            echo "<td>".$row2['firstname']." ".$row2['lastname']."</td></tr>";
                            echo "<tr><td>Email</td><td>:</td>";
                            echo "<td>".$row2['email']."</td></tr>";
                            echo "<tr><td>Phone</td><td>:</td>";
                            echo "<td>".$row2['phone']."</td></tr>";
                            echo "<tr><td>Area</td><td>:</td>";
                            echo "<td>".$row2['area']."</td></tr>";
                            echo "<tr><td colspan='3'><center><a style='color:red' href=deleteu.php?id1=".$row2['uid'].">Delete</a></center> </td></tr>";

                            // echo "<tr><td>Type</td><td>:</td>";
                            // echo "<td>".$row2['type']."</td></tr>";
                            echo "</tbody></table>";
                        echo "</div>";
                        echo "</div>";
                        echo "</td>";
                        
                        $count++;
                        if($count>=5)
                        {
                            echo "</tr><td colspan='5'><hr style='height:5px;border-width:0;background-color:#CFCFCF'/></td><tr>";
                            
                            $count=0;
                        }
                        
                        }
                        
                        echo "</tr></table>";
                  }

                  mysqli_close($conn);
                }
            ?>
        
        
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
