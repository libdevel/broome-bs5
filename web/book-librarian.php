<?php 
   require_once('inc/header.inc');
    $page_title="
        Book a Librarian
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

            <p>Need help finding resources for an assignment? Not sure you have found the most appropriate sources for your paper, speech or presentation? To request an appointment, fill out the form below.</p>

<div id="form_7a125333cdb3ff4a8adb27ec0525b8f7"></div><script type="text/javascript" src="https://sunybroome.libwizard.com/form_loader.php?id=7a125333cdb3ff4a8adb27ec0525b8f7&noheader=1"></script>


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

