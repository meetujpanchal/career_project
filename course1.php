<?php
 include("dbconfig.php");
 include("silder.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
</head>

<body>
	
     <main id="main" class="main">

    <table align="right">
    <tr >
      <td><a href="addcourse.php" class="btn btn-primary btn-lg" role="button"><i class="bi bi-plus-circle"></i></a></td>
    </tr>
  </table>
    <div class="mx-5 mt-5 text-center">
	<p class=" bg-dark text-white p-2">Course Ordered</p>
      <table class="table">
      	<?php
 	$c=mysqli_query($cn,"Select * from course")or die("error in select query");
 	if(mysqli_num_rows($c)>0){?>
	<thead>
		<tr>
			<!--<th scope="col">No.</th>-->
			<th scope="col">Course Name</th>
			<th scope="col">Course Fees<br>(Per Year)</th>
      <th scope="col">Course Duration</th>
      <th scope="col">Course Description</th>
      <th scope="col">Image</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<?php
 	 while($r=mysqli_fetch_array($c)){?>
	<tbody>
		<tr>
			
			<td><?php echo $r['cname'];?></td>
			<td><?php echo $r['cfees'];?></td>
      <td><?php echo $r['cduration'];?></td>
      <td><textarea class="form-control" rows="5" id="comment"><?php echo $r['cdescri'];?></textarea></td>
            <td><img src="<?php echo $r['image'];?>" height="100px" width="100px"></td>
      <td><a href="course_delete.php?course_id=<?php echo $r['cid'];?>" class="btn btn-danger btn-md" role="button"><i class="bi bi-trash"></i></a></td>
      <td><a href="Course_edit.php?course_id=<?php echo $r['cid'];?>" class="btn btn-success btn-md" role="button"><i class="bi bi-pencil-square"></i></a></td>
			</tr>
	</tbody>
	<?php } }else{ ?>
 	 	<tr>
 	 		<td>NO Recode Found</td>
 	 	</tr>
 	 <?php }
 	?>
</table>
<div class="class-add">
</div>
</div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>
