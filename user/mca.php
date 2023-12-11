<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MCA INFOMATION</title>
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
    
    
    <link data-chunk="courseHomePage" rel="preload" as="style" href="https://js.shiksha.ws/pwa/public/js/courseHomePage.9d2569d46a043a72ffdd.css">
    
    <!-- <link rel="stylesheet" type="text/css" id="shkCmn"> -->
    
    <link data-chunk="courseHomePage" rel="stylesheet" href="https://js.shiksha.ws/pwa/public/js/courseHomePage.9d2569d46a043a72ffdd.css">
    <script async="" src="https://a.quora.com/qevents.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script defer="" src="//www.googletagmanager.com/gtm.js?id=GTM-5FCGK6"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script></head>
<body id="wrapperMainForCompleteShiksha" class="lazyLoad">
    <div class="chpl2desk"><div class="l2--menu"><div class="l2--menu_inner"><ul class="menuItemsContainerList"><li><a  class="l2--menu_link l2active ripple dark" data-name="Overview" href="index.php">Home</a></li><li><a  class="l2--menu_link ripple dark" data-name="Syllabus" href="viewmorecourse.php">Course</a></li><li><a  class="l2--menu_link ripple dark" data-name="Popular Colleges" href="viewmorecollege.php"> Colleges</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li style="text-align: right;"><?php
    include("dbconfig.php");
    $result=mysqli_query($cn,"select * from course where cid='5'")or die("error in select query");
    if(mysqli_num_rows($result)>0){
        while($r=mysqli_fetch_array($result)){?>
            <h2 style="text-align: right;">
            <?php echo $r['cname'];?>&nbsp;</h2> 
            <?php
        }
    }
        ?></li></ul></div></div></div></section></div>
             <?php
    include("dbconfig.php");
    $result=mysqli_query($cn,"select * from course where cid='5' ")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='5'")or die("error in select query");
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

<h3 style="text-align: justify;" id="chp_overview_toc_5_0">MCA Course Offered Colleges</h3> 
<table> 
 <thead>
    <?php
    $c=mysqli_query($cn,"Select * from college_offer where cid='5' ")or die("error");
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
</form>
<p><strong>&nbsp;</strong></p></div></div></div></div></section><section id="section_2"><div class="_container"><h2 class="tbSec2 ">MCA: Types of Job profiles and Top recruiters</h2><div class="_subcontainer"><div id="wikkiContents_homePage_2" class="wikkiContents"><div><p>There is no dearth of lucrative job opportunities for MCA graduates. A candidate with a master’s degree in computer applications along with the right amount of relevant work experience, skill set and caliber can easily find great job opportunities at leading IT firms (both private and government) across India and abroad</p> 
<p><strong>Some of the top job profiles for MCA graduates are:</strong></p> 
<table> 
 <tbody> 
  <tr> 
   <td> <p><strong>App Developer</strong></p> </td> 
   <td> <p>App developers are individuals designing, building and maintaining mobile application for android, iOS, windows, blackberry platforms etc. &nbsp;&nbsp;</p> <p>&nbsp;</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Business Analyst</strong></p> </td> 
   <td> <p>A Business analyst typically mentors people aiming to start a business of their own. &nbsp;</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Database Engineer</strong></p> </td> 
   <td> <p>Database engineers are hired by computer systems companies with an aim to design and monitor complex databases. The role revolves around ensuring the operation, validity and relevancy of the data.</p> <p>&nbsp;</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Ethical Hacker</strong></p> </td> 
   <td> <p>Ethical hackers are experts who access a network or computer system on behalf of its owner to uncover security vulnerabilities that a malicious hacker could possibly exploit.</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Hardware Engineer</strong></p> </td> 
   <td> <p>Hardware engineers install and test systems to ensure proper functioning of the internet. These folks are also involved in the testing and production of hardware equipment.</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Manual Tester</strong></p> </td> 
   <td> <p>As the name suggests, manual testers physically test software for defects. These individuals are required to play the role of an end user who makes use of almost all the features of the application to ensure behaving accurately.</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Technical Writers</strong></p> </td> 
   <td> <p>Being a technical writer, one is expected to write technical documents like product description, design specifications, user manuals and guides etc.</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Trouble-shooters</strong></p> </td> 
   <td> <p>Troubleshooters are experts who ensure that technology - both hardware and software - come handy to those who need it. In case of an issue, they resolve the same to make sure that projects are delivered on time</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Social Media Handler</strong></p> </td> 
   <td> <p>Companies hire social media specialist to handle their popularity and presence amongst people through the virtual world.</p> </td> 
  </tr> 
  <tr> 
   <td> <p><strong>Web Designer/Developer</strong></p> </td> 
   <td> <p>Web developers/designers are mainly responsible for constructing a website. With a creative mind and well versed software skills, these individuals develop and design World Wide Web applications, HTML, Photoshop, Flash etc.</p> <p>&nbsp;</p> </td> 
  </tr> 
 </tbody> 
</table> 

</body>
</html>
 