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
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/close.php';
?>
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
            media="screen"
            type="text/css"/>
        <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl;
        ?>/css/template.ie7.css" media="screen" /><![endif]-->
        <link
            rel="stylesheet"
            href="<?php echo $templateUrl; ?>/css/template.responsive.css"
            media="all"
            type="text/css"/>

        <link
            rel="shortcut icon"
            href="<?php echo $templateUrl; ?>/favicon.ico"
            type="image/x-icon"/>
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
        <!--scroling head-->
        <script src="<?php echo $templateUrl; ?>/js/scroling.js"></script>
        <script type="text/javascript">
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() != 0) {
                        $('#toTop').fadeIn();
                    } else {
                        $('#toTop').fadeOut();
                    }
                });

                $('#toTop').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                });
            });
        </script>
        <!--end scroling-->

        <!--slideshow header start-->

        <link
            rel="stylesheet"
            href="<?php echo $templateUrl; ?>/themes/default/default.css"
            type="text/css"
            media="screen"/>
        <link
            rel="stylesheet"
            href="<?php echo $templateUrl; ?>/themes/pascal/pascal.css"
            type="text/css"
            media="screen"/>
        <link
            rel="stylesheet"
            href="<?php echo $templateUrl; ?>/themes/orman/orman.css"
            type="text/css"
            media="screen"/>
        <link
            rel="stylesheet"
            href="<?php echo $templateUrl; ?>/css/nivo-slider.css"
            type="text/css"
            media="screen"/>
        <link
            rel="stylesheet"
            href="<?php echo $templateUrl; ?>/css/style.css"
            type="text/css"
            media="screen"/>
        <script
            type="text/javascript"
            src="<?php echo $templateUrl; ?>/js/jquery-1.6.1.min.js"></script>
        <script
            type="text/javascript"
            src="<?php echo $templateUrl; ?>/js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
            var $j = jQuery.noConflict();
            jQuery(document).ready(function ($) {
                $j("#slider").nivoSlider({
                    effect: "<?php echo $this->params->get('animations'); ?>",
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: <?php echo $this->params->get('speed'); ?>,
                    pauseTime: <?php echo $this->params->get('time'); ?>,
                    captionOpacity: 0.8

                });
            });
        </script>
        <!--slideshow header end-->
    </head>
    <body>

        <?php if ($backc == 1) { ?>
        <div id="toTop">
            <p><?php echo $this->params->get('scroll'); ?></p>
        </div><?php } ?>
        <div id="dd-main">
            <header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>

                <div class="dd-shapes">
                    <div class="dd-object208695573"></div>
                    <div class="dd-object2018732860"></div>
                    <div class="dd-object615910308"><?php echo $view->position('slideshow', 'dd-nostyle'); ?>
                        <!--slideshow image-->
                        <div id="wrapper">
                            <div class="slider-wrapper theme-default">

                                <div id="slider" class="nivoSlider">

                                    <img
                                        src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto1'); ?>"
                                        alt="foto1"
                                        title="#1slide"/>
                                    <img
                                        src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto2'); ?>"
                                        alt="foto2"
                                        title="#2slide"/>
                                    <img
                                        src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto3'); ?>"
                                        alt="foto3"
                                        title="#3slide"/>
                                    <img
                                        src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto4'); ?>"
                                        alt="foto4"
                                        title="#4slide"/>
                                    <img
                                        src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto5'); ?>"
                                        alt="foto5"
                                        title="#5slide"/>

                                </div>
                            </div>
                        </div>
                        <div id="1slide" class="nivo-html-caption"><?php echo $this->params->get('text1'); ?></div>
                        <div id="2slide" class="nivo-html-caption"><?php echo $this->params->get('text2'); ?></div>
                        <div id="3slide" class="nivo-html-caption"><?php echo $this->params->get('text3'); ?></div>
                        <div id="4slide" class="nivo-html-caption"><?php echo $this->params->get('text4'); ?></div>
                        <div id="5slide" class="nivo-html-caption"><?php echo $this->params->get('text5'); ?></div>
                        <!-- end slideshow image-->
                    </div>
                    <div class="dd-object1705711553"></div>
                    <div class="dd-object101210654"></div>
                    <div class="dd-object1210483008"></div>
                    <div class="dd-object872370743"></div>
              
                    <div class="dd-textblock dd-object1846523530">
                        <div class="dd-object1846523530-text-container">
                            <div class="dd-object1846523530-text">
                                <div class="title">
                                    <h3><?php echo $this->params->get('titletext'); ?></h3>
                                </div>
                                <p><img
                                    style="margin-right: 5px; float: left;"
                                    src="<?php echo $this->params->get('person'); ?>"
                                    alt="dj"
                                    width="121"
                                    height="128"/><?php echo $this->params->get('text'); ?></p>
                                <div class="css_btn_class">
                                    <a href="<?php echo $this->params->get('textlink'); ?>"><?php echo $this->params->get('namebutton'); ?></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="dd-positioncontrol dd-positioncontrol-2030069518" id="social">
                    <!-- Social Icons Start !-->
                    <?php if ($allicon == 1) { ?>
                    <div class="socialw fadeInDown">

                        <!-- Facebook !-->
                        <?php if ($fc == 1) { ?>
                        <a href="<?php echo $this->params->get('facebook'); ?>" target="_blank">
                            <div class="social"><img src="<?php echo $templateUrl; ?>/images/PY2EPRW.png"/></div>
                        </a><?php } ?>
                        <!-- Facebook !-->

                        <!-- Twitter !-->
                        <?php if ($tc == 1) { ?>
                        <a href="<?php echo $this->params->get('twitter'); ?>" target="_blank">
                            <div class="social">
                                <img src="<?php echo $templateUrl; ?>/images/ny0pyqt.png"/>
                            </div>
                        </a><?php } ?>
                        <!-- Twitter !-->

                        <!-- Instagram !-->
                        <?php if ($ic == 1) { ?>
                        <a href="<?php echo $this->params->get('ins'); ?>" target="_blank">
                            <div class="social">
                                <img src="<?php echo $templateUrl; ?>/images/tZZG2zQ.png"/></div>
                        </a><?php } ?>
                        <!-- Instagram !-->

                    </div>

                    <!-- Social Icons End !--><?php } ?></div>

                <a href="index.php" class="dd-logo dd-logo-903511707">
                    <img src="<?php echo $this->params->get('logo'); ?>" alt="logo"/>
                </a>

                <div class="dd-textblock dd-object714367995">
                    <form
                        class="dd-search"
                        name="Search"
                        action="<?php echo $document->baseurl; ?>/index.php"
                        method="post">
                        <input type="text" value="" name="searchword"/>
                        <input type="hidden" name="task" value="search"/>
                        <input type="hidden" name="option" value="com_search"/>
                        <input type="submit" value="Search" name="search" class="dd-search-button"/>
                    </form>
                    <div class="con"><?php echo $this->params->get('contact_telephone'); ?>
                        <p><?php echo $this->params->get('contact_email'); ?></div>
                    </div>
                    <?php if ($flashc == 1) { ?>
                    <?php } ?>

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
                                <?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
                                <div class="dd-layout-cell dd-sidebar2">
                                    <?php echo $view->position('position-6', 'dd-block'); ?>
                                    <?php echo $view->position('position-8', 'dd-block'); ?>
                                    <?php echo $view->position('position-3', 'dd-block'); ?>

                                </div>
                                <?php endif; ?>
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
                            <span style="color: rgb(255, 255, 255); font-weight: bold;">Copyright © 2014
                                <span style="font-size: 14px; color: #FFFFFF;"><?php echo $this->params->get('footer'); ?></span>. Rights Reserved.</span></p>
                        <?php endif; ?>
                        <p class="dd-page-footer">
                            <?php require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc/footer.php'; ?>
                        </p>
                    </footer>

                </div>
            </div>

            <?php echo $view->position('debug'); ?>
        </body>
    </html>