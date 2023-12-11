<?php

  include "user_dasbord.php";
  include "dbconfig.php";

?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Customer</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
          

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

               

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>
                  <?php 
                    $result=mysqli_query($cn,"select * from user where uid='".$_SESSION['uid']."'") or die("Error in Select Query");
                    //if(mysqli_num_rows($result)>0){
                      while($cr=mysqli_fetch_array($result)){
                  ?>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $cr['uname']; ?></div>
                  </div>

                  
                 
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $cr['phone_no']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $cr['email']; ?></div>
                  </div>

                  
<?php }?>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <?php
                  if(isset($_POST['btnsub'])){
                    $result=mysqli_query($cn,"update user set uname='".$_POST['uname']."',phone_no='".$_POST['mobile']."',email='".$_POST['email']."' where uid=".$_SESSION['uid'])or die("Error in Update Query ");
                  }
                  ?>


                  <form method="post">
                    <div class="row mb-3">
                      
                    <?php
                    $result=mysqli_query($cn,"select * from user where uid=".$_SESSION['uid']) or die("Errr In Select Query");
                    $row=mysqli_fetch_array($result);
                    ?>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="uname" type="text" class="form-control" id="fullName" value="<?php echo $row['uname'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="mobile" type="text" class="form-control" id="Phone" value="<?php echo $row['phone_no'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="text" class="form-control" id="email" value="<?php echo $row['email'];?>">
                      </div>
                    </div>

                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="btnsub">Save Changes</button>
                    </div>
                  </form> 

                </div>

                </div>
               
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
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