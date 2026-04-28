<?php 
   require_once('inc/header.inc');
    $page_title="
        Accessibility
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
                           <li class="breadcrumb-item"><a href="accessibility.php">Accessibility</a></li>
                        </ol>
                     </nav>
                  </div><!-- breadcrumbs -->
               </div><!-- container -->

         <div class="row g-0">

         <div class="order-1 order-lg-2 col-12 col-lg-9">

                  <div class="region region-content">
                     <h1 class="page-header"><?php echo $page_title ?></h1>
                 

<p>
    SUNY Broome Library is dedicated to the principle of equal opportunity in education, research, and service. The Library reflects this commitment by ensuring that collections, services, and facilities are accessible to all users.
</p>
<p>
    For further assistance or accommodation, please contact a staff member in person at any service desk or by phone, e-mail, or chat. Special accommodation requests not addressed below may be directed to the <a href="https://sunybroome.edu/lad/aro/">Accessibility Resources Office</a> (ARO), at&nbsp;<a href="tel:6077785150">(607) 778-5150</a>.
</p>
<h3>
    Services
</h3>
<h4>
    Locating or Reaching Library Materials
</h4>
<p>
    Library staff members will assist with locating or reaching shelved library materials.&nbsp;Provide the location information of your items to the nearest service desk and a staff person will retrieve the items for you. If you have a large number of items that need to be retrieved, the staff person will pull several of them to get you started; the remaining materials will be pulled within 24 hours (during the week) and held for you.
</p>
<h3>
    Accessible Technology
</h3>
<h4>
    Workstations
</h4>
<p>
    Windows computers in the Library offer standard Windows tools for accessibility -- magnifier, narrator, on-screen keyboard, and speech recognition.&nbsp; Academic workstations&nbsp;have Read&amp;Write text to speech software &nbsp;installed.
</p>
<p>
    The Assistive Technology Lab is located in the Library in L005.&nbsp; This room features a PC with Zoom Text,&nbsp; Read&amp;Write,&nbsp; Dragon Naturally Speaking, and an Optelec Enlarger to help students with visual disabilities.
</p>
<h4>
    Smartpens
</h4>
<p>
    The Library and the ARO Office have smart pens available.&nbsp;&nbsp;Smartpens are&nbsp;a “pen-like” device that uses a special notebook that allows it to digitize handwriting while it records everything that is being spoken.&nbsp;
</p>
<h4>
    C-Pen Readers
</h4>
<p>
    The library and the&nbsp;ARO Office have C-Pens available.&nbsp; &nbsp;C-Pen is&nbsp;a totally portable, pocket-sized device that reads text out aloud with an English, Spanish or French human-like digital voice.
</p>
<p>
    For more information about assistive technology, please visit <a href="https://sunybroome.edu/lad/assistive-technology/">ARO&nbsp;Assistive Technology</a>
</p>
<h3>
    Facilities
</h3>
<p>
    Accessible parking spaces are available in lot 18.
</p>
<p>
    The entrance, located on the ground floor, has a push button access door that leads to the main lobby elevator.
</p>
<h3>
    Platforms
</h3>
<p>
    The SUNY Broome Library relies on a number of vendor-hosted software systems and makes good faith efforts to procure and develop accessible technologies that are available to all users. Accessibility statements are provided by the vendors.
</p>
<ul>
    <li data-list-item-id="ef177edc711ee9094ee00f987658850f5">
        <a href="https://www.d2l.com/accessibility/standards/">Brightspace</a> provides the SUNY Broome’s enterprise learning management system.
    </li>
    <li data-list-item-id="ee2b27c50286e17ef6eb851bc952bb1b3">
        <a href="https://knowledge.exlibrisgroup.com/Cross_Product/Security/Policies/Accessibility">Ex Libris</a>&nbsp;provides the SUNY Broome's library catalog and discovery layer.
    </li>
</ul>
<p>
    &nbsp;
</p>
<p>
    For more help, contact Amanda Hollister at <a href="mailto:hollisteraj@sunybroome.edu?subject=Library%20Accessibility">hollisteraj@sunybroome.edu</a>
</p>
<p>
    To report an accessibility concern, please use our <a href="https://sunybroome.libwizard.com/f/accessibility">Accessibility Reporting Form</a>
</p>

 
                  </div><!-- region-content -->
               </div><!-- col-sm-12 -->
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

