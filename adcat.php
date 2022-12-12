<?php
if(isset($_POST['category']))
{
include_once('database.php');

$type=$_POST['cat'];
echo $type;
$q="INSERT INTO category(`type`) VALUES ('$type')";
$query = mysqli_query($conn, $q);
header('Refresh:1 ; url=hsignup.php');
}
?>
<form method='post'>
<label>Enter Category</label>
<input type='text' id='cate'  name="cat" placeholder="category" />
<input type="submit" name="category" value="Add Category" onClick="return checkdetails();"/><br>

</form>
<script language="javascript" type="text/javascript">
    function checkdetails(){
        var cat=document.getElementById('cate');
        if(cat.value == ""){
            alert("Please Enter category.");
			cat.focus(); // set the focus to this input
			return false;
		}

        return true;
    }
    </script>