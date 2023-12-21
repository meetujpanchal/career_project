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
        <form method="POST">
          <div class="form-group">
            <h4><label for="sel1">Select College :</label></h4>
            <?php
            $catresult = mysqli_query($cn, "Select * from college") or die("Error In Select Query");
            ?>
            <h5><select name="clgid" class="input--style-4">
                <?php
                while ($cr = mysqli_fetch_array($catresult)) { ?>
                  <option>
                    <?php echo $cr['clgname']; ?>
                  </option>
                <?php } ?>
              </select></h5>
          </div>
      </div>
    </div>
    <button type="submit" name="btnsub" class="btn btn-primary ">Search By college</button><br><br>
    <div class="form-group">
      <h4><label for="sel1">Select Course :</label></h4>
      <?php
      $catresult = mysqli_query($cn, "Select * from course") or die("Error In Select Query");
      ?>
      <h5><select name="cid" class="input--style-4">
          <?php
          while ($cr = mysqli_fetch_array($catresult)) { ?>
            <option>
              <?php echo $cr['cname']; ?>
            </option>
          <?php } ?>
        </select></h5>
    </div>
    <button type="submit" name="btnc" class="btn btn-primary ">Search By Course</button><br><br><br>
    <div>
      <?php
      include("dbconfig.php");
      if (isset($_POST['btnsub'])) {
        $name = $_POST['clgid'];
        $result = mysqli_query($cn, "select * from college where clgname='$name'  ");
        while ($r = mysqli_fetch_array($result)) {
          ?>
          <div class="card mb-3">
            <img class="card-img-top" src="../admin/views/sb_assets/<?php echo $r['image']; ?>" height="500px"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><b>College Name&nbsp;&nbsp;:</b>&nbsp;&nbsp;
                <?php echo $r['clgname']; ?>
              </h5>
              <p class="card-text"><b>College Description&nbsp;&nbsp;:</b>&nbsp;&nbsp;
                <?php echo $r['clg_des']; ?>
              </p>
              <p class="card-text"><b>College Address&nbsp;&nbsp;:</b>&nbsp;&nbsp;
                <?php echo $r['Address']; ?>
              </p>
              <p class="card-text"><b>College Email&nbsp;&nbsp;:</b>&nbsp;&nbsp;
                <?php echo $r['clg_email']; ?>
              </p>
              <p class="card-text"><b>College Mobile&nbsp;&nbsp;:</b>&nbsp;&nbsp;
                <?php echo $r['mo_no']; ?>
              </p>
              <p class="card-text"><b>College Description&nbsp;&nbsp;:</b>&nbsp;&nbsp;
                <?php echo $r['clg_des']; ?>
              </p>
              <p class="card-text"><b>College Urls&nbsp;&nbsp;:</b>&nbsp;&nbsp;<a href="<?php echo $r['urls']; ?>">
                  <?php echo $r['clgname']; ?>
                </a></p>
              <p class="card-text"><b>Related Course Name&nbsp;&nbsp;:</b><br>
            </div>
          </div>
          <div class="card-deck">
            <?php
            include("dbconfig.php");
            if (isset($_POST['btnsub'])) {
              $result = mysqli_query($cn, "select * from cource_offer where c_id=" . $r['c_id']);
              while ($rd = mysqli_fetch_array($result)) {
                ?>
                <div class="card">
                  <?php $cr = mysqli_query($cn, "select * from course where cname = '$rd[cname]' ");
                  while ($crd = mysqli_fetch_array($cr)) {
                    ?>
                    <a href="../details.php?cid=<?php echo $crd['cid']; ?>"><img class="card-img-top"
                        src="../admin/views/sb_assets/<?php echo $crd['image'] ?>" height="300px" width="358.01px"
                        alt="Card image cap"></a>
                  <?php }
                  ?>
                  <div class="card-body">
                    <h5 class="card-title"><b>Course Name&nbsp;&nbsp;:</b>&nbsp;&nbsp;
                      <?php echo $rd['cname']; ?>
                    </h5>
                  </div>
                </div>
                <?php
              }
            }
            ?>
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
      if (isset($_POST['btnc'])) {
        $name = $_POST['cid'];
        $result = mysqli_query($cn, "select * from course where cname='$name'  ");
        while ($r = mysqli_fetch_array($result)) {
          ?>
          <div class="card">
            <div class="card-body">
              <img class="card-img-top" src="../admin/views/sb_assets/<?php echo $r['image']; ?>" height="500px"
                alt="Card image cap">
              <p class="card-title"><b>Course Name:</b><br><a href="../details.php?cid=<?php echo $r['cid'] ?>">
                  <?php echo $r['cname']; ?>
                </a></br></br>
                <b>Course Descriation:</b><br>
                <?php echo $r['cdescri']; ?></br>
              <p class="card-title"><b>Related College Name:</b>
                <?php
                include("dbconfig.php");
                if (isset($_POST['btnc'])) {
                  $result = mysqli_query($cn, "select * from college_offer where cid=" . $r['cid']);
                  while ($r = mysqli_fetch_array($result)) {
                    ?>
                    <br>
                  <p><b><a href="<?php echo $r['urls']; ?>">
                        <?php echo $r['clgname']; ?>
                      </a></b></p>
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