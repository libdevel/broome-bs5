<?php 
   require_once('inc/header.inc');
    $page_title="
        Reserve a Study Room
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
    The library has study rooms available for students that need a quiet space to study or attend an online synchronous class.&nbsp; Click the link below to reserve a study room in the library.&nbsp;&nbsp;
</p>
<p>
    <a class="btn btn-primary btn-lg m-4 px-4" href="https://sunybroome.libcal.com/reserve/room" role="button">Reserve a Study Room</a>
</p>
<p>
    &nbsp;
</p>
<p>
    View other rooms available on campus to log into your online class:&nbsp;<a href="http://sunybroome.edu/its/campus-labs/">campus labs</a>.
</p>


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

