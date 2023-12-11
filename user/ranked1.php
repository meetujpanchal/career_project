<?php
include("dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>webIQ</title>

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="grid-item">
        <?php 
        $result=mysqli_query($cn,"select * from college") or die("error in Query");
        if(mysqli_num_rows($result)>0){
          while($r=mysqli_fetch_array($result)){
        ?>
        <div class="card-body" >
          
          <img class="card-img" src="./img/rome.jpg" alt="Rome" />
          <div class="card-content">
             <table>
               <tr>
                 <td><label><?php echo $r['clgname'];?></label>
                 </td>
               </tr>
             </table>
            
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
          
        </div>
<?php
                  }
              }
          ?>
      </div>
       
      
    </div>

  </body>
</html>
