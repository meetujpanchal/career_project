<?php

  include "user_dasbord.php";
  include "dbconfig.php";

?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Mechanic</li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
       <div class="container-fluid">
      <div class="row">
        <div class="col col-10">
         <h2> All Services</h2>
       </div>
       <div class="col col-2">
         <a class="btn btn-outline-info" href="addservice.php" role="button">Add Services</a>
         <a class="btn btn-outline-info" href="delete.php" role="button">Delete</a>
       </div>
     
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php 
        $result=mysqli_query($cn,"select * from college") or die("error in Query");
        if(mysqli_num_rows($result)>0){
          while($r=mysqli_fetch_array($result)){
        ?>
      
  <div class="col">
    <div class="card">
        
      <img src="<?php echo $r['image'];?>" class="card-img-top" style="width: 454px;height: 256px;" />
      <div class="card-body">
        <h6 class="card-title text-truncate"><?php echo $r['clgname'];?></h6>
        <h6 class="card-text text-truncate"><?php echo $r['clg_des'];?></h6>
             <!-- <a href="readmore.php?id=<?php //echo $r['sid']; ?>" class="btn btn-primary">Read More</a>-->

       
      </div>

    </div>
  </div>
  <?php    
          }
        }
?>
</div>
    </section>
  </main>