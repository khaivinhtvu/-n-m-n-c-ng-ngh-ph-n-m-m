<?php
/********************************************************************
Product    : MiniCalendar
Date       : 7 March 2023
Copyright  : Les Arbres Design 2009-2023
Contact    : https://www.lesarbresdesign.info
Licence    : GNU General Public License
*********************************************************************/
defined('_JEXEC') or die('Restricted Access');

require_once (dirname(__FILE__).'/helper.php');

// Get the module parameters

    $startyear 	     = trim($params->get('startyear',''));
    $startmonth	     = trim($params->get('startmonth',''));
    $numMonths 	     = trim($params->get('numMonths',1));
    $timezone	     = $params->get('timeZone',0);          // used to highlight the current day
    $day_name_length = trim($params->get('dayLength',1));
    $start_day       = trim($params->get('firstDay',0));	// 0 = Sunday, 1 = Monday, etc
    $weekHdr         = trim($params->get('weekHdr',''));
    $cssfile         = $params->get('cssfile','v6-grey.css');
    $debug 		     = $params->get('debug',0);
    $links 		     = $params->get('links',0);
    $fullwidth       = $params->get('fullwidth',1);
    
// load CSS, if it exists

    $document = JFactory::getDocument();
    if (file_exists(JPATH_ROOT.'/media/mod_minicalendar/css/'.$cssfile))
        $document->addStyleSheet(JURI::root(true).'/media/mod_minicalendar/css/'.$cssfile.'?'.filemtime(JPATH_SITE.'/media/mod_minicalendar/css/'.$cssfile));
        
// if links are configured, load the Javascript        
        
    if ($links)    
        $document->addScript(JURI::root(true).'/media/mod_minicalendar/js/mod_minical.js?v=600');	

// initialise debugging
    
    if ($debug)
        ModMinicalendarHelper::mc_init_debug();
    else
        @unlink(JPATH_ROOT.'/modules/mod_minicalendar/trace.txt');
    
// Set the month and year, defaulting to the current month
// if month is negative, it's a negative offset from the current month
// if month is positive, it's an actual month

    if (empty($startyear))
        $startyear = date('Y');
    
    if (empty($startmonth))
        $startmonth = date('m');
        
    if ($startmonth < 0)        
        {
        $startdate = mktime(0,0,0,date('m') + $startmonth, 1, $startyear);
        $startmonth = date('m',$startdate);
        $startyear = date('Y',$startdate);
        }
    
    echo "\n".'<div class="mod_minical_outer">';
    echo ModMinicalendarHelper::make_all_calendars($timezone, $startyear, $startmonth, $day_name_length, $start_day, $weekHdr, $numMonths, $fullwidth, $links, $debug);
    echo '</div>';