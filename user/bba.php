<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BBA INFOMATION</title>
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
    $result=mysqli_query($cn,"select * from course where cid='2'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='2'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='2'")or die("error in select query");
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
<h2 id="chp_overview_toc_1">BBA Course: Key Highlights</h2> 
<ul> 
 <li>BBA is a popular undergraduate course.</li> 
 <li>Students from all three fields, i.e. Science, Commerce and Arts can pursue the course.</li> 
 <li>A full-time BBA is a three-year course divided into six semesters. However, there are various dual degree BBA courses such as BBA LLB and Integrated MBA which are five-year duration courses.</li> 
 <li>Admissions to BBA are provided on the basis of merit as well as entrance exam scores.</li> 
 <li>BBA can be pursued in full-time, part-time, correspondence or online modes of education. BBA full-time is the most popular among all.&nbsp;</li> 
 <li>Students can pursue the BBA course after completing Class 12.</li> 
</ul> 
<h2 id="chp_overview_toc_2">Why Do BBA?</h2> 
<p>For students who wish to build a career in the management or business fields after Class 12, BBA is the perfect option. With the cut-throat competition in the business and corporate world, one needs to have strong leadership and managerial skills if one wishes to have a flourishing career in the field. A student who pursues BBA after Class 12 will have a wide range of job opportunities available to him/her. BBA graduates can also opt for higher studies such as <a href="https://www.shiksha.com/mba-masters-of-business-administration-chp">MBA</a> to fast track their career in the management and business field. Here are a few reasons why should one pursue BBA course:</p> 
<ul> 
 <li>A stepping stone in the careers of students who wish to excel in the business and management world.</li> 
 <li>Better career opportunities.</li> 
 <li>Good salary.</li> 
 <li>A better understanding of market requirements and various global trends that is required for different careers in this field.</li> 
 <li>BBA course will impart the knowledge required to study further in the same field.</li> 
 <li>Develop leadership, managerial, entrepreneurial and people skills.</li> 
</ul> 
 
<h3 style="text-align: justify;" id="chp_overview_toc_5_0">BBA Course Offered Colleges</h3> 
<table> 
 <thead>
    <?php
    $c=mysqli_query($cn,"Select * from college_offer where cid='2' ")or die("error");
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
   <td> <?php echo $r['clgname'];?></a></p> </td> 
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
<h2 id="chp_overview_toc_3">Types of BBA</h2> 
<p>The BBA course is available across various modes of education which cater to different types of BBA aspirants. Students can pursue the course in full-time mode, distance mode and online mode. A full-time BBA course is the most popular choice for BBA aspirants but online BBA has become increasingly popular in the last few years.</p> 
<div class="photo-widget-full"> 
 <div class="figure"> 
  <picture> 
   <source srcset="https://images.shiksha.com/mediadata/images/articles/1634802989phpwwY7xw_480x360.jpeg" media="(max-width: 500px)"> 
   <img style="display: block; margin-left: auto; margin-right: auto;" src="https://images.shiksha.com/mediadata/images/articles/1634802989phpwwY7xw.jpeg" alt="Types of BBA" width="638" height="400"> 
  </picture> 
 </div> 
 <p><strong class="_img-caption">Types of BBA</strong></p> 
</div> 
<p>Read below to know more about the types of BBA:</p> 
<ul> 
 <li><strong>Full-time BBA:&nbsp;</strong>A full-time BBA is a three-year duration course spread across six semesters. As mentioned above, the full-time BBA is the most sought-after choice for BBA aspirants. The programme includes physical classrooms, assessments, internships and final placements. There are approximately 4600 full-time BBA colleges in India. The average course fee ranges between INR 3 lakh to INR 6 lakh.&nbsp;</li> 
 <li><strong>Part-time BBA:&nbsp;</strong>Part-time BBA is just like the regular BBA but the difference is the time of the classes. The course is also a three-year duration course but the classes for part-time BBA are conducted in evenings or weekends. Part-time BBA is best suited for working professionals who wish to study along with their job. There are approximately 30 part-time BBA colleges in India. The average course fee ranges between INR 50,000 to INR 60,000.&nbsp;</li> 
 <li><strong>Distance/Correspondence BBA:&nbsp;</strong>The difference between a regular BBA and distance BBA is that unlike a regular BBA programme there is no physical classroom present in distance BBA. The candidates can pursue the career through remote communication and correspondence. The distance BBA is cheap and flexible and is best suited for those who cannot pursue a regular BBA due to some reason. There are about 250 distance BBA colleges in India. The average course fee ranges between INR 45,000 to INR 60,000.</li> 
 <li><strong>Online BBA:&nbsp;</strong>Online BBA has gained prominence in recent years. The aim was to provide the students with the opportunity to pursue the BBA course via a virtual education system. There are no physical classrooms or interactions and the lectures are held using online video conferencing. The notes and study materials are shared on the internet through various mediums. There are about 50 online BBA colleges in India and the average course fee is between the range of INR 27,000 – INR 40,000.</li> 
</ul> 
  
</form>
</body>
</html>
 