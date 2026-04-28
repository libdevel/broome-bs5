<?php 
   require_once('inc/header.inc');
    $page_title="
        Comments
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
                   <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                   <li class="breadcrumb-item"><a href="comments.php"><?php echo $page_title ?></a></li>
                </ol>
             </nav>
          </div><!-- breadcrumbs -->
       </div><!-- region-breadcrumbs -->

         <div class="row g-0">

             <div class="order-1 order-lg-2 col-12 col-lg-9">

                  <div class="region region-content">
                     <h1 class="page-header"><?php echo $page_title ?></h1>
                
<div id="form_cbbb25512f91bc87112c06dbc1826745"></div><script type="text/javascript" src="https://sunybroome.libwizard.com/form_loader.php?id=cbbb25512f91bc87112c06dbc1826745&noheader=1"></script>
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

