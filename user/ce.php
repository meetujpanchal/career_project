<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Computer Science Engineering  INFOMATION</title>
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
    <link rel="stylesheet" href="../css/sk.css">
    
    <link data-chunk="courseHomePage" rel="stylesheet" href="https://js.shiksha.ws/pwa/public/js/courseHomePage.9d2569d46a043a72ffdd.css">
    <script async="" src="https://a.quora.com/qevents.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script defer="" src="//www.googletagmanager.com/gtm.js?id=GTM-5FCGK6"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script></head>
<body id="wrapperMainForCompleteShiksha" class="lazyLoad">
    <div class="chpl2desk"><div class="l2--menu"><div class="l2--menu_inner"><ul class="menuItemsContainerList"><li><a  class="l2--menu_link l2active ripple dark" data-name="Overview" href="index.php">Home</a></li><li><a  class="l2--menu_link ripple dark" data-name="Syllabus" href="viewmorecourse.php">Course</a></li><li><a  class="l2--menu_link ripple dark" data-name="Popular Colleges" href="viewmorecollege.php"> Colleges</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li style="text-align: right;"><?php
    include("dbconfig.php");
    $result=mysqli_query($cn,"select * from course where cid='9'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='9'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='9'")or die("error in select query");
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
<h2 id="chp_overview_toc_0"><strong><span data-preserver-spaces="true">Career Scope of Computer Science Engineering&nbsp;</span></strong></h2> 
<p><span data-preserver-spaces="true">CSE is one of the engineering specialisations. However, candidates pursuing this programme have the option of further choosing amongst various other specialisations like telecommunication, web designing, computer hardware and software implementation and maintenance, etc.</span></p> 
<p><span data-preserver-spaces="true">These professionals can work as a data scientist, computer programmer, systems analyst, hardware engineer, software developer, system engineer, IT consultant, system designer, networking engineer, web developer, database administrator, mobility tester, programmer, e-commerce specialist, and software tester.</span></p> 
<div id="div-gpt-ad-1592410728235-0" style="height:76px; width=600px"  class="wiki-dfp"> 
 <script>if(typeof googletag != 'undefined'){googletag.cmd.push(function() { googletag.display('div-gpt-ad-1592410728235-0'); });}</script> 
</div> 
<div id="div-gpt-ad-1592410725679-0" style="height:76px; width=600px"  class="wiki-dfp"> 
 <script>if(typeof googletag != 'undefined'){googletag.cmd.push(function() { googletag.display('div-gpt-ad-1592410725679-0'); });}</script> 
</div> 
<h2 id="chp_overview_toc_1">Computer Science Engineering: Eligibility Criteria</h2> 
<p><span data-preserver-spaces="true">Find below the basic eligibility requirement to pursue a Computer Science Engineering programme at the UG and PG level:</span></p> 
<ul> 
 <li><strong><span data-preserver-spaces="true">Eligibility requirements for BTech in CSE</span></strong><span data-preserver-spaces="true">: Aspirants should have passed the Class 12 exam from a recognized board with Physics, Chemistry, and Mathematics as core subjects. Besides this candidates should also have secured minimum aggregate marks of 60% in the above subjects combined.</span></li> 
 <li><strong><span data-preserver-spaces="true">Eligibility requirements for MTech in CSE:</span></strong><span data-preserver-spaces="true"> Aspirants must have completed a BTech degree in the same specialization with a passing percentage.</span></li> 
</ul> 
<h2 id="chp_overview_toc_2">Skills Required For Computer Science Engineering</h2> 
<p>To pursue a Computer Science Engineering programme, candidates should possess the right set of skills to acquire success in the future. Following are the required skillset for pursuing CSE courses:</p> 
<table style="height: 140px;"> 
 <tbody> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 560.667px;"> <p>Analytical skills</p> </td> 
   <td style="height: 28px; width: 486px;"> <p>Problem-solving skills</p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 560.667px;"> <p>Critical thinking</p> </td> 
   <td style="height: 28px; width: 486px;"> <p>Creativity</p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 560.667px;"> <p>Good Programming Skills</p> </td> 
   <td style="height: 28px; width: 486px;"> <p>Strong Data Structures and Algorithms skills</p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 560.667px;"> <p>Basic web development knowledge</p> </td> 
   <td style="height: 28px; width: 486px;"> <p>Basics of Machine Learning</p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 560.667px;"> <p>Basics of security, vulnerabilities, and cryptography</p> </td> 
   <td style="height: 28px; width: 486px;"> <p>Ability to grasp the knowledge quickly</p> </td> 
  </tr> 
 </tbody> 
