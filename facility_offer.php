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
<div class="class-add">
  <table align="right">
    <tr >
      <td><a href="addfacility_offer.php" class="btn btn-primary btn-lg" role="button"><i class="bi bi-plus-circle"></i></a></td>
    </tr>
  </table>
</div>

    <div class="mx-5 mt-5 text-center">
    <p class=" bg-dark text-white p-2">Facility Ordered</p>
      <table class="table">
        <tr>
                <th>Sr no.</th>
                <th scope="col">Collage Name</th>
                <th scope="col">Facility Name</th>
        </tr>
        <?php
    $c=mysqli_query($cn,"select * from college")or die("error in select query");
    if(mysqli_num_rows($c)>0){ 
      $count=1;
      while($r=mysqli_fetch_array($c)){?>
<tr>
  <th><?php echo $count++;?> </th>
  <th><?php echo $r['clgname'];?></th>
</tr>
<tr>
<?php 
  $cr=mysqli_query($cn,"select * from facility_offer where c_id=".$r['c_id']);
  while($result=mysqli_fetch_array($cr)){
    ?>
    <td></td>
    <td></td>
    <td><?php echo $result['facility'];?></td>
  </tr>
   <?php
  }
?>
 <?php }}?>      

</table>

</div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
</html>