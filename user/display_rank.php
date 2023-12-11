<?php
include("user_dasbord.php");
include("dbconfig.php")
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
    <main id="main" class="main">
<div class="class-add">
  <table align="right">
    <tr >
      <td><a href="addclg.php" class="btn btn-primary btn-lg" role="button"><i class="bi bi-plus-circle"></i></a></td>
    </tr>
 </table>
</div>
    <div class="mx-5 mt-5 text-center">
    <p class=" bg-dark text-white p-2">College Ranked</p>
      <table class="table">
        <?php
    $c=mysqli_query($cn,"Select * from ratee")or die("error in select query");
    if(mysqli_num_rows($c)>0){?>
    <thead>
        <tr>
     <!-- <th scope="col">College Id</th>-->
      <th scope="col">User Name</th>
      <th scope="col">Collage Name</th>
      <th scope="col">Rates</th>
        </tr>
    </thead>
    <?php
     while($r=mysqli_fetch_array($c)){?>
    <tbody>
        <tr>
      <td><?php echo $r['name'];?></td>
      <td><?php echo $r['college_nm'];?></td>
      <td><?php echo $r['rate'];?></td>
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