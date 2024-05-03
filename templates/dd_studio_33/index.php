<?php
defined('_JEXEC') or die;
/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = $this;
$templateUrl = $document->baseurl . '/templates/' . $document->template;
Artx::load("Artx_Page");
$view = $this->artx = new ArtxPage($this);
$view->componentWrapper();
JHtml::_('behavior.framework', true);
?>
<?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/close.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
    <head>
        <jdoc:include type="head"/>
        <link
            rel="stylesheet"
            href="<?php echo $document->baseurl; ?>/templates/system/css/system.css"/>
        <link
            rel="stylesheet"
            href="<?php echo $document->baseurl; ?>/templates/system/css/general.css"/>
        <meta
            name="viewport"
            content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width"/>
        <!--[if lt IE 9]><script
        src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link
            rel="stylesheet"
            href="<?php echo $templateUrl; ?>/css/template.css"
            media="screen"/>
        <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl;
        ?>/css/template.ie7.css" media="screen" /><![endif]-->
        <link
            rel="stylesheet"
            href="<?php echo $templateUrl; ?>/css/template.responsive.css"
            media="all"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <script>
            if ('undefined' != typeof jQuery) 
                document._artxJQueryBackup = jQuery;
        </script>
        <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
        <script>
            jQuery.noConflict();
        </script>
        <script src="<?php echo $templateUrl; ?>/script.js"></script>
        <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
        <script src="<?php echo $templateUrl; ?>/modules.js"></script>
        <?php $view->includeInlineScripts() ?>
        <script>
            if (document._artxJQueryBackup) 
                jQuery = document._artxJQueryBackup;
        </script>

        <!--slideshow header start-->
        <script
            type="text/javascript"
            src="<?php echo $templateUrl; ?>/js/jquery.min.js"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo $templateUrl; ?>/js/slider/themes/default/jquery.slider.css"/>
        <!--[if IE 6]> <link rel="stylesheet" type="text/css" href="<?php echo
        $templateUrl; ?>/js/slider/themes/default/jquery.slider.ie6.css" /> <![endif]-->
        <script
            type="text/javascript"
            src="<?php echo $templateUrl; ?>/js/slider/jquery.slider.min.js"></script>

        <!--To Top-->
        <script type="text/javascript" src="<?php echo $templateUrl; ?>/js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo $templateUrl; ?>/js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash)
                            .offset()
                            .top
                    }, 1000);
                });
            });
        </script>
    </head>
    <body>

        <div id="dd-main">
            <?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
            <nav class="dd-nav">
                <div class="dd-nav-inner">

                    <?php if ($view->containsModules('position-28')) : ?>
                    <div class="dd-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
                    <?php endif; ?>
                    <?php if ($view->containsModules('position-29')) : ?>
                    <div class="dd-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
                    <?php endif; ?>
                    <?php echo $view->position('position-1'); ?>

                </div>
            </nav>
            <?php endif; ?>
            <header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>

                <div class="dd-shapes">
                    <div class="dd-object1015083262"></div>
                    <div class="dd-object1331261996">
                        <div class="slide"><?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/slideshow.php'; ?></div>
                    </div>

                    <div class="dd-object1965089872"></div>
                    <div class="dd-object395012838"><img src="<?php echo $this->params->get('author'); ?>" alt="foto5"/></div>

                </div>

                <div class="dd-positioncontrol dd-positioncontrol-511500774" id="social-icon">
                    <?php if ($allicon == 1) { ?>
                    <div class="si">
                        <div id="content">

                            <!-- change this div to a nav tag if you're not planning on supporting IE users
                            -->
                            <div class="menu">
                                <ul class="primary-menu">
                                    <?php if ($fbc == 1) { ?>
                                    <li class="facebook">
                                        <a class="social-item" href="<?php echo $this->params->get('fb'); ?>">f</a>
                                        <span class="social-span"><?php echo $this->params->get('fbt'); ?></span></li><?php } ?>
                                    <?php if ($twc == 1) { ?>
                                    <li class="twitter">
                                        <a class="social-item" href="<?php echo $this->params->get('tw'); ?>">t</a>
                                        <span class="social-span"><?php echo $this->params->get('twt'); ?></span></li><?php } ?>
                                    <?php if ($flc == 1) { ?>
                                    <li class="flickr">
                                        <a class="social-item" href="<?php echo $this->params->get('fl'); ?>">c</a>
                                        <span class="social-span"><?php echo $this->params->get('flt'); ?></span></li><?php } ?>
                                    <?php if ($rsc == 1) { ?>
                                    <li class="rss">
                                        <a class="social-item" href="<?php echo $this->params->get('rs'); ?>">a</a>
                                        <span class="social-span"><?php echo $this->params->get('rst'); ?></span></li><?php } ?>
                                    <?php if ($emc == 1) { ?>
                                    <li class="mail">
                                        <a class="social-item" href="<?php echo $this->params->get('em'); ?>">k</a>
                                        <span class="social-span"><?php echo $this->params->get('emt'); ?></span></li><?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div><?php } ?></div>

                <a href="index.php" class="dd-logo dd-logo-1279779218">
                    <img
                        src="<?php echo $this->params->get('logo'); ?>"
                        alt="<?php echo $this->params->get('footer'); ?>"/>
                </a>

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
                    <p>
                        <span style="color: #FFFFFF;">Copyright
                            <?php echo date("Y"); ?>
                            &nbsp;<?php echo $this->params->get('footer'); ?></span></p>
                    <?php endif; ?>
                </footer>

            </div>
            <p class="dd-page-footer">
                <?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/footer.php'; ?>
            </p>
        </div>
        <!--start slideshow-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".slider").slideshow({width: 950, height: 340});
            });
        </script>
        <!--To Top-->
        <script type="text/javascript">
            $(document).ready(function () {
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#" id="toTop" style="display: block;">
            <span id="toTopHover" style="opacity: 1;"></span>
        </a>

        <?php echo $view->position('debug'); ?>
    </body>
</html>