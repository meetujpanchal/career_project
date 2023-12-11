<?php
include("dbconfig.php");
include("user_dasbord.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
<!--<h4><label for="sel1">User Name :</label></h4>
<input type="text" name="usernm" value="<?php //echo $_SESSION['login_user'];?>">-->
</div>
</div>
</div>
<div>
  <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <span class='result'>0</span>
    <input type="hidden" name="rating">
</div>
<button type="submit"  name="btnsub" class="btn btn-primary ">Submit</button><br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
</main>
</body>
</html>
<?php
require 'dbconfig.php';
if (isset($_POST['btnsub']))
{
    $name = $_POST["clgid"];
    $rating = $_POST["rating"];
    $user = $_SESSION['login_user'];

    $sql = "INSERT INTO ratee (name,college_nm,rate) VALUES ('$user','$name','$rating')";
    if (mysqli_query($cn, $sql))
    {
        echo "New Rate addedddd successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($cn);
    }
    mysqli_close($cn);
    exit();
}
?>
