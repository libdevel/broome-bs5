<?php 
   require_once('inc/header.inc');
    $page_title="
        About the Library
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
               <div class="region region-breadcrumb">
                  <div id="block-b5subtheme-breadcrumbs" class="block block-system block-system-breadcrumb-block">
                     <nav aria-label="breadcrumb">
                        <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="/library/">Home</a></li>
                           <li class="breadcrumb-item"><a href="/library/about-library">About</a></li>
                        </ol>
                     </nav>
                  </div><!-- breadcrumbs -->
 </div><!-- breadcrumbs -->

         <div class="row g-0">

         <div class="col-sm-9 content" role="main">
 
           
                  <div class="region-content">
                     <h1 class="page-header"><?php echo $page_title ?></h1>
                 
                            <p>
                                The Cecil C. Tyrrell Learning Resources Center was constructed in 1967-68 and named after the College's founding president. The building is an attractive, three-story structure, which houses the Library, the Learning Assistance Center, Teaching Resources Center, as well as offices and classrooms.
                            </p>
                            <h3>
                                Mission
                            </h3>
                            <p>
                                The mission of the Learning Resources Center (LRC) is to facilitate student success by providing a broad range of resources and services to meet the informational and instructional needs of SUNY Broome students, faculty, and the extended college community.
                            </p>
                            <h3>
                                Telephone
                            </h3>
                            <p>
                                Circulation: (607) 778-5020<br>
                                Reference: (607) 778-5043
                            </p>
                            <h3>
                                Loan Periods
                            </h3>
                            <p>
                                Circulating Books - 16 weeks (may be renewed)<br>
                                Magazines - Library use only<br>
                                CDs and DVDs - 30 days<br>
                                Laptops - 1 week<br>
                                Reserve Materials - 2 hours, library use only
                            </p>
                            <p>
                                Overdue notices are sent to college email addresses as a courtesy.&nbsp;&nbsp;Failure to return borrowed materials promptly upon notice will result in a charge for the overdue materials being sent to Student Accounts for collection processing.
                            </p>
                            <h3>
                                Archives
                            </h3>
                            <p>
                                Available by request with one day notice.
                            </p>
 
                  </div><!-- region-content -->
               </div><!-- col-sm-9 -->

            <?php 
               require_once('inc/sidenav_about.inc');
               ?>

            </div><!-- row -->

         </div> <!-- container -->

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

