<?php
 include("silder.php");
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

    <div class="mx-5 mt-5 text-center">
    <p class=" bg-dark text-white p-2">College Ordered</p>
      <table class="table">
        <?php
    $c=mysqli_query($cn,"Select * from contact")or die("error in select query");
    if(mysqli_num_rows($c)>0){?>
    <thead>
        <tr>
     <!-- <th scope="col">College Id</th>-->
      <th scope="col"> Name</th>
      <th scope="col">Email</th>
      <th scope="col">contact No</th>
      <th scope="col">Message</th>
        </tr>
    </thead>
    <?php
     while($r=mysqli_fetch_array($c)){?>
    <tbody>
        <tr>
      <td><?php echo $r['co_name'];?></td>
      <td><?php echo $r['co_mail'];?></td>
      <td><?php echo $r['co_no'];?></td>
      <td><?php echo $r['message'];?></td>
        </tr>
    </tbody>
    <?php } }else{ ?>
        <tr>
            <td>NO Recode Found</td>
        </tr>
     <?php }
    ?>
</table>

</div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
</html>