</table> 
<h2 style="text-align: justify;" id="chp_overview_toc_5">Top Computer Science Engineering Colleges in India: Fees and Salary</h2> 
<p style="text-align: justify;">A number of colleges offer Computer Science Engineering admission and hence sometimes it becomes difficult to choose the best college for admission. Here is the list of some popular BCA colleges in India along with the total fees and average salary offered:</p> 
<h3 style="text-align: justify;" id="chp_overview_toc_5_0">Computer Science Engineering Course Offered Colleges</h3> 
<table> 
 <thead>
    <?php
    $c=mysqli_query($cn,"Select * from college_offer where cid='9' ")or die("error");
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
   <td> <p><?php echo $r['clgname'];?></a></p> </td> 
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
<h2 id="chp_overview_toc_5"><span data-preserver-spaces="true">Job Profiles After Computer Science Engineering</span></h2> 
<p>The boom in the CSE sector has led to lucrative career opportunities for professionals. With the ever-increasing employment opportunities in this field, the demand for CSE experts has increased. Computer Science Engineers after completing their course, generally get job opportunities across various industries like IT/Software Companies, Academic Institutions, Sales and Marketing firms, Journalism, editing and content, Engineering firms, etc.&nbsp;</p> 
<table style="height: 413px;"> 
 <tbody> 
  <tr style="height: 28px;"> 
   <th style="height: 28px; width: 136.667px;"> <p><strong>Job Profile</strong></p> </th> 
   <th style="height: 28px; width: 910px;"> <p><strong>Role</strong></p> </th> 
  </tr> 
  <tr style="height: 49px;"> 
   <td style="height: 49px; width: 136.667px;"> <p>System Database Administrator</p> </td> 
   <td style="height: 49px; width: 910px;"> <p>System database administrator typically oversees the security, performance, and integrity of the database. This also includes planning the structure and troubleshooting issues.</p> </td> 
  </tr> 
  <tr style="height: 49px;"> 
   <td style="height: 49px; width: 136.667px;"> <p>Computer Programmer</p> </td> 
   <td style="height: 49px; width: 910px;"> <p>Computer programmers create the code for software applications and operating systems. The code created helps computer applications to run on a computer.</p> </td> 
  </tr> 
  <tr style="height: 49px;"> 
   <td style="height: 49px; width: 136.667px;"> <p>Engineering Support Specialist</p> </td> 
   <td style="height: 49px; width: 910px;"> <p>Engineering support specialist provides technical support and assistance to consumers and businesses in issues related to technical, hardware and software systems.</p> </td> 
  </tr> 
  <tr style="height: 49px;"> 
   <td style="height: 49px; width: 136.667px;"> <p>Data Warehouse Analyst</p> </td> 
   <td style="height: 49px; width: 910px;"> <p>A data warehouse analyst collects, analyzes, mines and helps the business leverage the information stored in&nbsp;data warehouses.</p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 136.667px;"> <p>System Designer</p> </td> 
   <td style="height: 28px; width: 910px;"> <p>The role of a system designer <em>is to</em> define the architecture, interfaces, and data for a&nbsp;system<em>.</em></p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 136.667px;"> <p>Software Developer</p> </td> 
   <td style="height: 28px; width: 910px;"> <p>The role of software developers is to develop applications that enable people to perform specific tasks on a computer or another device.</p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 136.667px;"> <p>Software Engineer</p> </td> 
   <td style="height: 28px; width: 910px;"> <p>Software engineer design, develop, maintain, test, and evaluate computer&nbsp;software.</p> </td> 
  </tr> 
  <tr style="height: 49px;"> 
   <td style="height: 49px; width: 136.667px;"> <p>Lecturer/Professor</p> </td> 
   <td style="height: 49px; width: 910px;"> <p>A computer science lecturer or professor would impart knowledge of the subject. The role will also include teaching students about the nuances of computer applications and designs applicable in the field.</p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 136.667px;"> <p>Computer Operator</p> </td> 
   <td style="height: 28px; width: 910px;"> <p>The role of a computer operator is to maintain a logbook, check viruses, upgrade software and carry out basic computer tasks.</p> </td> 
  </tr> 
  <tr style="height: 28px;"> 
   <td style="height: 28px; width: 136.667px;"> <p>Research Analyst</p> </td> 
   <td style="height: 28px; width: 910px;"> <p>Research analysts conduct surveys, document data, collect information via the internet and conduct research.</p> </td> 
  </tr> 
 </tbody> 
</table> 
</form>
</body>
</html>
 