<?php
 include("dbconfig.php");
 if(isset($_POST['btnsub']))
 {
  $result=mysqli_query($cn,"insert into college_offer(cid,clgname)values('".$_POST['cname']."','".$_POST['clgid']."')")or die("Error in Query");
  header("location:addclg_offer.php");
  exit();
 } 
 ?> 
 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Course Offer</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="row-2">
                                <div class="input-group">
                                    <label class="label">College id</label>
                                   <?php
    $catresult=mysqli_query($cn,"Select * from college")or die("Error In Select Query");
  ?>
   <select name="clgid" class="input--style-4" required>
   <?php
    while($cr=mysqli_fetch_array($catresult)){ ?>
  <option ><?php echo $cr['clgname'];?></option>
  <?php } ?>
   </select>
                                </div>
                            </div>
                            <div class="row-2">
                                <div class="input-group">
                                    <label class="label">Course Name</label>
                                   <?php
    $courceresult=mysqli_query($cn,"Select * from course")or die("Error In Select Query");
  ?>
   <select name="cname" class="input--style-4" required>
   <?php
    while($cr=mysqli_fetch_array($courceresult)){ ?>
  <option value="<?php echo $cr['cid'];?>"  ><?php echo $cr['cname'];?></option>
  <?php } ?>
   </select>
                                </div>
                            </div>
                            
                          <div class="col-2">
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="btnsub">Add</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
