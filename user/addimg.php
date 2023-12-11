<?php 
   include "dbconfig.php";
   //include "header.php";

   if(isset($_POST['btnsave'])){
     if(isset($_FILES['ufile'])){

      $title=$_POST['title'];
      $desc=$_POST['desc'];
      $category=$_POST['category'];
      $file=$_FILES['ufile'];
      $date=date('y,m,d');
      $author=$_SESSION['user_id'];

      $file_name=$file['name'];
      $file_tmp=$file['tmp_name'];
      $file_size=$file['size'];
      $file_type=$file['type'];
      $file_ext=explode('.', $file_name);
      $file_check=strtolower(end($file_ext));
    
      $extensions=array("jpeg","png","bmp","jpg");
      
      if(in_array($file_check, $extensions))
      {
        $destinationfile="uploads/".$file_name;
        move_uploaded_file($file_tmp,$destinationfile);

        $result=mysqli_query($cn,"insert into news(title,description,categoryid,news_image,date,author) values('$title','$desc','$category','$destinationfile','$date','$author')") or die("Error in Insert Query");
          $cr=mysqli_query($cn,"update category set post= post+1 where cat_id=$category") or die("error in query"); 

         header("location:news.php");
         exit();
   
       }
      }
       /*  if(isset($_POST['btnsave']))
         {
  
           $result=mysqli_query($cn,"insert into post(title,description,categoryid) values('".$_POST['title']."','".$_POST['desc']."','".$_POST['category']."')")or die("Error in Query");
           $cr=mysqli_query($cn,"update category set post= post+1 where /cat_id=".$_POST['category']) or die("error in query"); 

           header("location:news.php");
           exit();
*/
    }
?>
   <?php include "dashboard.php";?>
    <main id="main" class="main">

    <div class="pagetitle">
      <h1>All Post</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="disdasboard.php">Home</a></li>
          <li class="breadcrumb-item">Post</li>
          <li class="breadcrumb-item active">All Post</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="vh-100 bg-secondary" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5">

            <h3 class="mb-2 text-center">Add News</h3>
           <form method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
             <label class="form-label text-dark" for="title"><b>Title</b></label>
              <input type="text" id="title" class="form-control form-control" name="title" placeholder="Enter News Title" required />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label text-dark" for="desc"><b>Description</b></label>
                <textarea class="form-control form-control" row="5" placeholder="Enter Description" id="desc" name="desc" required></textarea> 
            </div>
            <div class="form-outline mb-4">
            <?php 
              $cat_res=mysqli_query($cn,"select * from category") or die("Error In Query");
            ?>
            <div class="form-outline mb-4">
             <label class="form-label text-dark" for="category"><b>Category</b></label>
                <select name="category" class="form-control form-control" required>
                  <?php 
                    while($cr=mysqli_fetch_array($cat_res)){?>
                  <option value="<?php echo $cr['cat_id'];?>"><?php echo $cr['cat_name'];?></option>
                <?php }?>
                </select>
            </div>
            
             <div  class="form-group form-outline mb-4">
                <label class="form-label text-dark" for="image"><b>Post image</b></label>
                <input type="file" name="ufile" class="form-control form-control" required>
            </div>
          
            <div>
            <button class="btn btn-primary btn-lg" type="submit" name="btnsave">save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

   