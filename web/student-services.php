<?php 
   require_once('inc/header.inc');
    $page_title="
        Student Services
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
    <a class="btn btn-primary" href="librarians.php" role="button">Find Your Librarian</a>
</p>
<div class="row">
    <div class="col-md-4" style="padding-bottom:10px;">
        <div class="card shadow card-with-link bg-white h-100">
            <div class="card-body">
                <h2 class="card-title">
                    Find and Get Stuff
                </h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="interlibrary-loan.php">Borrow from other libraries (Interlibrary Loan)</a>
                    </li>
                    <li class="list-group-item">
                        <a href="purchase-request.php">Request a book purchase</a>
                    </li>
                    <li class="list-group-item">
                        <a href="textbooks-reserve.php">Textbooks on Reserve</a>
                    </li>
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
                    Get Help
                </h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="help.php">Ask Us Anything</a>
                    </li>
                    <li class="list-group-item">
                        <a href="librarians.php">Find Your Librarian</a>
                    </li>
                    <li class="list-group-item">
                        <a href="course-guides.php">Course Guides</a>
                    </li>
                    <li class="list-group-item">
                        <a href="subject-guides.php">Subject Guides</a>
                    </li>
                    <li class="list-group-item">
                        <a href="tutorials.php">Library Tutorials</a>
                    </li>
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
                    Use the Library
                </h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="reserve-study-room.php" >Book a Study Room</a>
                    </li>
                    <li class="list-group-item">
                        <a href="student-laptop-loan-program.php">Laptop Loan Program</a>
                    </li>
                    <li class="list-group-item">
                        <a href="poster-printing-guidelines.php">Poster Printing</a>
                    </li>
                    <li class="list-group-item">
                        <a href="accessibility.php">Accessibility</a>
                    </li>
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

