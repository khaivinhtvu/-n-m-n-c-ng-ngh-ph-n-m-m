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
<style>
.bd-slide-1 {background-image: url(<?php echo $document->params->get('foto1'); ?>);}
.bd-slide-2 {background-image: url(<?php echo $document->params->get('foto2'); ?>);}
.bd-slide-3 {background-image: url(<?php echo $document->params->get('foto3'); ?>);}
.bd-slide-4 {background-image: url(<?php echo $document->params->get('foto4'); ?>);}
.bd-section-8{background-image: url(<?php echo $document->params->get('bgm'); ?>);}
</style>
<body class=" bootstrap bd-body-1 bd-pagebackground">
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
</div><?php } ?>

</div></div>
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
	
		<?php if ($close_slideshow == 1) { ?><div class=" bd-parallaxbackground-3 bd-parallax-bg-effect" data-control-selector=".bd-slider-3">



<div id="carousel-3" class="bd-slider bd-slider-3 bd-background-width  carousel slide bd-carousel-fade">
    

    

    

    <div class="bd-slides carousel-inner">
       <div class=" bd-slide-2 bd-background-width bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-14 animated" data-animation-name="slideInUp"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    >
<p class=" bd-textblock-57 hidden-xs bd-tagstyles bd-content-element">
<?php if ($close_text == 1) { ?><?php echo $document->params->get('s1'); ?><?php } ?>
</p>
</div>
	
		 <?php if ($bc == 1) { ?><div class=" bd-animation-11 animated" data-animation-name="fadeInDownBig"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<div class=" bd-animation-12 animated" data-animation-name="pulse"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="300ms"
                                    data-animation-infinited="false"
                                    ><div class=" bd-boxcontrol-3 hidden-xs">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-13 animated" data-animation-name="bounce"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="800ms"
                                    data-animation-infinited="false"
                                    ><div class=" bd-textgroup-5 bd-block-16">
    <div class="bd-container-inner">
        <div class="media">
            
 <img class=" img-circle bd-imagelink-31 pull-left media-object " src="<?php echo $document->params->get('p1'); ?>">
            <div class="media-body">
                
                    <h4 class="media-heading  bd-blockheader bd-tagstyles bd-content-element">
<?php echo $document->params->get('p2'); ?></h4>
                
                <div class=" bd-blockcontent bd-tagstyles bd-content-element">
<?php echo $document->params->get('p3'); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
        </div>
    </div>
</div>
</div>
</div>
	
		<div class=" bd-animation-10 animated" data-animation-name="fadeInUp"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="1400ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<img class="bd-imagestyles bd-imagelink-30 hidden-xs   " src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/a0c4ebd5bfc02561ca6f5ffad11de2dd_03.png"></div><?php } ?>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-1 bd-background-width bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-2 animated" data-animation-name="slideInUp"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    >
<p class=" bd-textblock-32 hidden-xs bd-tagstyles bd-content-element">
<?php if ($close_text == 1) { ?><?php echo $document->params->get('s3'); ?><?php } ?>
</p>
</div>
	
		<?php if ($bc1 == 1) { ?><div class=" bd-animation-3 animated" data-animation-name="fadeInDownBig"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<div class=" bd-animation-4 animated" data-animation-name="pulse"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="300ms"
                                    data-animation-infinited="false"
                                    ><div class=" bd-boxcontrol-2 hidden-xs">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-5 animated" data-animation-name="bounce"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="800ms"
                                    data-animation-infinited="false"
                                    ><div class=" bd-textgroup-4 bd-block-14">
    <div class="bd-container-inner">
        <div class="media">
            
 <img class=" img-circle bd-imagelink-20 pull-left media-object " src="<?php echo $document->params->get('p4'); ?>">
            <div class="media-body">
                
                    <h4 class="media-heading  bd-blockheader bd-tagstyles bd-content-element"><?php echo $document->params->get('p5'); ?></h4>
                
                <div class=" bd-blockcontent bd-tagstyles bd-content-element">
<?php echo $document->params->get('p6'); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
        </div>
    </div>
</div>
</div>
</div>
	
		<div class=" bd-animation-6 animated" data-animation-name="fadeInUp"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="1400ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<img class="bd-imagestyles bd-imagelink-21 hidden-xs   " src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/a0c4ebd5bfc02561ca6f5ffad11de2dd_03.png"></div><?php } ?>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-3 bd-background-width bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-18 animated" data-animation-name="slideInUp"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    >
<p class=" bd-textblock-19 hidden-xs bd-tagstyles bd-content-element">

<?php if ($close_text == 1) { ?><?php echo $document->params->get('s5'); ?><?php } ?>
</p>
</div>
	
		<?php if ($bc2 == 1) { ?><div class=" bd-animation-15 animated" data-animation-name="fadeInDownBig"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<div class=" bd-animation-16 animated" data-animation-name="pulse"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="300ms"
                                    data-animation-infinited="false"
                                    ><div class=" bd-boxcontrol-1 hidden-xs">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-17 animated" data-animation-name="bounce"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="800ms"
                                    data-animation-infinited="false"
                                    ><div class=" bd-textgroup-12 bd-block-23">
    <div class="bd-container-inner">
        <div class="media">
            
 <img class=" img-circle bd-imagelink-11 pull-left media-object " src="<?php echo $document->params->get('p7'); ?>">
            <div class="media-body">
                
                    <h4 class="media-heading  bd-blockheader bd-tagstyles bd-content-element"><?php echo $document->params->get('p8'); ?></h4>
                
                <div class=" bd-blockcontent bd-tagstyles bd-content-element">
<?php echo $document->params->get('p9'); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
        </div>
    </div>
</div>
</div>
</div>
	
		<div class=" bd-animation-9 animated" data-animation-name="fadeInUp"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="1400ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<img class="bd-imagestyles bd-imagelink-10 hidden-xs   " src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/a0c4ebd5bfc02561ca6f5ffad11de2dd_03.png"></div><?php } ?>
        </div>
    </div>
</div>
	
		<div class=" bd-slide-4 bd-background-width bd-slide item"
    
    
    >
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-26 animated" data-animation-name="slideInUp"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    >
<p class=" bd-textblock-20 hidden-xs bd-tagstyles bd-content-element">

<?php if ($close_text == 1) { ?><?php echo $document->params->get('s7'); ?><?php } ?>
</p>
</div>
	
		<?php if ($bc3 == 1) { ?><div class=" bd-animation-22 animated" data-animation-name="fadeInDownBig"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<div class=" bd-animation-23 animated" data-animation-name="pulse"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="300ms"
                                    data-animation-infinited="false"
                                    ><div class=" bd-boxcontrol-4 hidden-xs">
    <div class="bd-container-inner">
        <div class="bd-container-inner-wrapper">
            <div class=" bd-animation-25 animated" data-animation-name="bounce"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="800ms"
                                    data-animation-infinited="false"
                                    ><div class=" bd-textgroup-13 bd-block-24">
    <div class="bd-container-inner">
        <div class="media">
            
 <img class=" img-circle bd-imagelink-13 pull-left media-object " src="<?php echo $document->params->get('p10'); ?>">
            <div class="media-body">
                
                    <h4 class="media-heading  bd-blockheader bd-tagstyles bd-content-element"><?php echo $document->params->get('p11'); ?></h4>
                
                <div class=" bd-blockcontent bd-tagstyles bd-content-element">
<?php echo $document->params->get('p12'); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
        </div>
    </div>
</div>
</div>
</div>
	
		<div class=" bd-animation-21 animated" data-animation-name="fadeInUp"
                                    data-animation-event="slidein"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="1400ms"
                                    data-animation-infinited="false"
                                    
 data-animation-display="none">
<img class="bd-imagestyles bd-imagelink-12 hidden-xs   " src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/a0c4ebd5bfc02561ca6f5ffad11de2dd_03.png"></div><?php } ?>
        </div>
    </div>
</div>
    </div>

    

    

    
        <div class="bd-left-button">
    <a class=" bd-carousel-6" href="#">
        <span></span>
    </a>
</div>

<div class="bd-right-button">
    <a class=" bd-carousel-6" href="#">
        <span></span>
    </a>
</div>

    <script type="text/javascript">
        /* <![CDATA[ */
        if ('undefined' !== typeof initSlider){
            initSlider(
                '.bd-slider-3',
                'bd-left-button',
                'bd-right-button',
                '.bd-carousel-6',
                '.bd-indicators',
                4800,
                "hover",
                true,
                true
            );
        }
        /* ]]> */
    </script>
</div></div><?php } ?>
	
		<?php if ($close_ib == 1) { ?><section class=" bd-section-18 bd-tagstyles bd-custom-image" id="section4" data-section-title="Testimonials Two Thirds">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-animation-1 animated" data-animation-name="fadeInDown"
                                    data-animation-event="onload"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    >
<div class="container  bd-containereffect-7"><div class=" bd-layoutcontainer-38">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-middle
                ">
                <div class=" bd-layoutcolumn-col-91 
 col-sm-16">
    <div class="bd-layoutcolumn-91"><div class="bd-vertical-align-wrapper"><p class=" bd-textblock-70 bd-tagstyles bd-content-element">
"<?php echo $document->params->get('it2'); ?>"
</p></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-93 
 col-sm-8">
    <div class="bd-layoutcolumn-93"><div class="bd-vertical-align-wrapper"><img class="bd-imagestyles bd-imagelink-37   " src="<?php echo $document->params->get('itf'); ?>">
	
		<h4 class=" bd-textblock-72 bd-tagstyles bd-content-element">
<?php echo $document->params->get('it1'); ?>
</h4>
	
		<h5 class=" bd-textblock-74 bd-tagstyles bd-content-element">
<?php echo $document->params->get('it1a'); ?>
</h5></div></div>
</div>
            </div>
        </div>
    </div>
</div></div>
</div>
        </div>
    </div>
</section><?php } ?>
	
		<?php if ($pboxc == 1) { ?><section class=" bd-section-20 bd-tagstyles bd-custom-image" id="section4" data-section-title="Testimonials Four Columns">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class=" bd-animation-24 animated" data-animation-name="fadeInUpBig"
                                    data-animation-event="scroll"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    >
<div class="container  bd-containereffect-9"><div class=" bd-layoutcontainer-40">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-top
                ">
                <div class=" bd-layoutcolumn-col-95 
 col-lg-6
 col-sm-12">
    <div class="bd-layoutcolumn-95"><div class="bd-vertical-align-wrapper"><img class="bd-imagestyles bd-imagelink-39   " src="<?php echo $document->params->get('cf1'); ?>">
	
		<h4 class=" bd-textblock-76 bd-tagstyles bd-content-element">
    <?php echo $document->params->get('ct1'); ?>
</h4>
	
		<h5 class=" bd-textblock-78 bd-tagstyles bd-content-element">
<?php echo $document->params->get('ct1a'); ?>
</h5>
	
		<h6 class=" bd-textblock-80 bd-tagstyles bd-content-element">
<?php echo $document->params->get('cte1'); ?>
</h6></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-97 
 col-lg-6
 col-sm-12">
    <div class="bd-layoutcolumn-97"><div class="bd-vertical-align-wrapper"><img class="bd-imagestyles bd-imagelink-41   " src="<?php echo $document->params->get('cf2'); ?>">
	
		<h4 class=" bd-textblock-82 bd-tagstyles bd-content-element">
<?php echo $document->params->get('ct2'); ?>
</h4>
	
		<h5 class=" bd-textblock-84 bd-tagstyles bd-content-element">
<?php echo $document->params->get('ct2a'); ?>
</h5>
	
		<h6 class=" bd-textblock-86 bd-tagstyles bd-content-element">
<?php echo $document->params->get('cte2'); ?>
</h6></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-99 
 col-lg-6
 col-sm-12">
    <div class="bd-layoutcolumn-99"><div class="bd-vertical-align-wrapper"><img class="bd-imagestyles bd-imagelink-43   " src="<?php echo $document->params->get('cf3'); ?>">
	
		<h4 class=" bd-textblock-88 bd-tagstyles bd-content-element">
<?php echo $document->params->get('ct3'); ?>
</h4>
	
		<h5 class=" bd-textblock-90 bd-tagstyles bd-content-element">
<?php echo $document->params->get('ct3a'); ?>
</h5>
	
		<h6 class=" bd-textblock-92 bd-tagstyles bd-content-element">
<?php echo $document->params->get('cte3'); ?>
</h6></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-102 
 col-lg-6
 col-sm-12">
    <div class="bd-layoutcolumn-102"><div class="bd-vertical-align-wrapper"><img class="bd-imagestyles bd-imagelink-45   " src="<?php echo $document->params->get('cf4'); ?>">
	
		<h4 class=" bd-textblock-94 bd-tagstyles bd-content-element">
<?php echo $document->params->get('ct4'); ?>
</h4>
	
		<h5 class=" bd-textblock-96 bd-tagstyles bd-content-element">
<?php echo $document->params->get('ct4a'); ?>
</h5>
	
		<h6 class=" bd-textblock-98 bd-tagstyles bd-content-element">
<?php echo $document->params->get('cte4'); ?>
</h6></div></div>
</div>
            </div>
        </div>
    </div>
</div></div>
</div>
        </div>
    </div>
</section><?php } ?>
	
		<div class=" bd-stretchtobottom-1 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-9">
<div class="bd-sheetstyles bd-contentlayout-9 ">
    <div class="bd-container-inner">

        
        <div class="bd-flex-vertical bd-stretch-inner">
            
            <div class="bd-flex-horizontal bd-flex-wide">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide">
                    
 <?php renderTemplateFromIncludes('sidebar_area_5'); ?>

                    <div class=" bd-layoutitemsbox-27 bd-flex-wide">
    <div class=" bd-content-9">
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
            
 <?php renderTemplateFromIncludes('sidebar_area_4'); ?>
        </div>

    </div>
</div></div>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1">
    <span class=" bd-icon-66"></span>
</a></div>
	
		<div class=" bd-layoutcontainer-28">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-top
                ">
                <div class=" bd-layoutcolumn-col-60 
 col-md-6
 col-sm-12
 col-xs-24">
    <div class="bd-layoutcolumn-60"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_2');
?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-61 
 col-md-6
 col-sm-12
 col-xs-24">
    <div class="bd-layoutcolumn-61"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_3');
?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-62 
 col-md-6
 col-sm-12
 col-xs-24">
    <div class="bd-layoutcolumn-62"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_4');
?></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-63 
 col-md-6
 col-sm-12
 col-xs-24">
    <div class="bd-layoutcolumn-63"><div class="bd-vertical-align-wrapper"><?php
    renderTemplateFromIncludes('joomlaposition_5');
?></div></div>
</div>
            </div>
        </div>
    </div>
</div>
	
		<?php if ($mc == 1) { ?><div class=" bd-parallaxbackground-4 bd-parallax-bg-effect" data-control-selector=".bd-section-8"><section class=" bd-section-8 bd-tagstyles" id="section4" data-section-title="Map Two Columns">
    <div class="bd-section-inner">
        <div class="bd-section-align-wrapper">
            <div class="container  bd-containereffect-4"><div class=" bd-layoutcontainer-25">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
                
                    bd-row-flex
                    
 bd-row-align-middle
                ">
                <div class=" bd-layoutcolumn-col-70 
 col-sm-12">
    <div class="bd-layoutcolumn-70"><div class="bd-vertical-align-wrapper"><div class=" bd-animation-7 animated" data-animation-name="fadeInLeft"
                                    data-animation-event="scroll"
                                    data-animation-duration="1000ms"
                                    data-animation-delay="0ms"
                                    data-animation-infinited="false"
                                    ><div class="bd-imagestyles bd-googlemap-4 ">
    <div class="embed-responsive" style="height: 100%; width: 100%;">
        <iframe class="embed-responsive-item"
                src="//maps.google.com/maps?output=embed&q=<?php echo $document->params->get('map1'); ?>, <?php echo $document->params->get('map2'); ?>&t=m"></iframe>
    </div>
</div>
</div></div></div>
</div>
	
		<div class=" bd-layoutcolumn-col-69 
 col-sm-12">
    <div class="bd-layoutcolumn-69"><div class="bd-vertical-align-wrapper"><h3 class=" bd-textblock-16 bd-tagstyles bd-content-element">
<?php echo $document->params->get('a1'); ?>
</h3>
	
		<div class=" bd-textgroup-11 bd-block-22">
    <div class="bd-container-inner">
        <div class="media">
            
 <img class="bd-imagestyles bd-imagelink-9 pull-left media-object " src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/marker.png">
            <div class="media-body">
                
                
                <div class=" bd-blockcontent bd-tagstyles bd-content-element">

<?php echo $document->params->get('a2'); ?><br>
<?php echo $document->params->get('a3'); ?>

                </div>
            </div>
            
        </div>
    </div>
</div>
	
		<p class=" bd-textblock-15 bd-tagstyles bd-content-element">
<?php echo $document->params->get('a4'); ?>
</p></div></div>
</div>
            </div>
        </div>
    </div>
</div></div>
        </div>
    </div>
</section></div><?php } ?>
	
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
<?php if ($ac == 1) { ?><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $document->params->get('analytics'); ?>', 'auto');
  ga('send', 'pageview');

</script><?php } ?>
</body>
</html>