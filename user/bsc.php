<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BSC INFOMATION</title>
    <meta name="keywords" content="Shiksha, education, colleges,universities, institutes,career, career options, career prospects,engineering, mba, medical, mbbs,study abroad, foreign education, college, university, institute,courses, coaching, technical education, higher education,forum, community, education career experts,ask experts, admissions,results, events,scholarships"><meta id="metaDescription" name="description" content="BCA: Full Form, Subjects, Course, Eligibility, Fees, Scope, Jobs, Admission, Top Colleges 2021"><link id="canonicalUrl" rel="canonical" href="https://www.shiksha.com/bca-bachelor-of-computer-applications-chp"><meta property="og:title" content="BCA - Full Form, Course, Subjects, Syllabus, Colleges, Salary &amp; Jobs 2021"><meta property="og:url" content="https://www.shiksha.com/bca-bachelor-of-computer-applications-chp"><meta property="og:image" content="https://images.shiksha.ws/public/images/shareThumbnail.jpg"><meta property="fb:app_id" content="185428988177601">
    <meta name="copyright" content="Shiksha.com">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="preconnect" href="//js.shiksha.ws">
    <link rel="preconnect" href="//css.shiksha.ws">
    <link rel="preconnect" href="//images.shiksha.ws">
    <link rel="preconnect" href="//images.shiksha.com">
    <link rel="dns-prefetch" href="//track.shiksha.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//www.googletagservices.com">
    <link rel="preconnect" href="//js.shiksha.ws">
    <link rel="preconnect" href="//css.shiksha.ws">
    <link rel="preconnect" href="//images.shiksha.com">

    <link rel="preconnect" href="//www.google-analytics.com">
    <link rel="preconnect" href="//www.googletagmanager.com">
    <link rel="preconnect" href="//www.googletagservices.com">
    <link rel="preconnect" href="//www.gstatic.com">

    
        <link rel="shortcut icon" href="https://images.shiksha.ws/pwa/public/images/apple-touch-icon-v1.png">
        <link rel="stylesheet" href="../css/sk.css">
    
    
    <link data-chunk="courseHomePage" rel="preload" as="style" href="https://js.shiksha.ws/pwa/public/js/courseHomePage.9d2569d46a043a72ffdd.css">
    
    <!-- <link rel="stylesheet" type="text/css" id="shkCmn"> -->
    
    <link data-chunk="courseHomePage" rel="stylesheet" href="https://js.shiksha.ws/pwa/public/js/courseHomePage.9d2569d46a043a72ffdd.css">
    <script async="" src="https://a.quora.com/qevents.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script defer="" src="//www.googletagmanager.com/gtm.js?id=GTM-5FCGK6"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script></head>
<body id="wrapperMainForCompleteShiksha" class="lazyLoad">
    <div class="chpl2desk"><div class="l2--menu"><div class="l2--menu_inner"><ul class="menuItemsContainerList"><li><a  class="l2--menu_link l2active ripple dark" data-name="Overview" href="index.php">Home</a></li><li><a  class="l2--menu_link ripple dark" data-name="Syllabus" href="viewmorecourse.php">Course</a></li><li><a  class="l2--menu_link ripple dark" data-name="Popular Colleges" href="viewmorecollege.php"> Colleges</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li style="text-align: right;"><?php
    include("dbconfig.php");
    $result=mysqli_query($cn,"select * from course where cid='4'")or die("error in select query");
    if(mysqli_num_rows($result)>0){
        while($r=mysqli_fetch_array($result)){?>
            <h2 style="text-align: center;">
            <?php echo $r['cname'];?>&nbsp;</h2> 
            <?php
        }
    }
        ?></li></ul></div></div></div></section></div>
             <?php
    include("dbconfig.php");
    $result=mysqli_query($cn,"select * from course where cid='4'")or die("error in select query");
    if(mysqli_num_rows($result)>0){
        while($r=mysqli_fetch_array($result)){?>
            <div id="wikkiContents_homePage_0" class="wikkiContents"><div><p style="text-align: justify;">
            <?php echo $r['cdescri'];?>&nbsp;</p> 
            <?php
        }
    }
        ?>
