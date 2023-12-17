<?php
 include("dbconfig.php");
 $result=mysqli_query($cn,"delete from college where c_id=".$_REQUEST['clg_id'])or die("Error in Delete query");
 header("location:clg.php");
 exit();
?>