<?php 
   require_once('inc/header.inc');
    $page_title="
        Policies
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
                   <li class="breadcrumb-item"><a href="/library/about-library">Comments</a></li>
                </ol>
             </nav>
          </div><!-- breadcrumbs -->
       </div><!-- region-breadcrumbs -->

         <div class="row g-0">

             <div class="order-1 order-lg-2 col-12 col-lg-9">

                  <div class="region region-content">
                     <h1 class="page-header"><?php echo $page_title ?></h1>
                            <ul>
    <li><a href="https://sunybroome.edu/pp/wp-content/uploads/2023/04/aa4009_library_collection_development_policy.pdf">Library Collection Development Policy</a></li>
    <li><a href="https://sunybroome.edu/pp/wp-content/uploads/2023/07/ga2005_copyright_material.pdf">Copyright Material</a>
    </li>
    <li><a href="https://sunybroome.edu/pp/wp-content/uploads/2021/05/IT9001-EIT-Accesssibility-Policy.pdf">EIT Accessibility Policy</a>
    </li>
    <li><a href="https://sunybroome.edu/wp-content/uploads/2025/08/aa4005_library_accessibility_policy.pdf">Library Accessibility Policy</a>
    </li>
    <li><a href="https://www.sunybroome.edu/pp/wp-content/uploads/2021/03/AA4003-Open-Access-Policy.pdf">Open Access Policy</a>
    </li>
    <li><a href="https://www.sunybroome.edu/pp/wp-content/uploads/2021/09/IT9002-Web-Accessibility-Policy.pdf">Web Accessibility Policy</a>
    </li>
</ul>


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

