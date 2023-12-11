<?php
 include("dbconfig.php");
 if(isset($_POST['signup'])){   
    $result=mysqli_query($cn,"Insert into user(uname,email,phone_no,pwd)values('".$_POST['name']."','".$_POST['email']."','".$_POST['number']."','".$_POST['pass']."')")or die("Error In Insert Query");
    header("location:user_log.php");
 }
?><!DOCTYPE html>
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
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="myform">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email" >
                            </div>
                            <!-- required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" -->
                            <div class="form-group">
                                <label for="Mo no."><i class="zmdi zmdi-smartphone"></i></label>
                                <input type="text" name="number" id="number" placeholder="Your number" required pattern="[1-9]{1}[0-9]{9}">
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  </label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="user_log.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

       
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // just for the demos, avoids form submit
        jQuery.validator.setDefaults({
            debug: true,
            success:  function(label){
                label.attr('id', 'valid');
            },
        });
        $( "#myform" ).validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                number: {
                    required: true
                    number: true
                }
                pass: "required",
                re_pass: {
                    equalTo: "#pass"
                }
            },
            messages: {
                name: {
                    required: "Please enter an username"
                },
                email: {
                    required: "Please provide an email"
                },
                pass: {
                    required: "Please provide a password"
                },
                re_pass: {
                    required: "Please provide a password",
                    equalTo: "Wrong Password"
                }
            }
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>