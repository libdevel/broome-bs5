<style>
.homepagesearch {/*--bs-nav-link-padding-x: 2rem; background-color:#fff; padding:1rem; */ }
</style>



<div class="frontdecor">
   <div class="homepagesearch tabs">
        <div class="tab-content">

<form class="form-inline text-center" id="simple" role="search" name="searchForm" method="get" target="_self" action="https://suny-bsc.primo.exlibrisgroup.com/discovery/search" enctype="application/x-www-form-urlencoded; charset=utf-8" onsubmit="searchPrimo()">
        <!--<div class="row">
            <img class="img-responsive center-block" style="max-height: 50px;" alt="AllSearch discovery search" src="https://libapps.s3.amazonaws.com/customers/744/images/ALLsearch-sm-blk.png" />
        </div>-->
        <div class="row">
            <div class="col-xs-12 col-md-12">
            <img class="img-responsive center-block" style="max-height: 50px;" alt="AllSearch discovery search" src="https://libapps.s3.amazonaws.com/customers/744/images/ALLsearch-sm-blk.png" />

              <!-- Customizable Parameters -->
 
            <input type="hidden" name="vid" value="01SUNY_BSC:01SUNY_BSC">
            <input id="primoTab" type="hidden" name="tab" value="Everything">
            <input id="primoScope" type="hidden" name="search_scope" value="MyInst_and_CI">
            <!-- Fixed parameters -->
            <input type="hidden" name="query" id="primoQuery">
            
            <!-- Enable this if "Expand My Results" is enabled by default in Views Wizard -->
            <input type="hidden" name="pcAvailabilty" value="true">
            <input class="input-lg form-control" type="text" id="primoQueryTemp" value="" size="65">
 
    <!-- Select Statement with values from case Fires onchange -->
    <select class="input-lg form-control" id="scopeSelecter" name="scopeSelecter" onchange="primoScopeSwitch(this)">
      <option value="Everything">Everything</option>
      <option value="Online">Online Resources</option>
      <option value="CourseReserves">Course Reserves</option>
      <option value="LibraryCatalog">Library Catalog</option>
      <option value="SUNY_Catalog">SUNY Catalog</option>
    </select>

            <!-- Search Button -->
            <input class="btn btn-default input-lg" id="go" title="Search" onclick="searchPrimo()" type="button" value="SEARCH" alt="Search">
        </div>
   </form>

	<form name="searchForm" class="input-group input-group-lg" role="search" id="all-search" method="get" action="https://suny-bcc.primo.exlibrisgroup.com/discovery/search" onsubmit="searchPrimo();" enctype="application/x-www-form-urlencoded; charset=utf-8" >

         <div class="input-group input-group-lg">   
         <div class="col-md-3">
            <!-- Select Statement with values from case  Fires onchange --> 
 
            <select id="scopeSelecter" class="form-select" name="scopeSelecter" onchange="primoScopeSwitch(this)" aria-label="Search by Type">
               <option value="Everything">Everything</option>
               <option value="CentralIndex">Articles</option>
               <option value="LibraryCatalog">Books & Media</option>
               <option value="CourseReserves">Course Reserves</option>
               <option value="WorldCat">Other Libraries</option>
            </select>
         </div><!-- col-md-4 -->
         <!-- Customizable Parameters -->
         <input name="vid" type="hidden" value="01SUNY_BCC:01SUNY_BCC"> 
         <input id="primoTab" name="tab" type="hidden" value="Everything"> 
         <input id="primoScope" name="search_scope" type="hidden" value="MyInst_and_CI"> 

         <!-- Fixed parameters --> 
         <input id="primoQuery" name="query" type="hidden"> 
         <input name="displayField" type="hidden" value="all"> 

         <!-- Enable this if "Expand My Results" is enabled by default in Views Wizard --> 
         <input name="pcAvailabiltyMode" type="hidden" value="true">
        
         <div class="col-md-7">
            <input id="primoQueryTemp" class="focus form-control" size="35" type="text" value="" placeholder="Find books, media, and more" aria-label="Input search terms here">  
         </div><!-- col-md-7 -->

         <!-- Search Button --> 
         <div class="edit-actions">
            <input alt="Search" id="go" class="btn btn-info" onclick="searchPrimo()" title="Search" type="button" value="Search">
         </div><!-- col-md-1 -->
   </div><!-- row -->
   </form>
   <div class="library-links">
   <a target="_blank" href="https://suny-bcc.primo.exlibrisgroup.com/discovery/search?vid=01SUNY_BCC:01SUNY_BCC&amp;lang=en&amp;sortby=rank&amp;mode=advanced">Advanced</a>
   </div><!-- library links -->

</div>
</div>
<!--homepagesearch -->
</div>
<!--frontdecor -->

<script>
function searchPrimo() {
    event.preventDefault();
    document.getElementById("primoQuery").value = "any,contains," + document.getElementById("primoQueryTemp").value;
    document.forms["searchForm"].submit();
}

function primoScopeSwitch(scope) {
    const tab = document.getElementById("primoTab");
    const primoScope = document.getElementById("primoScope");
    const queryTemp = document.getElementById("primoQueryTemp");
    
    switch(scope.value) {
        case "Everything":
            tab.value = "Everything";
            primoScope.value = "MyInst_and_CI";
            queryTemp.placeholder = "Search all library resources";
            break;

        case "LibraryCatalog":
            tab.value = "LibraryCatalog";
            primoScope.value = "MyInstitution";
            queryTemp.placeholder = "Search the Library Catalog";
            break;

        case "CourseReserves":
            tab.value = "CourseReserves";
            primoScope.value = "CourseReserves";
            queryTemp.placeholder = "Find items on course reserve";
            break;

        case "Online":
            tab.value = "ONLINE";
            primoScope.value = "ONLINE";
            queryTemp.placeholder = "Find items online";
            break;

        case "NEWSUNY":
            tab.value = "NEWSUNY";
            primoScope.value = "NewDiscoveryNetwork";
            queryTemp.placeholder = "Search the SUNY Catalog";
            break;
    }
}

window.addEventListener('load', function() {
    const scope = document.getElementById("scopeSelecter");
    primoScopeSwitch(scope);
});
</script>

