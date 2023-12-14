<?php
include("silder.php");
include("dbconfig.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <main id="main" class="main">


        <div class="mx-5 mt-5 text-center">
            <p class=" bg-dark text-white p-2">User Enquiries</p>
            <table class="table">
                <?php
                $c = mysqli_query($cn, "Select * from enquiry") or die("error in select query");
                if (mysqli_num_rows($c) > 0) { ?>
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Course</th>
                            <th scope="col">Enquiry</th>
                        </tr>
                    </thead>
                    <?php
                    while ($r = mysqli_fetch_array($c)) { ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $r['eid']; ?>
                                </td>
                                <td>
                                    <?php echo $r['umail']; ?>
                                </td>
                                <td>
                                    <?php $cr = mysqli_query($cn, 'select * from course where cid = ' . $r['course']); ?>
                                    <?php $ccr = mysqli_fetch_array($cr); ?>                                    
                                    <?php echo $ccr['cname']; ?>
                                </td>
                                <!--  -->
                                <td>
                                    <div>
                                        <form action="mail/send.php" method="post">
                                            <input type="hidden" name="email" value="<?php echo $r['umail']; ?>">
                                            <input type="hidden" name="course" value="<?php echo $ccr['cname']; ?>">
                                            <input type="hidden" name="descri" value="<?php echo $ccr['cdescri']; ?>"> 
                                            <input type="hidden" name="contact" value="<?php echo $cont['mo_no']; ?>">                                            
                                            <div>
                                                <button class="btn btn-success" type="submit" name="send">Send Email</button>
                                            </div>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php }
                } else { ?>
                    <tr>
                        <td>NO Recode Found</td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>        
    </main>
</body>

</html>