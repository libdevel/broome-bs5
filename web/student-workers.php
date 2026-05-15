<?php 
   require_once('inc/header.inc');
    $page_title="
        Student Workers
        ";
   ?>
<title><?php echo $page_title ?></title>
   </head>
   <body class="version2">

   <header role="banner">
      <?php 
         require_once('inc/socialheaderv1.inc');
         require_once('inc/campusmenuv1.inc');
         require_once('inc/featuredimage.inc');
         require_once('inc/librarymenu.inc');
         ?>
   </header>


<main role="main" id="main" class="mb-3">
   <a id="main-content" tabindex="-1"></a>
 <div class="container">
         <div class="row g-0">
<div class="order-1 order-lg-2 col-12 col-lg-9">

 <div class="region region-content">
     <h1 class="page-header"><?php echo $page_title ?></h1>

          <p>
    Student workers are a valuable piece of the Cecil C. Tyrell Library team.&nbsp; We currently hire, train, and supervise 6-10 students per semester.&nbsp; Additional information about the jobs available, as well as links to necessary paperwork and an online application, can be found <a href="https://sunybroome.libguides.com/studentemployment">on our guide to student employment</a>.
</p>
<p>
    The other links on this page are designed to help student workers understand and complete assigned tasks.&nbsp; Contact the Access Services Librarian with any problems or questions!
</p>
<div class="d-grid gap-2 d-md-block">
    <a class="btn btn-primary btn-lg m-2 px-4" href="https://docs.google.com/a/sunybroome.edu/forms/d/e/1FAIpQLSd1Y_R1FCtEac8zdCoSRw_4EsNDW2PpfM7p7Yyrwp2-TyUhkg/viewform" role="button">Gate Count Form</a> <a class="btn btn-primary btn-lg m-2 px-4" href="https://forms.gle/oq3xcmirMw6eay1MA" role="button">Circulation Desk Statistics</a> <a class="btn btn-primary btn-lg m-2 px-4" href="https://forms.gle/cHn9wf7TJjXS1BDt6" role="button">Hourly Patron Count</a>
</div>
<div class="d-grid gap-2 d-md-block">
    <a class="btn btn-primary btn-lg m-4 px-4" href="https://docs.google.com/spreadsheets/d/10NRAMPUg-YnMdy_MwCSkAyk1gIsXUNz-heUM4OYZx70/edit?usp=sharing" role="button">Issue Alert Log</a> <a class="btn btn-primary btn-lg m-4 px-4" href="https://docs.google.com/a/sunybroome.edu/forms/d/e/1FAIpQLSeDvuxPjd_DNuoks5m_HG3Two_-AvZ0W9JYX0Vxfs13lRzBJw/viewform" role="button">Shelf Reading Log</a>
</div>
<div class="d-grid gap-2 d-md-block">
    <a class="btn btn-primary btn-lg m-2 px-4" href="https://sunybroome.libguides.com/accessservices/procedures" role="button">Opening/Closing Procedures</a> <a class="btn btn-primary btn-lg m-2 px-4" href="https://sunybroome.libguides.com/alma-circulation-training" role="button">Alma Circ Training</a>
</div>



</div><!-- col-sm-9 -->


</div><!-- col-sm-9 -->

            <?php 
               require_once('inc/sidenav_services.inc');
               ?>
 
   </div><!-- row g-0-->

  
 

  

     
 </div> <!-- content-wrap -->
</main>
  <?php 
     require_once('inc/libcankle.inc');
     require_once('inc/cankle.inc');
     ?>

   <footer class="footer" role="contentinfo">
      <?php 
         require_once('inc/footer.inc');
         ?>

   </footer>

   </body>
</html>

