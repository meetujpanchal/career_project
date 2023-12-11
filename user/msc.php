<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MSC INFOMATION</title>
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
    $result=mysqli_query($cn,"select * from course where cid='8'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='8'")or die("error in select query");
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
    $result=mysqli_query($cn,"select * from course where cid='8'")or die("error in select query");
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

<h2 id="chp_overview_toc_0">Required Skillset for MSc</h2> 
<p>Basic skills and traits that candidates aspiring to pursue an MSc degree course should possess are mentioned below:</p> 
<table> 
 <tbody> 
  <tr> 
   <th colspan="2"> <h2 style="text-align: center;"><strong>Skillset for MSc Aspirants</strong></h2> </th> 
  </tr> 
  <tr> 
   <td> <p>Patience</p> </td> 
   <td> <p>Determination</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Attention to detail and accuracy</p> </td> 
   <td> <p>Analytical skills</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Scientific skills</p> </td> 
   <td> <p>Ability to work in a team</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Observation skills</p> </td> 
   <td> <p>Research skills</p> </td> 
  </tr> 
  <tr> 
   <td> <p>Problem-solving skills</p> </td> 
   <td> <p>-</p> </td> 
  </tr> 
 </tbody> 
</table> 
<h2 id="chp_overview_toc_1">MSc: Eligibility Criteria</h2> 
<p>As already hinted above, all candidates need to possess a bachelor’s degree in Science from a recognised college/ university. Minimum marks that candidates need to secure in graduation in order to be eligible for an MSc course is usually 50 – 60%. However, the required percentage might change depending on the policy of a university or institute in which a candidate is applying. &nbsp;</p> 
<p><strong>Age bar</strong>: There is usually no age criteria to join MSc course.</p> 
<h3 style="text-align: justify;" id="chp_overview_toc_5_0">BCA Course Offered Colleges</h3> 
<table> 
 <thead>
    <?php
    $c=mysqli_query($cn,"Select * from college_offer where cid='8' ")or die("error");
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
<h2 style="text-align: justify;" id="chp_overview_toc_6">BCA Top Companies &amp; Jobs&nbsp;&nbsp;</h2> 
<p style="text-align: justify;">In the ever growing IT industry, the demand for BCA graduates is increasing rapidly. With a BCA degree, candidates can find lucrative job opportunities in private as well public sector.</p> 
<p style="text-align: justify;">Some of the leading IT companies recruiting BCA graduates include Oracle, IBM, Infosys and Wipro. Government organizations like the Indian Air Force(IAF), Indian Army, and India Navy hire a large number of computer professionals for their IT department.</p> 
<p style="text-align: justify;">Some of the job profiles that one can bag after completing a BCA programme is that of a:</p> 
<ul style="text-align: justify;"> 
 <li>System Engineer</li> 
 <li>Software Tester</li> 
 <li>Junior Programmer</li> 
 <li>Web Developer</li> 
 <li>System Administrator</li> 
 <li>Software Developer</li> 
</ul> 
<p style="text-align: justify;">As far as the salary is concerned, a fresher working for a leading MNC might get a salary ranging from INR 25,000 to INR 40,000 per month. However, it was reported that IT giants like Facebook, Microsoft etc pay a six figure salary to fresh graduates they hire.</p> 
<h3 style="text-align: justify;" id="chp_overview_toc_6_0">What after BCA?</h3> 
<p style="text-align: justify;">This is one of the most common questions asked by candidates. You could give an instant thrust to your career by pursuing <a href="https://it.shiksha.com/mca-home">MCA (Masters of Computer Applications)</a> after BCA.</p> 
<p style="text-align: justify;"><strong>Read: </strong><a href="/it-software/articles/top-specialisations-you-can-opt-for-after-bca-blogId-12966" rel="noopener">Top specialisations you can opt for after BCA</a></p> 
<p style="text-align: justify;">However, there are other options too that you could consider doing after completing your BCA degree:</p> 
<ul style="text-align: justify;"> 
 <li>Prepare for&nbsp;<a href="/mba/cat-exam" rel="noopener">CAT</a> and go for an MBA in IT Management.</li> 
 <li>Complete your Master’s degree by studying MSC (IT).</li> 
 <li>Go for a networking diploma and prepare for&nbsp;<a href="/ccnp-cisco-certified-network-professional-chp" rel="noopener">CCNP</a> or&nbsp;<a href="/ccna-chp" rel="noopener">CCNA</a> certification.</li> 
 <li>Prepare for&nbsp;Microsoft Certified Solutions Associate (<a href="/mcsa-microsoft-certified-solutions-associate-chp" rel="noopener">MCSA</a>)&nbsp;Certification or Redhat certifications and work as a System Administrator or Desktop Technician or Help desk Assistant.</li> 
 <li>You could also improve your teaching skills and work as a computer teacher/instructor in school, universities and colleges.</li> 
 <li>If you are good in web programming then improve your coding skills and make your career in Web Development. You can also work as an independent web designer.</li> 
 <li>A lot of BCA graduates also go for government jobs. You could consider one too.</li> 
