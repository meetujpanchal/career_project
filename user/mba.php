<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MBA INFOMATION</title>
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
    $result=mysqli_query($cn,"select * from course where cid='6'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='6'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='6'")or die("error in select query");
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
<h2 id="chp_overview_toc_3">Why Do MBA?</h2> 
<p>The simplest answer to this question is – to fast track your career. Given the fact that we are inhabiting a world where there is a cut-throat competition in business world and job market, one needs to be equipped with managerial skills and leadership qualities to be able to contribute to the organisation in more than one way. If you are an expert in a field, knowing how to manage a business will be an added advantage. MBA degree is the key assistant in setting up own business or in switching career. Listed below are a few <strong>advantages of MBA degree</strong>:</p> 
<ul> 
 <li>Better Career Opportunities</li> 
 <li>Higher Salary</li> 
 <li>Developing Industry Network</li> 
 <li>Develop Management Skills</li> 
 <li>Develop Leadership Qualities</li> 
 <li>Global Exposure of Business and Economy</li> 
 <li>Entrepreneurial Skill Development</li> 
</ul> 
<h2 id="chp_overview_toc_4">What are the Types of MBA Courses?</h2> 
<p>MBA course is available in various modes and formats. Traditionally, Full-Time MBA of two years duration has been the popular choice among management aspirants, however over the last few years, Executive MBA and Online MBA have gained immense popularity among aspirants owning to flexibility. Read below some key highlights of each type of MBA:</p> 
<ul> 
 <li><strong>Full-Time MBA:</strong> Full-Time is the regular MBA programme of two years duration. It is a residential programme which includes physical classes, live projects, semester wise assessment, summer internship and final placements. There are about <a href="https://www.shiksha.com/mba/colleges/mba-colleges-india">5000 Full Time MBA colleges in India</a>. Tuition fee ranges between INR 2 lakh to INR 25 lakh on an average.</li> 
 <li><strong>Part-Time MBA:</strong> Part-Time MBA course is not a residential programme and best suited for working professionals who wish to learn key managerial skills. In Part-Time MBA programmes, there is no campus placement or internship opportunities. Both private colleges and government universities offer part Time MBA courses. There are about <a href="https://www.shiksha.com/mba/colleges/part-time-mba-colleges-india">300 Part-Time MBA colleges in India</a>. Course fee ranges between INR 1 lakh to 10 lakh. <span style="color: #e03e2d;">Read All About</span> <a href="https://www.shiksha.com/part-time-mba-pgdm-chp">Part Time MBA</a></li> 
 <li><strong>Distance MBA:</strong> In Distance MBA the candidate pursues the programme via remote communication and correspondence. The course is designed for people having limited time and resources as it is cheap and flexible. There is flexibility of completing the course in two to five year. There are over <a href="https://www.shiksha.com/mba/colleges/distance-correspondence-mba-colleges-india">490 Distance MBA colleges in India</a>. The most popular being IGNOU. <span style="color: #e03e2d;">Read All About</span> <a href="https://www.shiksha.com/distance-mba-mba-distance-education-chp">Distance MBA</a></li> 
 <li><strong>Online MBA:</strong> This is currently the most popular mode of MBA programme owing to convenience and flexibility. In Online MBA, lectures are imparted through video conferencing and the notes, tests, assessments are shared in Learning Management System (LMS). There are no physical classes in Online MBA, thus one can pursue a course in one city while living in another. There is also no boundation of attending classes, as the lectures are recorded and saved in the LMS. There are about <a href="https://www.shiksha.com/mba/colleges/online-mba-colleges-india">170 Online MBA colleges in India</a> which are mostly private institutions. <span style="color: #e03e2d;">Read All About </span><a href="https://www.shiksha.com/online-mba-pgdm-chp">Online MBA</a></li> 
 <li><strong>Executive MBA:</strong> This programme is exclusively designed for working professionals with more than five years of work experience. The curriculum is similar to Full-Time MBA but it is of a shorter duration (15 to 19 months). Executive MBA programmes are expensive and some companies sponsorship facility to candidates. There are about <a href="https://www.shiksha.com/business-management-studies/colleges/executive-mba-colleges-india">440 Executive MBA Colleges in India</a>. <span style="color: #e03e2d;">Read All About</span> <a href="https://www.shiksha.com/executive-mba-chp">Executive MBA</a></li> 
 <li><strong>5 year-Integrated MBA:</strong> This is a five-year dual degree course which includes UG and PG degree. Integrated MBA degree can be pursued after class 12. So, candidates who choose management as their choice of career early on can opt for Integrated MBA which is a <strong>BBA+MBA</strong> or <strong>BTech+MBA</strong> programme. The Integrated MBA programme is offered by top institutes such as <a href="https://www.shiksha.com/college/iim-rohtak-indian-institute-of-management-32736">IIM Rohtak</a>,<a href="https://www.shiksha.com/college/iim-indore-indian-institute-of-management-29623"> IIM Indore</a>,<a href="https://www.shiksha.com/college/iim-ranchi-indian-institute-of-management-jharkhand-32728"> IIM Ranchi</a>, <a href="https://www.shiksha.com/college/iim-jammu-indian-institute-of-management-49179">IIM Jammu</a>, <a href="https://www.shiksha.com/college/iim-gaya-indian-institute-of-management-bodh-gaya-49314">IIM Bodhgaya</a>, <a href="https://www.shiksha.com/university/nmims-university-mumbai-52743">NMIMS</a>, <a href="https://www.shiksha.com/university/xim-university-bhubaneswar-47718">Xavier University</a> and <a href="https://www.shiksha.com/university/nirma-university-ahmedabad-30302">Nirma University</a> among others. <span style="color: #e03e2d;">Read All About</span> <a href="https://www.shiksha.com/bba/articles/integrated-mba-programmes-in-india-blogId-15044">Integrated MBA</a></li> 
