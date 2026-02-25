<style>

</style>
<div class="frontdecor">
<div class="homepagesearch tabs">

<div class="tabs" id="quicksearch_tabs">
   <ul class="nav nav-tabs d-md-inline-flex nav-fill" role="tablist">
      <li class="nav-item">
         <a href="#quicksearch-pane" id="quicksearch-tab" data-bs-toggle="tab" class="nav-link active" aria-controls="quicksearch-pane" aria-selected="true"  role="tab">Quick Search</a>
      </li>
      <li class="nav-item">
         <a href="#catalog-pane" id="catalog-tab" class="nav-link" data-bs-toggle="tab" aria-controls="catalog-pane" aria-selected="false" role="tab">Catalog</a>
      </li>
      <li class="nav-item">
         <a href="#textbooks-pane" id="textbooks-tab" class="nav-link" data-bs-toggle="tab" aria-controls="textbooks-pane" aria-selected="false" role="tab">Textbooks/Reserves</a>
      </li>
      <li class="nav-item">
         <a href="#journals-pane" id="journals-tab" class="nav-link" data-bs-toggle="tab" aria-controls="journals-pane" aria-selected="false" role="tab">Journal Titles</a>
      </li>
      <li class="nav-item">
         <a href="#ebooks-pane" id="ebooks-tab" class="nav-link" data-bs-toggle="tab" aria-controls="ebooks-pane" aria-selected="false" role="tab">E-Books</a>
      </li>
   </ul>


   <div class="tab-content">
      <div id="quicksearch-pane" class="tab-pane fade in show active" role="tabpanel" aria-labelledby="quicksearch-tab">
         <form action="https://utsa.primo.exlibrisgroup.com/discovery/search" id="homepage-quicksearch" method="get" style="margin-top: 0 !important; padding: 0" enctype="application/x-www-form-urlencoded; charset=utf-8" onsubmit="searchPrimo()">
            <div class="input-group" style="margin-top: 0 !important">
               <label class="formLabel quickSearchLabel" for="quickSearch">Quick Search</label> <input id="quickSearch"  onblur="this.placeholder = 'Find Articles, Books &amp; More'" onfocus="this.placeholder = ''" placeholder="Find Articles, Books &amp; More" type="text" /> <input id="keywords" name="search" onfocus="" type="hidden" value="" /> <input class="submit btn btn-default" onclick="searchPrimo()" type="submit" value="Search" />
            </div>
            <div class="input-group" style="margin-top: 0 !important">
               <label class="full-text" for="full-text"> <input id="full-text" name="facet" type="checkbox" value="tlevel,include,online_resources" /> Available Online</label> <label class="peer-reviewed" for="peer-reviewed"> <input id="peer-reviewed" name="facet" type="checkbox" value="tlevel,include,peer_reviewed" /> Peer Reviewed</label> <a class="advancedLink ms-auto" href="https://utsa.primo.exlibrisgroup.com/discovery/search?vid=01UTXSANT_INST:DEFAULT&amp;sortby=rank&amp;mode=advanced" target="blank">Advanced Search</a>
            </div>
            <input name="vid" type="hidden" value="01UTXSANT_INST:DEFAULT" /> <input name="tab" type="hidden" value="Everything" /> <input name="search_scope" type="hidden" value="MyInst_and_CI" /> <input name="mode" type="hidden" value="Basic" /> <input name="displayMode" type="hidden" value="full" /> <input name="highlight" type="hidden" value="true" /> <input id="primoQuery" name="query" type="hidden" value="any,contains" /> <input name="displayField" type="hidden" value="all" /> <input name="facet" type="hidden" value="rtype,exclude,newspaper_articles" /> <input name="facet" type="hidden" value="rtype,exclude,reviews" />
         </form>
         <script type="text/javascript">
            function searchPrimo() {
                document.getElementById("primoQuery").value = "any,contains," + document.getElementById("quickSearch").value.replace(/[,]/g, " ");
                document.forms["homepage-quicksearch"].target = "_blank;"
                document.forms["homepage-quicksearch"].submit();
            }
         </script>
      </div><!--tab-content -->

      <div id="catalog-pane" class="tab-pane fade" role="tabpanel" aria-labelledby="catalog-tab">
         <form action="https://utsa.primo.exlibrisgroup.com/discovery/search" id="catalog-quicksearch" method="get" style="margin-top: 0 !important; padding: 0" enctype="application/x-www-form-urlencoded; charset=utf-8" onsubmit="searchPrimoCatalog()">
            <div class="input-group" style="margin-top: 0 !important">
               <label class="formLabel quickSearchLabel" for="catalog">Catalog</label>
               <input id="catalog" onblur="this.placeholder = 'Find Print Books &amp; DVDs'" onfocus="this.placeholder = ''" placeholder="Find Print Books &amp; DVDs" type="text" />
               <input id="keywords" name="search" onfocus="" type="hidden" value="" />
               <input class="submit btn btn-default" onclick="searchPrimoCatalog()" type="submit" value="Search" />
            </div>
            <div class="input-group" style="margin-top: 0 !important">
               <a class="advancedLink ml-auto" href="https://utsa.primo.exlibrisgroup.com/discovery/search?vid=01UTXSANT_INST:DEFAULT&amp;sortby=rank&amp;mode=advanced&amp;tab=LibraryCatalog&amp;search_scope=MyInstitution" target="blank">Advanced Search</a>
            </div>
            <input name="vid" type="hidden" value="01UTXSANT_INST:DEFAULT" />
            <input name="tab" type="hidden" value="LibraryCatalog" />
            <input name="search_scope" type="hidden" value="MyInstitution" />
            <input name="highlight" type="hidden" value="true" /> <input id="primoQueryCatalog" name="query" type="hidden" value="any,contains" />
            <input name="displayField" type="hidden" value="all" />
         </form>
         <script type="text/javascript">
            function searchPrimoCatalog() {
                document.getElementById("primoQueryCatalog").value = "any,contains," + document.getElementById("catalog").value.replace(/[,]/g, " ");
                document.forms["catalog-quicksearch"].target = "_blank;"
                
                document.forms["catalog-quicksearch"].submit();
            }
         </script>
      </div><!--tab-content -->

      <div id="textbooks-pane" class="tab-pane fade" role="tabpanel" aria-labelledby="textbooks-tab">
         <form action="https://utsa.primo.exlibrisgroup.com/discovery/search" id="textbooks-quicksearch" method="get" style="margin-top: 0 !important; padding: 0" enctype="application/x-www-form-urlencoded; charset=utf-8" onsubmit="searchPrimoTxtBks()">
            <div class="input-group" style="margin-top: 0 !important">
               <label class="formLabel quickSearchLabel" for="textbooks">Textbooks/Reserves</label>
               <input id="textbooks" onblur="this.placeholder = 'Search Course, Instructor, or Title'" onfocus="this.placeholder = ''" placeholder="Search Course, Instructor, or Title" type="text" /> 
               <input id="keywords" name="search" onfocus="" type="hidden" value="" />
               <input class="submit btn btn-default" onclick="searchPrimoTxtBks()" type="submit" value="Search" />
            </div>
            <input name="vid" type="hidden" value="01UTXSANT_INST:DEFAULT" />
            <input name="tab" type="hidden" value="CourseReserves" />
            <input name="search_scope" type="hidden" value="CourseReserves" /> 
            <input name="highlight" type="hidden" value="true" /> 
            <input id="primoQueryTxtBks" name="query" type="hidden" value="any,contains" />
            <input name="displayField" type="hidden" value="all" />
         </form>
         <script type="text/javascript">
            function searchPrimoTxtBks() {
                document.getElementById("primoQueryTxtBks").value = "any,contains," + document.getElementById("textbooks").value.replace(/[,]/g, " ");
                document.forms["textbooks-quicksearch"].target = "_blank;"
                
                document.forms["textbooks-quicksearch"].submit();
            }
         </script>
      </div><!--tab-content -->

      <div id="journals-pane" class="tab-pane fade"  role="tabpanel" aria-labelledby="journals-tab">
         <form action="https://utsa.primo.exlibrisgroup.com/discovery/jsearch" id="journals-quicksearch" method="get" style="margin-top: 0 !important; padding: 0" enctype="application/x-www-form-urlencoded; charset=utf-8" onsubmit="searchPrimoJournals()">
            <div class="input-group" style="margin-top: 0 !important">
               <label class="formLabel quickSearchLabel" for="journals">Journals</label> <input id="journals" onblur="this.placeholder = 'Find Exact Journal Titles'" onfocus="this.placeholder = ''" placeholder="Find Exact Journal Titles" type="text" /> <input id="keywords" name="search" onfocus="" type="hidden" value="" /> <input class="submit btn btn-default" onclick="searchPrimoJournals()" type="submit" value="Search" />
            </div>
            <input name="vid" type="hidden" value="01UTXSANT_INST:DEFAULT" /> <input name="tab" type="hidden" value="jsearch_slot">  <!-- <input name="search_scope" type="hidden" value="MyInst_and_CI"> --> <input name="highlight" type="hidden" value="true" /> <input id="primoQueryJournals" name="query" type="hidden" value="any,contains" /> <input id="primoQueryJournal" name="journals" type="hidden" value="any," /> <input name="displayField" type="hidden" value="all" />
            <div class="input-group" style="margin-top: 0 !important">
               <label class="full-text" for="full-text"> <input id="full-text" name="facet" type="checkbox" value="tlevel,include,online_resources" /> Available Online</label> <label class="peer-reviewed" for="peer-reviewed"> <input id="peer-reviewed" name="facet" type="checkbox" value="tlevel,include,peer_reviewed" /> Peer Reviewed</label>
            </div>
         </form>
         <script type="text/javascript">
            function searchPrimoJournals() {
                document.getElementById("primoQueryJournals").value = "any,contains," + document.getElementById("journals").value.replace(/[,]/g, " ");
                document.getElementById("primoQueryJournal").value = "any," + document.getElementById("journals").value.replace(/[,]/g, " ");
                document.forms["journals-quicksearch"].target = "_blank;"
                
                document.forms["journals-quicksearch"].submit();
            }
         </script>
      </div><!--tab-content -->

      <div id="ebooks-pane" class="tab-pane fade"  role="tabpanel" aria-labelledby="ebooks-tab">
         <form
            action="https://utsa.primo.exlibrisgroup.com/discovery/search" id="ebooks-quicksearch" method="get"
            style="margin-top: 0 !important; padding: 0;"
            enctype="application/x-www-form-urlencoded; charset=utf-8"
            onsubmit="searchPrimoEbooks()"
            target="_blank;">
            <div class="input-group" style="margin-top: 0 !important;">
               <label class="formLabel quickSearchLabel" for="ebooks">E-Books</label>
               <input
                  id="ebooks"
                  onblur="this.placeholder = 'Find Online Books'"
                  onfocus="this.placeholder = ''"
                  placeholder="Find Online Books"
                  type="text"
                  />
               <input id="keywords" name="search" onfocus="" type="hidden" value="" />
               <input
                  class="submit btn btn-default"
                  onclick="searchPrimoEbooks()"
                  type="submit"
                  value="Search"
                  />
            </div>
            <input name="vid" type="hidden" value="01UTXSANT_INST:DEFAULT" />
            <input name="tab" type="hidden" value="Everything" />
            <input name="search_scope" type="hidden" value="MyInst_and_CI" />
            <input name="mode" type="hidden" value="Basic" />
            <input name="displayMode" type="hidden" value="full" />
            <input name="highlight" type="hidden" value="true" />
            <input
               id="primoQueryEbooks"
               name="query"
               type="hidden"
               value="any,contains,climate change"
               />
            <input name="displayField" type="hidden" value="all" />
            <input
               name="mfacet"
               type="hidden"
               value="rtype,include,books,1"
               />
            <input
               name="mfacet"
               type="hidden"
               value="rtype,include,ebook,1"
               />
            <input name="facet" type="hidden" value="tlevel,include,online_resources" />
            <div class="input-group" style="margin-top: 0 !important;">
               <a
                  class="advancedLink ml-auto"
                  href="https://utsa.primo.exlibrisgroup.com/discovery/search?vid=01UTXSANT_INST:DEFAULT&amp;sortby=rank&amp;mode=advanced"
                  target="blank"
                  >Advanced Search</a
                  >
            </div>
         </form>
         <script type="text/javascript">
            function searchPrimoEbooks() {
                document.getElementById("primoQueryEbooks").value = "any,contains," + document.getElementById("ebooks").value.replace(/[,]/g, " ");
                document.forms["ebooks-quicksearch"].target = "_blank;"
                
                document.forms["ebooks-quicksearch"].submit();
            }
         </script>
      </div><!--tab-content -->
   </div>




</div><!--homepagesearch -->

</div><!--frontdecor -->

