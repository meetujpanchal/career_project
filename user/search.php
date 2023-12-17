<?php
include("dbconfig.php");
include("user_dasbord.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <main id="main" class="main">
<div class="container-fluid mt-3">
    <div class="row">
    <div class="col p-3 ">
      <div class="container">
    <form method="POST">
    <div class="form-group">
      <h4><label for="sel1">Select College :</label></h4>
       <?php
    $catresult=mysqli_query($cn,"Select * from college")or die("Error In Select Query");
  ?>
   <h5><select name="clgid" class="input--style-4">
   <?php
    while($cr=mysqli_fetch_array($catresult)){ ?>
      
  <option><?php echo $cr['clgname'];?></option>
  <?php } ?>
   </select></h5>
    </div>
</div>
</div>
  </div>
</div>
<button type="submit"  name="btnsub" class="btn btn-primary ">Search By college</button><br>
<div class="form-group">
      <h4><label for="sel1">Select Course :</label></h4>
       <?php
    $catresult=mysqli_query($cn,"Select * from course")or die("Error In Select Query");
  ?>
   <h5><select name="cid" class="input--style-4">
   <?php
    while($cr=mysqli_fetch_array($catresult)){ ?>
      
  <option><?php echo $cr['cname'];?></option>
  <?php } ?>
   </select></h5>
    </div>
    <button type="submit"  name="btnc" class="btn btn-primary ">Search By Course</button><br>
<div>
  <?php
  include("dbconfig.php");
  if(isset($_POST['btnsub'])){

    $name=$_POST['clgid'];

    $result=mysqli_query($cn,"select * from college where clgname='$name'  ");

    while ($r=mysqli_fetch_array($result)) 
    {
      ?>
      <div class="card" style="width: 25rem;">
  <div class="card-body">
  <h5 class="card-title"><br><img src="../admin/views/sb_assets/<?php echo $r['image'];?>" height="300px" width="358.01px">
    <b>College Name:</b><br><?php echo $r['clgname'];?></br><br>
          <b>College Address:</b><br><?php echo $r['Address'];?><br><br>
          <b>College Email:</b><br><?php echo $r['clg_email'];?><br><br>
          <b>College Mo.no:</b><br><?php echo $r['mo_no'];?><br><br>
          <b>College Address:</b><br><?php echo $r['Address'];?><br><br>
          <b>College Description:</b><br><?php echo $r['clg_des'];?></p>
          <b>College Site:</b><br><a href="<?php echo $r['urls'];?>"><?php echo $r['clgname'];?></a></p>
          <b>Related Course Name:</b><br>
          <?php
  include("dbconfig.php");
  if(isset($_POST['btnsub'])){
    $result=mysqli_query($cn,"select * from cource_offer where c_id=".$r['c_id']);

    while ($r=mysqli_fetch_array($result)) 
    {
      ?>
          <br><a href="../detailsc.php?cname=<?php echo $r['cname'];?>"><?php echo $r['cname'];?></a></p>
          <?php
        }
      }
      ?>
  </div>
</div>
        
        
      </div>
    </div>
        
              <!--<a href="readmore.php?id= echo $r['sid']; ?>" class="btn btn-primary">Read More</a>-->

       
      </div>

    </div>
         

      <?php
    }
  }
  ?>
</div>
<div>
  <?php
  include("dbconfig.php");
  if(isset($_POST['btnc'])){

    $name=$_POST['cid'];

    $result=mysqli_query($cn,"select * from course where cname='$name'  ");

    while ($r=mysqli_fetch_array($result)) 
    {
      ?>
      <div class="card" style="width: 25rem;">
  <div class="card-body">
    <p class="card-title"><b>Course Name:</b><br><a href="../details.php?cid=<?php echo $r['cid']?>"><?php echo $r['cname'];?></a></br></br>
                          <b>Course Descriation:</b><br><?php echo $r['cdescri'];?></br>
                         <p class="card-title"><b>Related College Name:</b>
          <?php
  include("dbconfig.php");
  if(isset($_POST['btnc'])){
    $result=mysqli_query($cn,"select * from college_offer where cid=".$r['cid']);

    while ($r=mysqli_fetch_array($result)) 
    {
      ?>
          <br><p><b><a href="<?php echo $r['urls'];?>"><?php echo $r['clgname'];?></a></b></p>
          <?php
        }
      }
      ?>
  </div>
</div>
        
        
      </div>
    </div>
        
              <!--<a href="readmore.php?id= echo $r['sid']; ?>" class="btn btn-primary">Read More</a>-->

       
      </div>

    </div>
         

      <?php
    }
  }
  ?>
</div>
  </form>
</div>
</div>
</div>
</div>
</main>
</body>
</html>
