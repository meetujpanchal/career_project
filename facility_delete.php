<?php
 include("dbconfig.php");
 $result=mysqli_query($cn,"delete from facility where fid=".$_REQUEST['facility_id'])or die("Error in Delete query");
 header("location:facility.php");
 exit();
?>