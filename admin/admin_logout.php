<?php
 session_start();
 session_unset();
 session_destroy();
 header("location:/career/index.php");
 exit();

?>