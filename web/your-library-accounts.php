<?php 
   require_once('inc/header.inc');
    $page_title="
        Your Library Accounts
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

    <h3>
    <a href="https://suny-bcc.primo.exlibrisgroup.com/discovery/account?vid=01SUNY_BCC:01SUNY_BCC&amp;sortby=overview">SUNY Broome Library Account</a>
</h3>
<p>
    View and renew items you have checked out from SUNY Broome
</p>
<p>
    &nbsp;
</p>
<h3>
    <a href="https://broome.illiad.oclc.org/illiad/logon.html">ILLiad – Interlibrary Loan</a>
</h3>
<ul>
    <li >
        Request items not available from SUNY Broome
    </li>
    <li >
        Request scans of book chapters&nbsp;on reserve
    </li>
    <li >
        Access electronically delivered articles (available for 30 days)
    </li>
    <li>
        View due dates and request renewals of checked out items
    </li>
    <li>
        See a history of all items you’ve requested through ILLiad
    </li>
    <li >
        View/edit your existing Interlibrary Loan requests
    </li>
</ul>
<p>
    &nbsp;
</p>
<h3>
    The Chronicle of Higher Education
</h3>
<p>
    The Chronicle of Higher Education is one of the top sources sources for news and information about higher education.
</p>
<p>
    <a href="https://sunybroome.libguides.com/che">https://sunybroome.libguides.com/che</a>
</p>
<h3>
    The New York Times&nbsp;- Digital Edition
</h3>
<p>
    SUNY Broome faculty, students and staff can access The New York Times Digital Edition through an Academic Site License. Once you have created your account, you will be able to access the New York Times via the web or by mobile apps. (Does not include the crossword apps)
</p>
<p>
    <a href="https://sunybroome.libguides.com/nyt">https://sunybroome.libguides.com/nyt</a>
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

