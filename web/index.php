<?php 
   require_once('inc/header.inc');
   ?>
<title>Bootstrap Library v1</title>
</head>
<body class="version2 d-flex flex-column h-100">
    <div class="visually-hidden-focusable skip-link p-3 container">
      <a href="#main-content" class="p-2">
        Skip to main content
      </a>
    </div>
   <header role="banner">
      <?php 
         require_once('inc/socialheaderv1.inc');
         require_once('inc/campusmenuv1.inc');
         require_once('inc/featuredimage.inc');
         require_once('inc/librarymenu.inc');
         ?>
    <div class="mobile_chat">
<script src="https://sunybroome.libanswers.com/load_chat.php?hash=5a4e12972681f2cc6bfa79be6d9c052bb3c3e0467170d18124beef22247496ea"></script>
        <div id="libchat_5a4e12972681f2cc6bfa79be6d9c052bb3c3e0467170d18124beef22247496ea"></div>
    </div>
   </header>
<main role="main" id="main" class="mb-3">
   <a id="main-content" tabindex="-1"></a>
 <div class="container">
         <div class="row g-0">

            <div class="col-sm-9 content" role="main">
               <div class="highlighted">
                  <div class="region region-highlighted">
                  </div><!-- region -->
               </div><!-- highlighted -->

               <div class="region-content">
                  <?php 
                     require_once('inc/quicksearch1.inc');
                     ?>
  
               </div><!-- region-content -->
            </div><!-- col-sm-9 -->
            <?php 
               require_once('inc/sidenav.inc');
               ?>
         </div><!-- row g-0-->

      <?php 
         require_once('inc/newsblock.inc');
         ?>
   </div><!-- content-wrap -->
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

