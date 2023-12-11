<?php
 include("dbconfig.php");
 if(isset($_POST['btnsub'])){
    if(isset($_FILES['ufile'])){

      //$title=$_POST['title'];
      //$desc=$_POST['desc'];
      //$category=$_POST['category'];
      $file_new=$_FILES['ufile'];
      $file_old=$_POST['ufile_old'];
      //$date=date('y,m,d');
      //$author=$_SESSION['user_id'];

     
      $file_name=$file_new['name'];
      $file_tmp=$file_new['tmp_name'];
      $file_size=$file_new['size'];
      $file_type=$file_new['type'];
      $file_ext=explode('.', $file_name);
      $file_check=strtolower(end($file_ext));
    
      $extensions=array("jpeg","png","bmp","jpg");

      if(in_array($file_check, $extensions))
      {
        $newimage="uploads/".$file_name;
    $result=mysqli_query($cn,"Update course set cname='".$_POST['cnm']."',cfees='".$_POST['cfs']."',cduration='".$_POST['cdr']."',cdescri='".$_POST['cdes']."',urls='".$_POST['ur']."',image='$newimage' where cid=".$_REQUEST['course_id'])or die("Error In Update Query");
    move_uploaded_file($file_tmp,$newimage);
    header("location:course1.php");
   exit();
 }
}
}
 $result=mysqli_query($cn,"select * from course where cid=".$_REQUEST['course_id'])or die("Error in select Query");
 $r=mysqli_fetch_array($result);
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
                    <h2 class="title">Edit Course</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course Name</label>
                                    <input class="input--style-4" type="text" name="cnm" value="<?php echo $r['cname'];?>">
                                </div>
                            </div>
                            
                       <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course Fees</label>
                                    <input class="input--style-4" type="text" name="cfs" value="<?php echo $r['cfees'];?>">
                                </div>
                            </div>
                            
                           <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course Duration</label>
                                    <input class="input--style-4" type="text" name="cdr"
                                    value="<?php echo $r['cduration'];?>">
                                </div>
                            </div>


                            <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course Desperation </label>
                                    <textarea class="form-control" rows="5" id="comment" name="cdes" ><?php echo $r['cdescri'];?></textarea>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course URL</label>
                                    <input class="input--style-4" type="text" name="ur" value="<?php echo $r['urls'];?>">
                                </div>
                             <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                <label class="label">Course Image </label>
                <input type="file" name="ufile" class="form-control form-control" value="<?php echo $r['image'];?>" required>
                <input type="hidden" name="ufile_old">
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
