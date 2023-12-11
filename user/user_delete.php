<?php
 include("dbconfig.php");
 $result=mysqli_query($cn,"delete from user where uid=".$_REQUEST['user_id'])or die("Error in Delete query");
 header("location:user_dis.php");
 exit();
?>