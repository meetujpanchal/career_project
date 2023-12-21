<?php
 include("user_dasbord.php");
 include("dbconfig.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <main id="main" class="main">
<!-- Change Password Form -->
                  
                    <div class="col-xl-8">
                    <div class="card">
            <div class="card-body pt-3">
              <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>

                     <?php
                   if(isset($_POST['btnup'])){
                    $result=mysqli_query($cn,"update user set pwd='".$_POST['renewpassword']."' where uid=".$_SESSION['uid']) or die ("error in update Query");
                   }
                   $row=mysqli_query($cn,"select * from user where uid=".$_SESSION['uid']) or die("error in select Query");
                   $r=mysqli_fetch_array($row);
                   
?>

                <!--<div class="tab-pane fade pt-3" id="profile-change-password">-->
                  <form method="post">

                    <div class="col-12">
                          <div class="input-group mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label> 
                        <input name="password" type="password"  class="input form-control" id="password"  required="true" value="<?php echo $r['pwd'];?>">
                            <span class="input-group-text" onclick="password_show_hide();">
                              <i class="bi bi-eye-fill" id="show_eye"></i>
                              <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="btnup">Change Password</button>
                    </div>
                  </form> 
                </div>
                <script type="text/javascript">
              function password_show_hide() {
              var x = document.getElementById("password");
              var show_eye = document.getElementById("show_eye");
              var hide_eye = document.getElementById("hide_eye");
              hide_eye.classList.remove("d-none");
              if (x.type === "password") {
              x.type = "text";
              show_eye.style.display = "none";
              hide_eye.style.display = "block";
              } else {
              x.type = "password";
              show_eye.style.display = "block";
              hide_eye.style.display = "none";
              }
              }
              </script>
</body>
</html>