</head>
<body>
<form method="POST">
    <?php
    include("dbconfig.php");
    $result=mysqli_query($cn,"select * from course where cid='4'")or die("error in select query");
    if(mysqli_num_rows($result)>0){
        while($r=mysqli_fetch_array($result)){?>
    <table class="table table-striped style_table" style="height: 180px; width: 1046px;" width="510"> 
 <tbody> 
  <tr> 
   <th style="width: 379px;"><strong>Particulars</strong></th> 
   <th style="width: 667px;">Details</th> 
  </tr> 
  <tr style="height: 20px;"> 
   <td style="height: 20px; width: 379px;"><strong>Course Name</strong></td> 
   <td style="height: 20px; width: 667px;"><?php echo $r['cname'];?></td> 
  </tr> 
  <tr style="height: 20px;"> 
   <td style="height: 20px; width: 379px;"><strong>Duration</strong></td> 
   <td style="height: 20px; width: 667px;"><?php echo $r['cduration'];?></td> 
  </tr>  
  <tr style="height: 20px;"> 
   <td style="height: 20px; width: 379px;"><strong>Average Course Fee</strong></td> 
   <td style="height: 20px; width: 667px;"><?php echo $r['cfees'];?></td> 
  </tr> 
  <tr style="height: 20px;"> 
   <td style="height: 20px; width: 379px;"><strong>Average Starting Salary</strong></td> 
   <td style="height: 20px; width: 667px;"><?php echo $r['avg_sal'];?></td> 
  </tr> 
  
 </tbody> 
</table> 
<?php
}
} 
?>  
<h2 style="text-align: justify;" id="chp_overview_toc_5">Top BSC Colleges in India: Fees and Salary</h2> 
<p style="text-align: justify;">A number of colleges offer BSC admission and hence sometimes it becomes difficult to choose the best college for admission. Here is the list of some popular BSC colleges in India along with the total fees and average salary offered:</p> 
<h3 style="text-align: justify;" id="chp_overview_toc_5_0">BSC Course Offered Colleges</h3> 
<table> 
 <thead>
    <?php
    $c=mysqli_query($cn,"Select * from college_offer where cid='4' ")or die("error");
    if(mysqli_num_rows($c)>0){?>
  <tr> 
   <th> <p>Colleges Name</p> </th> 
   <th> <p>Colleges ranked</p></th>
  </tr>
  </thead>
  <?php
     while($r=mysqli_fetch_array($c)){?>
  <tbody>
  <tr>
   <td> <p><a href="https://www.shiksha.com/college/loyola-college-nungambakkam-chennai-1108"><?php echo $r['clgname'];?></a></p> </td> 
   <td><?php echo $r['rates'];?></td> 
  </tr> 
 </tbody> 
 <?php } }else{ ?>
        <tr>
            <td>NO Recode Found</td>
        </tr>
     <?php }
    ?>
</table> 
<h2 id="chp_overview_toc_0">What is BSc?</h2> 
<p><span style="color: #000000;"><span style="font-family: Liberation Serif, serif;"><span style="font-size: medium;">A BSc programme can be further classified into two categories – BSc Honours and BSc General or Pass. The former focuses on one major subject area. The curriculum is designed to keep more focus on the Honours subject, and also includes subjects or papers from the elective subjects students opt for. The purpose of studying BSc Honours programme is to inculcate theoretical, practical and research skills among students.</span></span></span></p> 
<p><span style="color: #000000;"><span style="font-family: Liberation Serif, serif;"><span style="font-size: medium;">On the other hand, the BSc General programme provides basic knowledge of the major Science subjects to the students. The curriculum is slightly lesser rigorous, but it includes both the theoretical and practical components.</span></span></span></p> 
<p><span style="font-family: Liberation Serif, serif;"><span style="font-size: medium;"><span style="color: #000000;">The pedagogy of BSc programmes is a combination of theory and practical lessons. The BSc curriculum includes practical lessons which carry a considerable amount of weightage. To pass a semester, students need to pass both the theory as well practical exams. Subjects such as Physics, Chemistry, Biology and Mathematics form the core of the BSc degree. There are a plethora of specialisations and branches offered in the BSc course.</span></span></span></p> 
<div id="div-gpt-ad-1592410728235-0" style="height: 76px; background: rgb(255, 255, 255); width: 600px;" class="wiki-dfp"> 
 <script>if(typeof googletag != 'undefined'){googletag.cmd.push(function() { googletag.display('div-gpt-ad-1592410728235-0'); });}</script> 
</div> 
<div id="div-gpt-ad-1592410725679-0" style="height: 76px; background: rgb(255, 255, 255); width: 600px;" class="wiki-dfp"> 
 <script>if(typeof googletag != 'undefined'){googletag.cmd.push(function() { googletag.display('div-gpt-ad-1592410725679-0'); });}</script> 
</div> 
</body>
</html>
 