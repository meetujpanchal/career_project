<?php 
   include "dbconfig.php";

   if(isset($_POST['btnup'])){
     if(isset($_FILES['ufile'])){

      $title=$_POST['title'];
      $desc=$_POST['desc'];
      $category=$_POST['category'];
      $file_new=$_FILES['ufile'];
      $file_old=$_POST['ufile_old'];
      $date=date('y,m,d');
      //$author=$_SESSION['user_id'];

     
      $file_name=$file_new['name'];
      $file_tmp=$file_new['tmp_name'];
      $file_size=$file_new['size'];
      $file_type=$file_new['type'];
      $file_ext=explode('.', $file_name);
      $file_check=strtolower(end($file_ext));
    
      $extensions=array("jpeg","png","bmp","jpg");

      if(in_array($file_check, $extensions))
      {
        $newimage="upload/".$file_name;

       $result=mysqli_query($cn,"update news set title='$title',description='$desc',categoryid='$category',news_image='$newimage' ,date='$date' where nid=".$_REQUEST['news_id'])or die("Error in Query");
            move_uploaded_file($file_tmp,$newimage);
            header("location:news.php");
       }
 }   
}
  $result=mysqli_query($cn,"select * from news as n inner join category as c on c.cat_id=n.categoryid") or die("Error in Select Query");
     $r=mysqli_fetch_array($result);

      include "dashboard.php";

?>
 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Post</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="disdasboard.php">Home</a></li>
          <li class="breadcrumb-item">Post</li>
          <li class="breadcrumb-item active">Update Post</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="vh-100 bg-secondary" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5">

            <h3 class="mb-2 text-center">Update Post</h3>
           <form method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
             <label class="form-label text-dark" for="title"><b>Title</b></label>
              <input type="text" id="title" class="form-control form-control" name="title" placeholder="Enter News Title" value="<?php echo $r['title']; ?>"/>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label text-dark" for="desc"><b>Description</b></label>
                <textarea class="form-control form-control" row="5" placeholder="Enter Description" id="desc" name="desc">
                     <?php echo $r['description']; ?>
                </textarea> 
            </div>
            <?php 
              $cat_res=mysqli_query($cn,"select * from category") or die("Error In Query");
            ?>
            <div class="form-outline mb-4">
             <label class="form-label text-dark" for="category"><b>Category</b></label>
                <select name="category" class="form-control form-control">
                  <?php 
                    while($cr=mysqli_fetch_array($cat_res)){?>
                  <option value="<?php echo $cr['cat_id'];?>"><?php echo $cr['cat_name'];?></option>
                <?php }?>
                </select>
            </div>
            
             <div  class="form-group form-outline mb-4">
                <label class="form-label text-dark" for="image"><b>Post image</b></label>
            <input type="file" name="ufile" class="form-control" required>
            <input type="hidden" name="ufile_old" class="form-control " value="<?php echo $r['news_image']; ?>" required>

            </div>
          
            <div>
            <button class="btn btn-primary btn-lg" type="submit" name="btnup">Update</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

   