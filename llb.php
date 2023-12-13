<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LLB INFOMATION</title>
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
    
    <link rel="stylesheet" href="css/sk.css">

    <!-- <link rel="stylesheet" type="text/css" id="shkCmn"> -->
    
    <link data-chunk="courseHomePage" rel="stylesheet" href="https://js.shiksha.ws/pwa/public/js/courseHomePage.9d2569d46a043a72ffdd.css">
    <script async="" src="https://a.quora.com/qevents.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script defer="" src="//www.googletagmanager.com/gtm.js?id=GTM-5FCGK6"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script></head>
<body id="wrapperMainForCompleteShiksha" class="lazyLoad">
    <div class="chpl2desk"><div class="l2--menu"><div class="l2--menu_inner"><ul class="menuItemsContainerList"><li><a  class="l2--menu_link l2active ripple dark" data-name="Overview" href="index.php">Home</a></li><li><a  class="l2--menu_link ripple dark" data-name="Syllabus" href="viewmorecourse.php">Course</a></li><li><a  class="l2--menu_link ripple dark" data-name="Popular Colleges" href="viewmorecollege.php"> Colleges</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li style="text-align: right;"><?php
    include("dbconfig.php");
    $result=mysqli_query($cn,"select * from course where cid='14'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='14'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='14'")or die("error in select query");
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
<h2 id="chp_overview_toc_1">Three-year LLB Eligibility Criteria</h2> 
<p>Candidates who want to pursue the LLB course should fulfil certain requirements in order to be eligible. Below are the eligibility criteria for&nbsp; three-year LLB courses as mentioned by BCI :</p> 
<ul> 
 <li>Candidates need to be graduates i.e. either they should have passed a bachelor degree of three-years or four-years duration in any subject/ discipline in order to pursue an LLB course.</li> 
 <li>Apart from this, some colleges also fix a minimum percentage requirement that candidates need to fulfil in order to secure admission in the three-year LLB course offered by them. The (minimum) percentage requirement for General category candidates ranges from 45% to 55% and that for SC/ST category candidates ranges between 35% to 45%.</li> 
</ul> 
<h2 id="chp_overview_toc_3">LLB Skillset</h2> 
<p>LLB is a popular course offered as part of the law stream. Law as a career choice is extremely demanding and requires aspirants to be thorough with their subject and be willing to work long hours. Thus, candidates planning to join this field need to possess the below-mentioned skill set.</p> 
<table> 
 <tbody> 
  <tr> 
   <td> <p>Fluency and clarity of speech</p> </td> 
   <td> <p>Confidence</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Objectivity</p> </td> 
   <td> <p>Interest in Research</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Intellect</p> </td> 
   <td> <p>Integrity</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Convincing power</p> </td> 
   <td> <p>Ability to assimilate as well as analyse facts</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Ability to argue on a topic</p> </td> 
   <td> <p>Interest in detail</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Persuasiveness</p> </td> 
   <td> <p>Good judgement of situation/people</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Mental and physical stamina</p> </td> 
   <td> <p>Good presentation skills</p> </td> 
  </tr> 
 </tbody> 
</table>  

<div id="div-gpt-ad-1592410715730-0" style="height: 76px; background: rgb(255, 255, 255); width: 600px;" class="wiki-dfp"> 
 <script>if(typeof googletag != 'undefined'){googletag.cmd.push(function() { googletag.display('div-gpt-ad-1592410715730-0'); });}</script> 
</div> 
<div id="div-gpt-ad-1592410721982-0" style="height: 76px; background: rgb(255, 255, 255); width: 600px;" class="wiki-dfp"> 
 <script>if(typeof googletag != 'undefined'){googletag.cmd.push(function() { googletag.display('div-gpt-ad-1592410721982-0'); });}</script> 
</div> 

<h2 style="text-align: justify;" id="chp_overview_toc_5">Top LLB Colleges in India: Fees and Salary</h2> 
<p style="text-align: justify;">A number of colleges offer LLB admission and hence sometimes it becomes difficult to choose the best college for admission. Here is the list of some popular LLB colleges in India along with the total fees and average salary offered:</p> 
<h3 style="text-align: justify;" id="chp_overview_toc_5_0">LLB Course Offered Colleges</h3> 
<table> 
 <thead>
    <?php
    $c=mysqli_query($cn,"Select * from college_offer where cid='14' ")or die("error");
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
<h2 id="chp_overview_toc_5">Three-year LLB Jobs and Career Opportunities</h2> 
<p>There are a plethora of job opportunities available to candidates after they complete an LLB degree. Candidates looking forward to practising law in India, need to clear <a href="https://www.shiksha.com/law/aibe-exam">All India Bar Exam (AIBE)</a> that is conducted by BCI. On clearing, AIBE exam lawyers are awarded a ‘Certificate of Practice’ which is mandatory for practising the profession as an advocate in India.</p> 
<p>Some popular job profiles that candidates can pursue after securing an LLB degree are mentioned below:</p> 
<ul> 
 <li><strong>Lawyer:</strong> In this job profile, one needs to advise and represent clients in civil as well as criminal cases. Lawyers present cases in the court of law and take part in all proceedings and hearings.</li> 
 <li><strong>Legal </strong><strong>Advisor:</strong> Candidates opting to work in such a job profile are also lawyers who specialise in a specific field of law. Legal advisors are usually hired by government as well as large organisations/ companies. The main task of a legal advisor is to protect their clients from any legal implication or consequence.</li> 
 <li><strong>Advocate:</strong> In such a job profile, one needs to do a lot of research work to gather factual data as well as physical evidence to support their claim. Apart from this, other responsibilities allocated to advocates include scrutinising and drafting contracts.</li> 
 <li><strong>Solicitor: </strong>A solicitor is an individual who is specialised in a specific area of law like tax, litigation, family or property. Solicitors offer legal advice to private as well as commercial clients.</li> 
 <li><strong>Teacher </strong><strong>or Lecturer:</strong> After completing an LLB degree, candidates can also teach law at the college or university level.</li> 
</ul> 
</form>
</body>
</html>
 