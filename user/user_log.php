<?php
   include("dbconfig.php");
   session_start();
   
   //if($_SERVER["REQUEST_METHOD"] == "POST") 
   if(isset($_POST['signin']))
   {      
    $result=mysqli_query($cn,"select * from user where email='".$_POST['email']."'AND pwd='".$_POST['pass']."'")or die("error in query");
    if(mysqli_num_rows($result)>0)
    {
        while($r=mysqli_fetch_array($result))
      {
         $_SESSION['login_user'] = $r['uname'];
         $_SESSION['uid'] = $r['uid'];
         $_SESSION['email'] = $r['email'];
         header("location:../index.php");
      }
    }
    else 
    {
         echo "<script>alert('you are not sign in');</script>";
         

   }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
  <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="user_rig.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password" required>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>