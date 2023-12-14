<?php
session_start();
include("user_dasbordheader.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="dis.php">
          <i class="bi bi-person-bounding-box"></i>
          <span>My profile</span>
        </a>
      </li><!-- End My profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="search.php">
          <i class="bi bi-search"></i>
          <span>Search</span>
        </a>
      </li><!-- End search Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="Change_pwd.php">
          <i class="bi bi-lock"></i>
          <span>Change Password</span>
        </a>
      </li><!-- End cahnge password Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="evai.php">
          <i class="bi bi-star"></i>
          <span>Ranked</span>
        </a>
      </li><!-- End ranked Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="display_rank.php">
          <i class="bi bi-window-fullscreen"></i>
          <span>View All Colleges Rank</span>
        </a>
      </li><!-- End ranked Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="enquiry.php">
          <i class="bi bi-search"></i>
          <span>Enquiry</span>
        </a>
      </li><!-- End enquiry Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
</body>

</html>