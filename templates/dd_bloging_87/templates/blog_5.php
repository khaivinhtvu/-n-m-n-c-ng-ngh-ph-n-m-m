<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="utf-8" />
    <?php
        $base = $document->getBase();
        if (!empty($base)) {
            echo '<base href="' . $base . '" />';
            $document->setBase('');
        }
    ?>
     <?php 
	$app = JFactory::getApplication();
    $tplparams	= $app->getTemplate(true)->params;
	$close_slideshow = htmlspecialchars($tplparams->get('close_slideshow'));
$close_text = htmlspecialchars($tplparams->get('close_text'));
	$fc = htmlspecialchars($tplparams->get('fc'));
	$tc = htmlspecialchars($tplparams->get('tc'));
	$gc = htmlspecialchars($tplparams->get('gc'));
	$pc = htmlspecialchars($tplparams->get('pc'));
	$allicon = htmlspecialchars($tplparams->get('allicon'));
    $bc = htmlspecialchars($tplparams->get('bc'));
	$bc1 = htmlspecialchars($tplparams->get('bc1'));
	$bc2 = htmlspecialchars($tplparams->get('bc2'));
	$bc3 = htmlspecialchars($tplparams->get('bc3'));
$pboxc = htmlspecialchars($tplparams->get('pboxc'));
$close_ib = htmlspecialchars($tplparams->get('close_ib'));
$mc = htmlspecialchars($tplparams->get('mc'));
	?>
   <link href="<?php echo $document->params->get('fav'); ?>" rel="icon" type="image/x-icon" />
    <script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script src="<?php echo addThemeVersion($document->templateUrl . '/jquery.js'); ?>"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="<?php echo addThemeVersion($document->templateUrl . '/bootstrap.min.js'); ?>"></script>
<link class="" href='//fonts.googleapis.com/css?family=Anton:regular|Allura:regular&subset=latin' rel='stylesheet' type='text/css'>
<script src="<?php echo addThemeVersion($document->templateUrl . '/CloudZoom.js'); ?>" type="text/javascript"></script>
    
    <?php echo $document->head; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/bootstrap.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/bootstrap.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <?php if ($GLOBALS['theme_settings']['is_preview'] || !file_exists($themeDir . '/css/template.min.css')) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.css'); ?>" media="screen" />
    <?php else : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.min.css'); ?>" media="screen" />
    <?php endif; ?>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/template.ie.css'); ?>" media="screen"/>
    <![endif]-->
    <?php if(('edit' == JRequest::getVar('layout') && 'form' == JRequest::getVar('view')) ||
        ('com_config' == JRequest::getVar('option') && 'config.display.modules' == JRequest::getVar('controller'))) : ?>
    <link rel="stylesheet" href="<?php echo addThemeVersion($document->templateUrl . '/css/media.css'); ?>" media="screen" />
    <script src="<?php echo addThemeVersion($document->templateUrl . '/js/template.js'); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.js'); ?>"></script>
    <!--[if lte IE 9]>
    <script src="<?php echo addThemeVersion($document->templateUrl . '/script.ie.js'); ?>"></script>
    <![endif]-->
    
</head>
<body class=" bootstrap bd-body-5 bd-pagebackground">
    <header class=" bd-headerarea-1">
        <section class=" bd-section-1 bd-tagstyles" id="section1" data-section-title="">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutcontainer-10 bd-background-width">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                ">
                <div class=" bd-layoutcolumn-col-25 
 col-lg-18
 col-sm-12">
    <div class="bd-layoutcolumn-25"><div class="bd-vertical-align-wrapper"><p class=" bd-textblock-33 bd-tagstyles bd-content-element">
   


    <?php echo $document->params->get('logo1'); ?>


</p>
	
		<p class=" bd-textblock-34 bd-tagstyles bd-content-element">
  
<?php echo $document->params->get('logo2'); ?>

</p></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-26 
 col-lg-6
 col-sm-12
 hidden-xs">
    <div class="bd-layoutcolumn-26 hidden-xs"><div class="bd-vertical-align-wrapper"><?php if ($allicon == 1) { ?><div class=" bd-socialicons-5">
    
        <?php if ($fc == 1) { ?><a target="_blank" class=" bd-socialicon-17 bd-socialicon" href="<?php echo $document->params->get('facebook'); ?>">
    <span></span><span></span>
</a><?php } ?>
    
        <?php if ($tc == 1) { ?><a target="_blank" class=" bd-socialicon-18 bd-socialicon" href="<?php echo $document->params->get('twitter'); ?>">
    <span></span><span></span>
</a><?php } ?>
    
        <?php if ($gc == 1) { ?><a target="_blank" class=" bd-socialicon-19 bd-socialicon" href="<?php echo $document->params->get('google'); ?>">
    <span></span><span></span>
</a><?php } ?>
    
        <?php if ($pc == 1) { ?><a target="_blank" class=" bd-socialicon-20 bd-socialicon" href="<?php echo $document->params->get('pinterest'); ?>">
    <span></span><span></span>
</a><?php } ?>
</div><?php } ?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</section>
	
		<?php
    renderTemplateFromIncludes('hmenu_1', array());
?>
</header>
	
		<div class=" bd-stretchtobottom-4 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-5">
<div class="bd-sheetstyles bd-contentlayout-5 ">
    <div class="bd-container-inner">

        
        <div class="bd-flex-vertical bd-stretch-inner">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide">
                    

                    <div class=" bd-layoutitemsbox-22 bd-flex-wide">
    <div class=" bd-content-4">
    <div class="bd-container-inner">
        <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
            $document->view->componentWrapper('common');
            echo '<jdoc:include type="component" />';
        ?>
    </div>
</div>
</div>

        
                    
 <?php renderTemplateFromIncludes('sidebar_area_6'); ?>
                </div>
                
 <?php renderTemplateFromIncludes('sidebar_area_2'); ?>
            </div>
            
        </div>

    </div>
</div></div>
	
		<footer class=" bd-footerarea-1">
        <section class=" bd-section-10 bd-tagstyles" id="section10" data-section-title="">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-layoutbox-1 bd-background-width clearfix">
    <div class="bd-container-inner">
        <p class=" bd-textblock-17 bd-tagstyles bd-content-element">
   
</p>
    </div>
</div>
        </div>
    </div>
</section>
</footer>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1">
    <span class=" bd-icon-66"></span>
</a></div>
</body>
</html>