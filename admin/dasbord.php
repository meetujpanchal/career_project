<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img class="img-fluid" src="img/hat2.png" height="500" width="500">
        <span class="d-none d-lg-block">CareerCounselling</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          
          

        <li class="nav-item dropdown">

          

          
        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/profile.png" height="40" width="40" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['login_admin'];?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['login_admin'];?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           
            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin_logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dasbord.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-heading">Pages</li>
     <li class="nav-item">
        <a class="nav-link collapsed" href="course1.php">
          <i class="bi bi-mortarboard-fill"></i>
          <span>Course</span>
        </a>
      </li><!-- End Course Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="clg.php">
          <i class="bi bi-bank2"></i>
          <span>College</span>
        </a>
      </li><!-- End Collage Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="facility.php">
          <i class="bi bi-award"></i>
          <span>Facility</span>
        </a>
      </li><!-- End Facility Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="course_offer.php">
         <i class="bi bi-mortarboard"></i>
          <span>Course_offer</span>
        </a>
      </li><!-- End Course_offer Page Nav -->  
      <li class="nav-item">
        <a class="nav-link collapsed" href="facility_offer.php">
         <i class="bi bi-award-fill"></i>
          <span>Facility_offer</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="dasuser.php">
         <i class="bi bi-person-square"></i>
          <span>User</span>
        </a>
      </li><!-- End User Page Nav -->  
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="contectus.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="enquiry.php">
        <i class="bi bi-search"></i>
          <span>Enquiry</span>
        </a>
      </li><!-- End enquiry Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dasbord.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Course</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="course1.php"><i class="bi bi-mortarboard-fill"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                            include("dbconfig.php");
                            $result = mysqli_query($cn,"select count(2) FROM course");
                            $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            echo $total;

                            mysqli_close($cn);
                          ?></h6>
                     
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


             <!-- Sales Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">College</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="clg.php"><i class="bi bi-bank2"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                            include("dbconfig.php");
                            $result = mysqli_query($cn,"select count(2) FROM college");
                            $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            echo $total;

                            mysqli_close($cn);
                          ?></h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
              <!-- Sales Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">User</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="dasuser.php"><i class="bi bi-person-square"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                            include("dbconfig.php");
                            $result = mysqli_query($cn,"select count(2) FROM user");
                            $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            echo $total;

                            mysqli_close($cn);
                          ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->


            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">
                              <div class="card-body">
                  <h5 class="card-title">Student Enquiry <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <a href="enquiry.php"><i class="bi bi-chat-text-fill"></i></a>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                            include("dbconfig.php");
                            $result = mysqli_query($cn,"select count(2) FROM enquiry");
                            $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            echo $total;

                            mysqli_close($cn);
                          ?></h6></h6>               
                 </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

          
           
           
          </div>
        </div><!-- End Left side columns -->

        

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Career Counselling</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
