<?php   
//prevent direct access to file
defined('_JEXEC') or die;
$app = JFactory::getApplication();
//JHtml::_('jquery.framework');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
<?php //MOBILE DETECTION - ADD LATER
//include("mdetect.php");
//$uagent_obj = new uagent_info(); //MOBILE DETECTION OBJECT

?>
<jdoc:include type="head" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/ipe_template/bootstrap/css/bootstrap.min.css" type="stylesheet" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
<script src="https://code.jquery.com/jquery.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/ipe_template/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/ipe_template/css/template.css" type="text/css" />
<script src="/templates/ipe_template/js/scripts.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../../bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<!-- HEADER AND MENU ALL PAGES -->
    <div class="container" id="pagecontent">
		<div class="row" id="header">
        	<div class="col-md-6" id="logo">
            	<jdoc:include type="modules" name="logo" style="xhtml"/>
            </div>
            <div class="col-md-4" id="top_search">
            	<div id='cse-search-form' style='width: 100%;'>Loading</div>
					<script src='//www.google.com/jsapi' type='text/javascript'></script>
                    <script type='text/javascript'>
                    google.load('search', '1', {language: 'en', style: google.loader.themes.V2_DEFAULT});
                    google.setOnLoadCallback(function() {
                      var customSearchOptions = {};
                      var orderByOptions = {};
                      orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
                      customSearchOptions['enableOrderBy'] = true;
                      customSearchOptions['orderByOptions'] = orderByOptions;
                      var customSearchControl =   new google.search.CustomSearchControl('000012320965371485159:-8lehgmrk3e', customSearchOptions);
                      customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                      var options = new google.search.DrawOptions();
                      options.enableSearchboxOnly("/search-results/", 'q');
                      options.setAutoComplete(true);
                      customSearchControl.draw('cse-search-form', options);
                    }, true);
                    </script>
            </div>
            <div class="col-md-2" id="top_right">
            	<jdoc:include type="modules" name="top_right" style="xhtml"/>
            </div>
        </div> 
         
        <div class="row" id="menu">
        	<div class="col-md-12" id="top_menu">
            	<jdoc:include type="modules" name="top_menu" style="xhtml"/>
            </div>
        </div>
        
   <?php if($this->params->get('setLayout')== 'home') {
   //If home page
   ?>
        <div class="row" id="showcase">
        	<div class="col-md-4" id="showcase">
            	<jdoc:include type="modules" name="showcase" style="xhtml"/>
            </div>
            <div class="col-md-8" id="features">
            	<div class="row">
                	<jdoc:include type="modules" name="featuretray" style="xhtml"/>
       	 		</div>
                <jdoc:include type="modules" name="below-feature" style="xhtml" />   
            </div>
        </div><!-- end showcase-->
        
        <div class="row" id="main_cols">
        	<div class="col-md-6" id="maincol-1">
            	<jdoc:include type="modules" name="maincol-1" style="xhtml"/>
            </div>
            <div class="col-md-6" id="maincol-2">
            	<jdoc:include type="modules" name="maincol-2" style="xhtml"/>
            </div>
        </div><!--end main_cols-->
          
    <?php } 
	//End IF home page
	?>   
    
    <?php if($this->params->get('setLayout')== 'wideRight') {
   	//If wideRight page
   	?>
    	<div class="row" id="main_content">
        	<div class="col-md-3" id="sidebar-1">
            	<jdoc:include type="modules" name="sidebar-1" style="xhtml" />
          	</div>
            <div class="col-md-9" id="component">
            	<jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
          	</div>
      	</div>      
   
   	<?php } 
	//End IF wideRight
	?> 
    	<?php if($this->params->get('setLayout')== 'fullPage') {
   	//If fullPage page
   	?>
    	<div class="row" id="main_content">
            <div class="col-md-12" id="component">
            	<jdoc:include type="message" />
                <jdoc:include type="component" />
          	</div>
            <div class="col-md-12" id="undercomponent">
                <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
          	</div>
   
   	<?php } 
	//End IF fullPage
	?> 
       
       <!-- FOOTER ON ALL PAGES -->
        <div class="row" id="footer">
        	<div class="col-md-12" id="footer">
            	<jdoc:include type="modules" name="footer" style="xhtml"/>
            </div>
        </div>
        
               	
	</div><!--end container-->

    
</body>
</html>
