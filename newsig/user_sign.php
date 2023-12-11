<?php
   include("dbconfig.php");
   session_start();
   
   //if($_SERVER["REQUEST_METHOD"] == "POST") 
   if(isset($_POST['signin']))
   {
      
    $result=mysqli_query($cn,"select * from user where email='".$_POST['your_email']."'AND pwd='".$_POST['password']."'")or die("error in query");
    if(mysqli_num_rows($result)>0)
    {
        while($r=mysqli_fetch_array($result))
      {
         $_SESSION['login_user'] = $r['uname'];
         $_SESSION['uid'] = $r['uid'];
         header("location:dis.php");
      }
    }
    else 
    {
         echo "<script>alert('you are not sign in');</script>";
         

   }
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v7 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v7">
	<div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
				<img src="images/avataaars.png" height="520" width="360" alt="form">
				<p class="text-1">Sign In</p>
				
			</div>
			<form class="form-detail" action="#" method="post" id="myform"><br><br><br><br>
				
				<div class="form-row">
					<label for="your_email">E-MAIL</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<label for="password">PASSWORD</label>
					<input type="password" name="password" id="password" class="input-text" required>
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="signin" class="register" value="Sign in">
					<p>Or<a href="user_rig.php">register</a></p>
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
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
				    your_email: {
			      	required: true,
			      	email: true
			    },
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		username: {
		  			required: "Please enter an username"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please provide a password"
		  		},
		  		comfirm_password: {
		  			required: "Please provide a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>