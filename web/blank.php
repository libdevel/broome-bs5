<?php 
   require_once('inc/header.inc');
   ?>
<title>Hours</title>
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

         <div class="col-sm-12 content" role="main">
            <div class="highlighted">
               <div class="region region-highlighted">
               </div><!-- region -->
            </div><!-- highlighted -->

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
               </div><!-- container -->
           
                  <div class="region-content">
                     <h1 class="page-header">Hours</h1>
                 

                        <div class="hours-all">
                                    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 

                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
                                    <script src="https://sunybroome.libcal.com/js/hours_full.js?002"></script> 

           

                        <script src="https://sunybroome.libcal.com/js/hours_month.js?002"></script> 
                        <div id="s_lc_mhw_5196_0"></div> 
                        <script>
                        $(function(){ 
                        var s_lc_mhw_5196_0 = new $.LibCalHoursCal( $("#s_lc_mhw_5196_0"), { iid: 5196, lid: 0, months: 3, systemTime: false }); 
                        });
                        </script> 

 
                  </div><!-- region-content -->
               </div><!-- col-sm-9 -->
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