</ul> 
<p class="hiddenCMSElem dfp-tags" style="text-align: justify;">DFP-Banner</p> 
<h2 style="text-align: justify;" id="chp_overview_toc_7">BCA (Bachelor of Computer Applications) Frequently Asked Questions (FAQs)</h2> 
<p style="text-align: justify;"><strong id="faq_q1">Q. What is BCA course?</strong></p> 
<div id="faq_a1" style="text-align: justify;"> 
 <p class="MsoNormal"><span style="mso-bidi-font-weight: bold;">A. BCA or Bachelor of Computer Applications is an undergraduate course that will build the knowledge of the students regarding computer language. By completing this three-year course, the students will be able to build their career in Information Technology and Computer Applications field.</span></p> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q2">Q. I have finished my 10+2 with Arts stream. Am I eligible for BCA?</strong></p> 
<div id="faq_a2" class="fA" style="text-align: justify;"> 
 <p class="MsoNormal"><span style="mso-bidi-font-weight: bold;">A. Yes. Candidates of any stream from a recognized institute will be eligible for BCA admissions. English is a compulsory subject that will be required for admissions by many institutes.</span></p> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q3">Q. What is the scope of BCA?</strong></p> 
<div id="faq_a3" class="fA" style="text-align: justify;"> 
 <p class="MsoNormal"><span style="mso-bidi-font-weight: bold;">A. Due to the ever-growing requirement of technology, the demand for BCA graduates is increasing rapidly. After graduation, BCA students can opt to work for leading IT companies or Government organizations.</span></p> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q4">Q. What is BCA salary?</strong></p> 
<div id="faq_a4" class="fA" style="text-align: justify;"> 
 <p class="MsoNormal"><span style="mso-bidi-font-weight: bold;">A. BCA graduates will earn according to the company that they are recruited to and as per their experience. Freshers in Multi-national companies may earn up to INR 40,000 per month and those recruited to top companies will even earn a higher salary.</span></p> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q5">Q. Can I apply for BCA without Maths?</strong></p> 
<div id="faq_a5" class="fA" style="text-align: justify;"> 
 <p class="MsoNormal"><span style="mso-bidi-font-weight: bold;">A. Yes. Students without Maths will be eligible for BCA admissions.</span></p> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q6">Q. Are BCA and BTech equal?</strong></p> 
<div id="faq_a6" class="fA" style="text-align: justify;"> 
 <p class="MsoNormal"><span style="mso-bidi-font-weight: bold;">A. While BCA is the study of computer applications, BTech in Computer Science Engineering focuses on training the students about computer engineering and hardware. Both courses are good programmes to choose from and depend on the interest of the students and their career goals.</span></p> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q7">Q. Is BCA a good course after the 12th?</strong></p> 
<div id="faq_a7" class="fA" style="text-align: justify;"> 
 <p class="MsoNormal"><span style="mso-bidi-font-weight: bold;">A. Students can opt for BCA after 12<sup>th</sup> if they have an interest in Computer Applications. Since the demand for BCA graduates is on the rise, the students can opt for the course.</span></p> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q8">Q. Can I get a job in Google after BCA?</strong></p> 
<div id="faq_a8" class="fA" style="text-align: justify;"> 
 <span style="font-size: 11.0pt; line-height: 107%; font-family: 'Calibri',sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: 'Times New Roman'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-weight: bold;">A. After graduating with BCA, the students can apply and are recruited into top companies such as Google, Infosys and more.&nbsp;</span> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q9">Q. What options are there after BCA?</strong></p> 
<div id="faq_a9" class="fA" style="text-align: justify;"> 
 <span style="font-size: 11.0pt; line-height: 107%; font-family: 'Calibri',sans-serif; mso-ascii-theme-font: minor-latin; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: 'Times New Roman'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-weight: bold;">A. After graduation, BCA students can either opt to start their career in the IT industry or pursue higher education by opting for MCA, MBA, MSc and more.</span> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q10">Q. Can I apply for CA with BCA?</strong></p> 
<div id="faq_a10" class="fA" style="text-align: justify;"> 
 <p class="MsoNormal"><span style="mso-bidi-font-weight: bold;">A. Yes. BCA graduates are eligible to apply for the Common Proficiency Test (CPT), which is the entrance test for CA.</span></p> 
</div> 
<p class="fQ" style="text-align: justify;"><strong id="faq_q11">Q. Is BCA easy?</strong></p> 
<div id="faq_a11" class="fA"> 
 <p class="MsoNormal" style="text-align: justify;"><span style="mso-bidi-font-weight: bold;">A. Students who have ample interest in this subject may find the programme to be easy. However, the concepts about computer applications require a lot of studying and dedication.</span></p>   
</form>
</body>
</html>
 