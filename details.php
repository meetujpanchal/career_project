<?php
include("dbconfig.php");
require './header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Course</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="dcss/style.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <br>
    <br>
    <br>
    <?php
    include 'dbconfig.php';
    $result = mysqli_query($cn, "select * from course where cid = " . $_REQUEST['cid']) or die("can not found data");
    $r = mysqli_fetch_array($result);
    ?>
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="white-box text-center"><img
                                    src="admin/views/sb_assets/<?php echo $r['image']; ?>" width="430px" height="600px"
                                    class="img-responsive">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <h4 class="box-title mt-5">
                                <?php echo $r['cname']; ?>
                            </h4>
                            <p>
                                <?php echo $r['cdescri']; ?>
                            </p>
                            <h2 class="mt-5">Duration :
                                <?php echo $r['cduration']; ?>
                            </h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3 class="box-title mt-5">Currenty running on following Colleges and Ranking : </h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-product">
                                    <?php $c = mysqli_query($cn, "select * from college_offer where cid = " . $r['cid']);
                                    while ($row = mysqli_fetch_array($c)) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td width="390"><span><b><a href="<?php echo $row['urls']; ?>">
                                                                <?php echo $row['clgname']; ?>
                                                            </a></b></span></td>
                                                <td>
                                                    <?php echo $row['rates']; ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success btn-rounded" style="color: white;text-decoration: none;"><a
                            href="user/search.php"
                            style="color: white;background-color: transparent;text-decoration: none;">Back to
                            search</a></button>
                </div>
            </div>
        </div>
    </section>
    <?php
    require './footer.php';
    ?>
</body>

</html>