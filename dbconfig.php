<?php
 $cn=mysqli_connect("localhost","root","root")or die("error in connecting server");
 mysqli_select_db($cn,"career") or die("error in connecting database");
?>