<?php
 include("dbconfig.php");

 if(isset($_POST['btnsub'])){
     if(isset($_FILES['ufile'])){
        $file=$_FILES['ufile'];

      $file_name=$file['name'];
      $file_tmp=$file['tmp_name'];
      $file_size=$file['size'];
      $file_type=$file['type'];
      $file_ext=explode('.', $file_name);
      $file_check=strtolower(end($file_ext));
    
      $extensions=array("jpeg","png","bmp","jpg");
      
      if(in_array($file_check, $extensions))
      {         
        $destinationfile="uploads/".$file_name;
        move_uploaded_file($file_tmp,"views/sb_assets/".$destinationfile);

    $result=mysqli_query($cn,"Insert into course(cname,cfees,cduration,cdescri,image)values('".$_POST['cnm']."','".$_POST['cfs']."','".$_POST['cdr']."','".$_POST['cdes']."','$destinationfile')")or die("Error In Insert Query");
    header("location:course1.php");
   exit();
 }
}
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
                    <h2 class="title">Add Course</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course Name</label>
                                    <input class="input--style-4" type="text" name="cnm" required>
                                </div>
                            </div>
                            
                       <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course Fees</label>
                                    <input class="input--style-4" type="text" name="cfs" required>
                                </div>
                            </div>
                            
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course Duration</label>
                                    <input class="input--style-4" type="text" name="cdr" required>
                                </div>
                            </div>

                            <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course Desperation </label>
                                    <textarea class="form-control" rows="5" id="comment" name="cdes" required></textarea>
                                </div>
                            </div>                            
                             <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                <label class="label">Course Image </label>
                <input type="file" name="ufile" class="form-control form-control" required>
            </div>
        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="btnsub">Add</button>
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
