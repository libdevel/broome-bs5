<?php 
   require_once('inc/header.inc');
    $page_title="
        Books and Media
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
               <div class="region-content">
           <h1 class="page-header"><?php echo $page_title ?></h1>

                  <?php 
                     require_once('inc/primobooks.inc');
                     ?>

<h3>
    Browse for:
</h3>
<ul>
    <li>
        <a href="https://suny-bcc.primo.exlibrisgroup.com/discovery/search?query=any,contains,%3F&amp;tab=LibraryCatalog&amp;search_scope=MyInstitution&amp;sortby=date_d&amp;vid=01SUNY_BCC:01SUNY_BCC&amp;facet=location_code,include,4811%E2%80%93160972480004811%E2%80%93jcirc,lk&amp;offset=0&amp;came_from=sort">Children's books</a>
    </li>
    <li>
        <a href="https://suny-bcc.primo.exlibrisgroup.com/discovery/search?query=sub,contains,Films,AND&amp;pfilter=rtype,exact,videos,AND&amp;tab=LibraryCatalog&amp;search_scope=MyInstitution&amp;sortby=rank&amp;vid=01SUNY_BCC:01SUNY_BCC&amp;mode=advanced&amp;offset=0">Films and Movies</a>
    </li>
    <li>
        <a href="https://suny-bcc.primo.exlibrisgroup.com/discovery/search?query=sub,exact,fiction,AND&amp;pfilter=rtype,exact,books,AND&amp;tab=LibraryCatalog&amp;search_scope=MyInstitution&amp;sortby=date_d&amp;vid=01SUNY_BCC:01SUNY_BCC&amp;lang=en&amp;mode=advanced&amp;offset=0">Fiction</a>
    </li>
    <li>
        <a href="https://suny-bcc.primo.exlibrisgroup.com/discovery/search?query=any,contains,%3F&amp;tab=LibraryCatalog&amp;search_scope=MyInstitution&amp;sortby=date_d&amp;vid=01SUNY_BCC:01SUNY_BCC&amp;mfacet=location_code,include,4811%E2%80%93160972480004811%E2%80%93newbk,1&amp;lang=en&amp;offset=0&amp;came_from=sort">New books</a>
    </li>
    <li>
        <a href="https://sunybroome.libguides.com/OverDrive">Overdrive ebooks and audiobooks</a>
    </li>
    <li>
        <a href="https://suny-bcc.primo.exlibrisgroup.com/discovery/jsearch?vid=01SUNY_BCC:01SUNY_BCC">Print and Electronic Journals and Magazines</a>
    </li>
</ul>
<h3>
    Look for books at other libraries
</h3>
<ul>
    <li>
        <a href="https://suny-bin.primo.exlibrisgroup.com/discovery/search?vid=01SUNY_BIN:01SUNY_BIN&amp;lang=en&amp;sortby=rank">Binghamton University Library Catalog</a>
    </li>
    <li>
        <a href="https://www.thebcpl.org/">Broome County Public Library</a>
    </li>
    <li>
        <a href="https://fcls.ent.sirsi.net/client/en_US/fcls">Four County Library System (4CLS)</a>
    </li>
    <li>
        WorldCat
        <ul>
            <li>
                <a href="https://sunybroome.libguides.com/wfs">FirstSearch</a>
            </li>
            <li>
                <a href="https://sunybroome.on.worldcat.org/discovery">WorldCat Discovery</a>
            </li>
        </ul>
    </li>
</ul>
           
               </div><!-- region-content -->
            </div><!-- col-sm-9 -->
         <?php 
               require_once('inc/sidenav_find.inc');
               ?>
         </div><!-- row g-0-->


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

