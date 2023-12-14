<?php
include("dbconfig.php");
include("user_dasbord.php");

if (isset($_POST['btnsub'])){

    $um = $_POST['email'];
    $cr = $_POST['course'];

    $result = mysqli_query($cn, "insert into enquiry(umail,course) values('$um','$cr')") or die('error in inseting data');
    
    // header('location: user/enquiry.php');
}

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
        <div>
            <form method="post">
                <div for="user&course">
                    <label>
                        <h2>User Email</h2>
                    </label><br>
                    <textarea name="email" cols="30" rows="1"><?php echo $_SESSION['email'] ?></textarea><br><br><br><br>
                    <label>
                        <h2>Select course for enquiry</h2>
                    </label><br>
                    <div>                        
                        <?php
                        $course = mysqli_query($cn, "select * from course") or die("no data found");
                        ?>
                        <select name="course" style="border: none">
                            <?php while ($cr = mysqli_fetch_array($course)) { ?>
                                <option value="<?php echo $cr['cid']; ?>">
                                    <?php echo $cr['cname']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div>
                        <br><br><br>
                    </div>
                    <div>
                        <button type="submit" name="btnsub" class="btn btn-primary ">Enquiry</button><br>
                    </div>
                </div>
                <!-- <div>
                    <br><br><br>
                </div>
                <div for="message&subject">
                    <label>
                        <h2>Subject of enquiry</h2>
                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <h2>Message for enquiry</h2>
                    </label>
                    <br>
                    <input type="text" name="subject">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="message">
                </div> -->
            </form>
        </div>
    </main>
</body>

</html>