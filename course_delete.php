<?php
 include("dbconfig.php");
 $result=mysqli_query($cn,"delete from course where cid=".$_REQUEST['course_id'])or die("Error in Delete query");
 header("location:course1.php");
 exit();
?>