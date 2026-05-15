<?php 
   require_once('inc/header.inc');
    $page_title="
        Services for Alumni and Visitors
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
                Members of the local community, SUNY Broome Alumni, and retired faculty and staff may register for community user cards. Registrants must be 18 years or older. Due to licensing agreements with library vendors, community patron card privileges limit access to ebooks or databases to use inside library buildings. No access is granted for ebooks or databases outside of the library.
            </p>
            <h3>
                Borrowing items
            </h3>
            <p>
                Community users may borrow up to five items at a time.
            </p>
            <h3>
                Card expiration
            </h3>
            <p>
                Community user cards expire a year from the date of registration. Cards may be renewed as long as requirements are met and any library charges (fines, etc.) have been resolved.
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