</ul> 
<p><span style="color: #e03e2d;">Also Read:</span> <a href="https://www.shiksha.com/bba/articles/get-admission-in-iim-after-class-12-blogId-5845">Get Admission in IIMs After Class 12</a></p> 
<h2 id="chp_overview_toc_5">MBA Abroad</h2> 
<p>To pursue <strong>MBA abroad</strong>, candidates have to take a slightly different route from the traditional one. They have to appear for Graduate Management Aptitude Test (<strong>GMAT</strong>) and language proficiency tests Test of English as a Foreign Language <strong>(TOEFL</strong>) and International English Language Testing System (<strong>IELTS</strong>) for MBA abroad admission. Academic qualification for MBA abroad is same as that of domestic programmes, i.e. 50 per cent aggregate in graduation or equivalent from a recognised university. Work experience of three to five years is required for most of the MBA courses abroad.</p> 
<p><strong>Pursuing MBA abroad is a costly</strong>. Total expense of the course can go up to <strong>INR&nbsp;80 lakh to 1 crore</strong>. Most <strong>popular countries for MBA abroad</strong> are UK, USA, Canada, Australia, Germany and New Zealand.</p> 
<h4><span style="background-color: #fbeeb8;"><span style="color: #e03e2d;">Know all about MBA abroad and</span> <a style="background-color: #fbeeb8;" href="https://studyabroad.shiksha.com/exams/gmat">GMAT</a> </span></h4> 
<div class="cdcms_courses"> 
 <div class="table-responsive"> 
  
<h3 style="text-align: justify;" id="chp_overview_toc_5_0">BCA Course Offered Colleges</h3> 
<table> 
 <thead>
    <?php
    $c=mysqli_query($cn,"Select * from college_offer where cid='6' ")or die("error");
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
<h2 id="chp_overview_toc_6">MBA Eligibility Criteria</h2> 
  <p>Full-time MBA eligibility criteria are as follows:&nbsp;</p> 
  <ul> 
   <li> <p>The basic eligibility criteria for MBA (full-time) is <strong>graduation in any discipline</strong> or equivalent from a recognised university</p> </li> 
   <li> <p>Most of the institutes follow the minimum score criteria in Graduation which is 50 per cent in average or equivalent</p> </li> 
   <li> <p>For Reserved category students, the minimum score is 45 per cent in aggregate</p> </li> 
   <li> <p>Final-year graduation candidates are also eligible to apply for MBA, provided they present the proof of completion of Graduation degree within the duration specified by the institute</p> </li> 
   <li>Professionals with CA/CS/ICWAI and other degrees can also pursue MBA</li> 
  </ul> 
  <strong>MBA Skillset</strong> 
  <p>A manager is expected to lead a team of professionals hence the most important skills for a successful manager are good communication and leadership qualities. Take a look at some of the <strong>skills required for MBA/PGDM,</strong> below:</p> 
  <table style="width: 100%; height: 100%;"> 
   <tbody> 
    <tr> 
     <th colspan="2"> <p>Full-time MBA: Required Skillset</p> </th> 
    </tr> 
    <tr> 
     <td> <p>Business acumen</p> </td> 
     <td> <p>Good communication skills</p> </td> 
    </tr> 
    <tr> 
     <td> <p>Problem-solving Skills</p> </td> 
     <td> <p>Management skills</p> </td> 
    </tr> 
    <tr> 
     <td> <p>Strong mathematical skills</p> </td> 
     <td> <p>Research oriented</p> </td> 
    </tr> 
    <tr> 
     <td> <p>Analytical thinking</p> </td> 
     <td> <p>Leadership qualities</p> </td> 
    </tr> 
    <tr> 
     <td> <p>Eye for detail</p> </td> 
     <td> <p>Goal-oriented &amp; ability to work under pressure</p> </td> 
    </tr> 
   </tbody> 
  </table> 
</form>
</body>
</html>
 