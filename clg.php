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
      <td><a href="addclg.php" class="btn btn-primary btn-lg" role="button"><i class="bi bi-plus-circle"></i></a></td>
    </tr>
 </table>
</div>
    <div class="mx-5 mt-5 text-center">
    <p class=" bg-dark text-white p-2">College Ordered</p>
      <table class="table">
        <?php
    $c=mysqli_query($cn,"Select * from college")or die("error in select query");
    if(mysqli_num_rows($c)>0){?>
    <thead>
        <tr>
     <!-- <th scope="col">College Id</th>-->
      <th scope="col">Collage Name</th>
      <th scope="col">Address</th>
      <th scope="col">Collage Email</th>
      <th scope="col">Collage contact</th>
      <th scope="col">Collage URL</th>
      <th scope="col">Collage Description</th> 
      <th scope="col">Image</th>
      <th scope="col">Action</th>
        </tr>
    </thead>
    <?php
     while($r=mysqli_fetch_array($c)){?>
    <tbody>
        <tr>
      <td><?php echo $r['clgname'];?></td>
      <td><?php echo $r['Address'];?></td>
      <td><?php echo $r['clg_email'];?></td>
      <td><?php echo $r['mo_no'];?></td>
      <td><?php echo $r['urls'];?></td>
      <td><textarea class="form-control" rows="5" id="comment"><?php echo $r['clg_des'];?></textarea></td>
      <td><img src="<?php echo $r['image'];?>" height="100px" width="100px"></td>
      <td><a href="clg_delete.php?clg_id=<?php echo $r['c_id'];?>" class="btn btn-danger btn-md" role="button"><i class="bi bi-trash"></i></a>
      <a href="clg_edit.php?clg_id=<?php echo $r['c_id'];?>" class="btn btn-success btn-md" role="button"><i class="bi bi-pencil-square"></i></a></td>
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