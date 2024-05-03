<?php
/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */
defined('_JEXEC') or die;
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = $this;
$templateUrl = $document->baseurl . '/templates/' . $document->template;
Artx::load("Artx_Page");
$view = $this->artx = new ArtxPage($this);
$view->componentWrapper();
JHtml::_('behavior.framework', true);

?><?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/close.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
     
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Clicker+Script|Courgette&amp;subset=latin">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
        <!--animate-->
        <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/animate.css" />
     <!--slideshow header start-->

<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/slider/jquery.slider.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/js/slider/themes/default/jquery.slider.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/js/slider/themes/default/jquery.slider.ie6.css" />
<![endif]-->
<!--social-->
<link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/social.css" type="text/css" media="screen" />
<!--To Top-->

<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
$(".scroll").click(function(event){		
event.preventDefault();
$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
</head>
<body>
<div id="dd-main">
<header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>


    <div class="dd-shapes">
    <!--social-->
    <div class="dd-textblock dd-textblock-1951639157" data-left="100%">
        <div class="dd-textblock-1951639157-text-container">
        <div class="dd-textblock-1951639157-text"><a href="<?php echo $this->params->get('facebook'); ?>" target="_top" class="dd-facebook-tag-icon"></a></div>
    </div>
    
</div><div class="dd-textblock dd-textblock-1005125174" data-left="100%">
        <div class="dd-textblock-1005125174-text-container">
        <div class="dd-textblock-1005125174-text"><a href="<?php echo $this->params->get('twitter'); ?>" target="_top" class="dd-twitter-tag-icon"></a></div>
    </div>
    
</div><div class="dd-textblock dd-textblock-1082672207" data-left="100%">
        <div class="dd-textblock-1082672207-text-container">
        <div class="dd-textblock-1082672207-text"><a href="<?php echo $this->params->get('rss'); ?>" target="_blank" class="dd-rss-tag-icon"></a></div>
    </div>
    
</div>
    <!--end social-->
<div class="dd-object1630835330" data-left="49.5%"></div>
<div class="dd-object212126398" data-left="49.35%"></div>
<div class="dd-object1914679909" data-left="100%"></div>
<div class="dd-object2127363863" data-left="0%"></div>
<div class="dd-object1621875994" data-left="91.07%"></div>
<div class="dd-object901565565" data-left="100%"></div>

<div class="dd-object1988228107" data-left="51.85%">   <?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/slideshow.php'; ?>
  
</div>
<div class="dd-object971803591" data-left="0%"></div>
<div class="dd-object1849573665" data-left="0%"></div>

<div class="dd-object2049635136" data-left="3.32%"></div>
<div class="dd-object1700483951" data-left="94.61%"></div>
<div class="dd-object1504127406" data-left="100%"></div>
<div class="dd-object2132175335" data-left="80.43%"></div>
<div class="dd-textblock dd-object555366379" data-left="97.22%">
        <div class="dd-object555366379-text-container"><a href="<?php echo $this->params->get('hl'); ?>" class="przy"><?php echo $this->params->get('bt'); ?></a></div>
        <div class="dd-object555366379-text">
          <p><img src="<?php echo $this->params->get('ft'); ?>" width="150" height="188" alt="hair saloon"><?php echo $this->params->get('headerinfo'); ?><br></p>
    </div>
    
</div><div class="dd-textblock dd-object940619562" data-left="99.87%">
        <div class="dd-object940619562-text-container">
        <div class="dd-object940619562-text"><?php echo $this->params->get('telefon'); ?></div>
    </div>
    
</div><div class="dd-textblock dd-object1040998154" data-left="98.71%">
        <div class="dd-object1040998154-text-container">
        <div class="dd-object1040998154-text"><?php echo $this->params->get('email'); ?></div>
    </div>
    
</div>
            </div>
<h1 class="dd-headline" data-left="23.3%">
    <a href="<?php echo $document->baseurl; ?>/"><?php echo $this->params->get('siteTitle'); ?></a>
</h1>
<h2 class="dd-slogan" data-left="20.57%"><?php echo $this->params->get('siteSlogan'); ?></h2>




<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="dd-nav">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="dd-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="dd-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
    </nav>
<?php endif; ?>

                    
</header>
<div class="dd-sheet clearfix">
            <?php echo $view->position('position-15', 'dd-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'dd-block'); ?>
<div class="dd-layout-wrapper">
                <div class="dd-content-layout">
                    <div class="dd-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="dd-layout-cell dd-sidebar1">
<?php echo $view->position('position-7', 'dd-block'); ?>
<?php echo $view->position('position-4', 'dd-block'); ?>
<?php echo $view->position('position-5', 'dd-block'); ?>




                        </div>
<?php endif; ?>

                        <div class="dd-layout-cell dd-content">
<?php
  echo $view->position('position-19', 'dd-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'dd-article');
  echo $view->position('position-12', 'dd-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' dd-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'dd-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'dd-article');
  echo $view->position('position-25', 'dd-nostyle');
?>



                        </div>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'dd-block'); ?>
<?php echo $view->position('position-26', 'dd-nostyle'); ?>

<footer class="dd-footer">
<?php if ($view->containsModules('position-27')) : ?>
    <?php echo $view->position('position-27', 'dd-nostyle'); ?>
<?php else: ?>
<h1>
</h1><span style="text-shadow: rgba(255, 255, 255, 0.480469) 0px 1px 0px;"><span style="color: rgb(255, 225, 184); font-style: italic; line-height: 48px; white-space: nowrap; font-family: 'Courier New'; font-size: 26px;"><a href="#" contenteditable="true" id="headline" style="text-shadow: rgb(23, 23, 23) 1px 0px 0px, rgb(23, 23, 23) -1px 0px 0px, rgb(23, 23, 23) 0px -1px 0px, rgb(23, 23, 23) 0px 1px 0px, rgba(0, 0, 0, 0.980469) 0px 0px 10px; color: rgb(255, 225, 184); outline-color: rgb(100, 100, 100);" name="headline"></a></span></span><p><span style="text-shadow: rgba(255, 255, 255, 0.480469) 0px 1px 0px;">Copyright © <?php echo date("Y");?> <?php echo $this->params->get('footer'); ?></span></p>
<?php endif; ?>
</footer>

    </div>
    <p class="dd-page-footer">
     <?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/footer.php'; ?>
    </p>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
  $(".slider").slideshow({
    width      : 932,
    height     : 379,
	transition : 'fade'
 
  });
});
</script>
</script>
<script type="text/javascript">
$(document).ready(function() {
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<?php echo $view->position('debug'); ?>
</body>
</html>