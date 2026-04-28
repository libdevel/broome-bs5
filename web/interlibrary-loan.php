<?php 
   require_once('inc/header.inc');
    $page_title="
        Interlibrary Loan
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
            <h1 class="page-header">Interlibrary Loan</h1>

                <p>
    Interlibrary loan (ILL) enables SUNY Broome Community College students, faculty, and staff to obtain journal articles, books, and other types of materials that are not available through the SUNY Broome Library. The owning library determines whether a particular item can be provided. Regional agreements regulating ILL and federal copyright law also place limitations on the types of materials that may be borrowed, as well as the number of articles that can be requested from journals.
</p>
<p>
    Search Primo or the library databases for the item you want to borrow. &nbsp;Click the "Get It" or "Find Full Text" link in Primo the article databases to borrow a book or article we do not own. You will be prompted to log into <a href="https://broome.illiad.oclc.org/illiad/illiad.dll">ILLiad</a>, the software we use for Interlibrary Loan.
</p>
<ol>
    <li data-list-item-id="eb49a37fd5844e9544cfba618ca782404">
        If you do not have an account, you will need to fill out a short registration form&nbsp;to use the service
    </li>
    <li data-list-item-id="e192025f47121870200c5cb34b2be0d8f">
        <strong>Books</strong> are typically available for pick up in 7-10 days (delivery from some libraries may take longer)
    </li>
    <li data-list-item-id="ed8f43541ec7a2ce18e3029d7f50d6635">
        <strong>Articles</strong> are typically ready to download within 2-3 days
    </li>
</ol>
<p>
    You will be notified by email when your requested item is available.&nbsp;
</p>
<p>
    Books can be picked up at the Circulation (blue) Desk, and returned there when finished.
</p>
<p>
    Need Help? Contact us at: (607) 778-5043
</p>
<h3>
    Eligible Users
</h3>
<p>
    SUNY Broome students, faculty, staff and off-campus borrowers with valid SUNY Broome library cards may use Interlibrary Loan.
</p>
<h3>
    Loan Periods and Fees
</h3>
<ul>
    <li data-list-item-id="ec95e959ebd9028ef11bfc6d3444aa340">
        There is no charge for an Interlibrary Loan request.
    </li>
    <li data-list-item-id="ebbad311223d7f7141015672e89c7ec4b">
        All borrowers are subject to any overdue fines or lost material charges incurred. Access to your Interlibrary Loan account&nbsp;may be limited for lack of compliance with due dates and prompt return of material.&nbsp;
    </li>
    <li data-list-item-id="e254b3ab626841d803fd19a48eeb4aa7f">
        Loan periods are defined by the lending library. &nbsp;Login to ILLiad to view your account and renew items.
    </li>
</ul>
<h3>
    Limits
</h3>
<ul>
    <li data-list-item-id="efc6e86ab2874ea322916599fcc846c5f">
        SUNY Broome students, faculty, and staff are limited to 5 AV requests at a time. There is no limit for books.
    </li>
    <li data-list-item-id="e920b60cfeb1798eb1328bc8a556c6193">
        Community Users are limited to 3 items at one time, and 1 may be an AV item.
    </li>
</ul>
<p>
    These items are often not available through Interlibrary Loan:
</p>
<ul>
    <li data-list-item-id="e013f4efa7f494befb90f03156ef871d0">
        Textbooks&nbsp;
    </li>
    <li data-list-item-id="e479c35939c920e6a16d759e4866ca231">
        eBooks
    </li>
    <li data-list-item-id="e5c8697b4c2fe222ca1d4ab50b208f244">
        Entire volumes of periodicals or microfilm
    </li>
    <li data-list-item-id="ef1875e15512fdd0ad5265f7078a726f9">
        Non-circulating items (reference books, archival materials, etc.)
    </li>
    <li data-list-item-id="e16bdda61db0b89224bca2f8637579d25">
        Some CDs or DVDs
    </li>
</ul>


               </div><!-- region-content -->
            </div><!-- col-sm-9 -->
         <?php 
               require_once('inc/sidenav_find_ill.inc');
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

