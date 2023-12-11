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
      <td><a href="user_rig.php" class="btn btn-primary btn-lg" role="button"><i class="bi bi-plus-circle"></i></a></td>
    </tr>
 </table>
</div>

    <div class="mx-5 mt-5 text-center">
    <p class=" bg-dark text-white p-2">Course Ordered</p>
      <table class="table">
        <?php
    $c=mysqli_query($cn,"Select * from user")or die("error in select query");
    if(mysqli_num_rows($c)>0){?>
    <thead>
        <tr>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">User contact</th> 
      <th scope="col">Action</th>
        </tr>
    </thead>
    <?php
     while($r=mysqli_fetch_array($c)){?>
    <tbody>                                                  
        <tr>
      <td><?php echo $r['uname'];?></td>
      <td><?php echo $r['email'];?></td>
      <td><?php echo $r['phone_no'];?></td>
      <td><a href="user_delete.php?user_id=<?php echo $r['uid'];?>" class="btn btn-danger btn-md" role="button"><i class="bi bi-trash"></i></a>
      <a href="user_edit.php?user_id=<?php echo $r['uid'];?>" class="btn btn-success btn-md" role="button"><i class="bi bi-pencil-square"></i></a></td>
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
