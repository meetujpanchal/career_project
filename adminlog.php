<?php
   include("dbconfig.php");
   session_start();
   
   //if($_SERVER["REQUEST_METHOD"] == "POST") 
   if(isset($_POST['btnsub']))
   {
      $role = "admin";
    $result=mysqli_query($cn,"select * from admin where aname='".$_POST['txtnm']."'AND pwd='".$_POST['txtpwd']."' AND role='$role'")or die("error in query");
    if(mysqli_num_rows($result)>0){
         $_SESSION['login_admin'] = $_POST['txtnm'];
         header("location:dasbord.php");
      }else {
         echo "<script>alert('you are not admin');</script>";
   }
 }
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Admin SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
  </head>
  <body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
      <h1> Admin Login Form</h1>
      <div class="main-agileinfo">
        <div class="agileits-top">
          <form action="#" method="post" autocomplete="off">
            <input class="text" type="text" name="txtnm" placeholder="name" required > <br>
            <input class="text" type="password" name="txtpwd" placeholder="Password" required>
            <div class="wthree-text">
              <label class="anim">
                <input type="checkbox" class="checkbox" required="">
                <span>I Agree To The Terms & Conditions</span>
              </label>
              <div class="clear"> </div>
            </div>
            <input type="submit" name="btnsub" value="SIGNUP">
          </form>
                  </div>
      </div>
      <!-- copyright -->
      <!-- //copyright -->
      <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <!-- //main -->
  </body>
</html>