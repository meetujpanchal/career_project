<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MCOM INFOMATION</title>
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
    $result=mysqli_query($cn,"select * from course where cid='7'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='7'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='7'")or die("error in select query");
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
<h2 id="chp_overview_toc_1">MCom Eligibility Criteria</h2> 
<p>The eligibility criteria for MCom may differ from one college to another in terms of the total aggregate. Mentioned below are the general eligibility criteria for pursuing the MCom course:</p> 
<ul> 
 <li>The candidate must have secured a minimum of 50% aggregate in <a href="https://www.shiksha.com/b-com-chp">BCom or BCom (Honours)</a>, or equivalent from a recognised university.</li> 
 <li>Some universities also induct students who have completed <a href="https://www.shiksha.com/humanities-social-sciences/economics-chp">Economics (H)</a>, <a href="https://www.shiksha.com/bba-bachelor-of-business-administration-chp">BBA</a>, BFIA and BBE with a minimum score of minimum of 60% aggregate or equivalent.</li> 
 <li>Reserved category students are entitled to marks relaxation of up to 5%.</li> 
 <li>State-level universities also offer marks relaxation to home-state students.</li> 
</ul> 
<p><span style="color: #e03e2d;"><strong>Also Read:</strong></span> <a href="https://www.shiksha.com/accounting-commerce/colleges/m-com-colleges-india">Top MCom colleges in India</a></p> 
<h2 id="chp_overview_toc_2">MCom Specialisations</h2> 
<p>MCom covers a wide area for study and research and has many specializations to offer besides MCom (General) and MCom (Honours) such as:</p> 
<table style="width: 100%; height: 100%;"> 
 <tbody> 
  <tr> 
   <th colspan="2"> <p style="text-align: center;">List of MCom Specialisations&nbsp;</p> </th> 
  </tr> 
  <tr> 
   <td> <p>MCom (Taxation)</p> </td> 
   <td> <p>MCom (Economics)</p> </td> 
  </tr> 
  <tr> 
   <td> <p>MCom (Mathematics)</p> </td> 
   <td> <p>MCom (Accounting)</p> </td> 
  </tr> 
  <tr> 
   <td> <p>MCom (Accounting &amp; Finance)</p> </td> 
   <td> <p>MCom (Statistics)</p> </td> 
  </tr> 
  <tr> 
   <td> <p>MCom (Banking)</p> </td> 
   <td> <p>MCom (Finance)</p> </td> 
  </tr> 
  <tr> 
   <td> <p>MCom (Banking and Finance)</p> </td> 
   <td> <p>MCom (Finance &amp; Control)</p> </td> 
  </tr> 
  <tr> 
   <td> <p>MCom (Marketing)</p> </td> 
   <td> <p>MCom (E-Commerce)</p> </td> 
  </tr> 
  <tr> 
   <td> <p>MCom (Business Management)</p> </td> 
   <td> <p>MCom (Computer Application)</p> </td> 
  </tr> 
 </tbody> 
</table> 
<div id="div-gpt-ad-1592410715730-0" style="height: 76px; background: rgb(255, 255, 255); width: 600px;" class="wiki-dfp"> 
 <script>if(typeof googletag != 'undefined'){googletag.cmd.push(function() { googletag.display('div-gpt-ad-1592410715730-0'); });}</script> 
</div> 
<div id="div-gpt-ad-1592410721982-0" style="height: 76px; background: rgb(255, 255, 255); width: 600px;" class="wiki-dfp"> 
 <script>if(typeof googletag != 'undefined'){googletag.cmd.push(function() { googletag.display('div-gpt-ad-1592410721982-0'); });}</script> 
</div> 

<h2 style="text-align: justify;" id="chp_overview_toc_5">Top MCOM Colleges in India: Fees and Salary</h2> 
<p style="text-align: justify;">A number of colleges offer MCOM admission and hence sometimes it becomes difficult to choose the best college for admission. Here is the list of some popular MCOM colleges in India along with the total fees and average salary offered:</p> 
<h3 style="text-align: justify;" id="chp_overview_toc_5_0">MCOM Course Offered Colleges</h3> 
<table> 
 <thead>
    <?php
    $c=mysqli_query($cn,"Select * from college_offer where cid='7' ")or die("error");
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
<h2 id="chp_overview_toc_6">MCom Top Recruiters</h2> 
<p>Every business organisation, whether it is an international conglomerate or an NGO, requires commerce graduates in various capacities to run their finance and accounting departments. Banks and auditing firms hire MCom degree holders in large capacity. Top recruiters include banks, multinational companies, finance firms and auditing agencies.</p> 
<table style="width: 100%; height: 203px;"> 
 <tbody> 
  <tr style="height: 29px;"> 
   <th style="width: 99.9136%; height: 29px;" colspan="2"> <p>Top MCom Recruiters</p> </th> 
  </tr> 
  <tr style="height: 29px;"> 
   <td style="height: 29px; width: 49.8704%;"> <p>SBI</p> </td> 
   <td style="height: 29px; width: 50.0432%;"> <p>Punjab National Bank</p> </td> 
  </tr> 
  <tr style="height: 29px;"> 
   <td style="height: 29px; width: 49.8704%;"> <p>ICICI Bank</p> </td> 
   <td style="height: 29px; width: 50.0432%;"> <p>Citibank</p> </td> 
  </tr> 
  <tr style="height: 29px;"> 
   <td style="height: 29px; width: 49.8704%;"> <p>HDFC</p> </td> 
   <td style="height: 29px; width: 50.0432%;"> <p>PricewaterHouse Cooper</p> </td> 
  </tr> 
  <tr style="height: 29px;"> 
   <td style="height: 29px; width: 49.8704%;"> <p>RBS</p> </td> 
   <td style="height: 29px; width: 50.0432%;"> <p>Deloitte</p> </td> 
  </tr> 
  <tr style="height: 29px;"> 
   <td style="height: 29px; width: 49.8704%;"> <p>IndusInd Bank</p> </td> 
   <td style="height: 29px; width: 50.0432%;"> <p>KPMG</p> </td> 
  </tr> 
  <tr style="height: 29px;"> 
   <td style="height: 29px; width: 49.8704%;"> <p>Ernest &amp; Young</p> </td> 
   <td style="height: 29px; width: 50.0432%;"> <p>TFC</p> </td> 
  </tr> 
 </tbody> 
</table> 
</form>
</body>
</html>
 