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
<div class="order-1 order-lg-2 col-12 col-lg-12">

 <div class="region region-content">
     <h1 class="page-header"><?php echo $page_title ?></h1>

        <h2>
    Phone
</h2>
<p>
    Call to get help from a librarian anytime the library is open (<a href="hours.php">hours</a>).
</p>
<p>
    Phone: (607) 778-5043
</p>
<h2>
    Email
</h2>
<p>
    Email your question to <a href="mailto:reference@sunybroome.edu">reference@sunybroome.edu</a>, and a librarian will answer your question within 24 hours (Mon-Fri).
</p>
<h2>
    Book a Librarian
</h2>
<p>
    Schedule an appointment with a librarian who will help you find library resources. <a href="https://sunybroome.libcal.com/appointments?lid=4650">Click here to schedule an appointment</a>.
</p>
<h2>
    Chat with a Librarian
</h2>
<p>
    Ask Us 24/7 is a chat service that is available 24 hours a day, 7 days a week. You will not necessarily be chatting with a librarian from the SUNY Broome Library, but you will be chatting with a reference librarian. You can access chat using the widget to the right&nbsp;or at <a href="https://sunybroome.libanswers.com/widget_standalone.php?hash=b28e23d9dae0a7e83097f6b4c6d8cc93">AskUs 24/7 Chat</a>.
</p>


</div><!-- col-sm-9 -->


</div><!-- col-sm-9 -->

  
 
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

