<?php
 include("dbconfig.php");
 $result=mysqli_query($cn,"delete from facility_offer where f_id=".$_REQUEST['foffer_id'])or die("Error in Delete query");
 header("location:facility_offer.php");
 exit();
?>