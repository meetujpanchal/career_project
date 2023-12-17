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
  <p class=" bg-dark text-white p-2">User Ordered</p>
      <table class="table">
        <?php
  $c=mysqli_query($cn,"Select * from user")or die("error in select query");
  if(mysqli_num_rows($c)>0){?>
  <thead>
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">User Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Action</th>

          </tr>
  </thead>
  <?php
   while($r=mysqli_fetch_array($c)){?>
  <tbody>
    <tr>
      <td><?php echo $r['uid'];?></td>
      <td><?php echo $r['uname'];?></td>
      <td><?php echo $r['email'];?></td>
      <td><a href="user_delete.php?user_id=<?php echo $r['uid'];?>" class="btn btn-danger btn-md" role="button"><i class="bi bi-trash"></i></a>
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
    </pre>
  </body>
</html>

