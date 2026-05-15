<?php 
   require_once('inc/header.inc');
    $page_title="
        Help
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

</p>
<div class="row">

    <div class="col-md-4" style="padding-bottom:10px;">
        <div class="card shadow card-with-link bg-white h-100">
            <div class="card-body">
                <h2 class="card-title">
                    Phone / Email 
                </h2>
                <ul>
                    <li>Call: <a href="tel:6077785043">(607) 778-5043</a></li>
 
                </ul>
            <h3>Email</h3>
                <ul>
                    <li>Email: <a href="mailto:reference@sunybroome.edu">Email a Librarian</a></li>
                    <li><a  href="librarians.php" >Find Your Librarian</a></li>
                </ul>
            </div>
            <!--/panel-body -->
        </div>
        <!--/panel -->
    </div>
    <!-- col-md-4 -->
    <div class="col-md-4" style="padding-bottom:10px;">
        <div class="card shadow card-with-link bg-white h-100">
            <div class="card-body">
                <h2 class="card-title">
                   Chat 24/7
                </h2>
                    <script src="https://sunybroome.libanswers.com/load_chat.php?hash=3d0c9c1582a96d4117d8d4e107d8acef" async></script>
                    <div id="libchat_3d0c9c1582a96d4117d8d4e107d8acef"></div>
            </div>
            <!--/panel-body -->
        </div>
        <!--/panel -->
    </div>
    <!-- col-md-4 -->

    <div class="col-md-4" style="padding-bottom:10px;">
        <div class="card shadow card-with-link bg-white h-100">
            <div class="card-body">
                <h2 class="card-title">
                    In-Person
                </h2>
                <ul>
                    <li>Stop by the Reference Desk during library <a href="hours">hours</a></li>
                    <li>Set up a one-on-one <a href="https://library.sunybroome.edu/services/book-librarian/">meeting with a librarian</a></li>
                </ul>
            </div>
            <!--/panel-body -->
        </div>
        <!--/panel -->
    </div>
    <!-- col-md-4 -->
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

