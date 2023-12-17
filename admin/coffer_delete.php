<?php
 include("dbconfig.php");
 $result=mysqli_query($cn,"delete from cource_offer where oid=".$_REQUEST['coffer_id'])or die("Error in Delete query");
 header("location:course_offer.php");
 exit();
?>