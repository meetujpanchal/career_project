<?php
include("dbconfig.php");
if(isset($_POST['btnsub'])){
$result=mysqli_query($cn,"select * from img")or die("error in select query");
}
exit();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<table class="table">
        <?php
    $c=mysqli_query($cn,"Select * from img")or die("error in select query");
    if(mysqli_num_rows($c)>0){?>
    <thead>
        <tr>
      <th scope="col">image</th>
        </tr>
    </thead>
    <?php
     while($r=mysqli_fetch_array($c)){?>
    <tbody>                                                  
        <tr>
      <td><?php echo $r['img'];?></td>
              </tr>
    </tbody>
    <?php } }else{ ?>
        <tr>
            <td>NO Recode Found</td>
        </tr>
     <?php }
    ?>
</table>

</body>
</html>