<?php
/********************************************************************
Product    : MiniCalendar
Date       : 3 October 2022
Copyright  : Les Arbres Design 2009-2022
Contact    : https://www.lesarbresdesign.info
Licence    : GNU General Public License
*********************************************************************/
defined('_JEXEC') or die('Restricted Access');

class ModMinicalendarHelper
{

//---------------------------------------------------------------------------------------------
// Get an array of day names starting with the start day
//
static function get_day_names($start_day)
{
	$j_days = array(JText::_('SUNDAY'),JText::_('MONDAY'),JText::_('TUESDAY'),JText::_('WEDNESDAY'),JText::_('THURSDAY'),JText::_('FRIDAY'),JText::_('SATURDAY'));
	for ($i = 0; $i < 7; $i++)
		{
		$day = ($i + $start_day) % 7;
		$days[] = $j_days[$day];
		}
	return $days;
}

//---------------------------------------------------------------------------------------------
// Get a month name
//
static function month_name($month)
{
	switch ($month)
		{
		case 1: return JText::_('JANUARY');
		case 2: return JText::_('FEBRUARY');
		case 3: return JText::_('MARCH');
		case 4: return JText::_('APRIL');
		case 5: return JText::_('MAY');
		case 6: return JText::_('JUNE');
		case 7: return JText::_('JULY');
		case 8: return JText::_('AUGUST');
		case 9: return JText::_('SEPTEMBER');
		case 10: return JText::_('OCTOBER');
		case 11: return JText::_('NOVEMBER');
		case 12: return JText::_('DECEMBER');
		}
}

//---------------------------------------------------------------------------------------------
// Draw a calendar for a single month
//
static function make_calendar($timezone, $year, $month, $day_name_length, $start_day, $weekHdr, $table_class, $links, $debug)
{
	if ($timezone == 0)
		$dt = new DateTime("now");				// server default
	else
		$dt = new DateTime("now", new DateTimeZone($timezone));	
	$current_year = $dt->format("Y");
	$current_month = $dt->format("m");
	$current_day = $dt->format("d");
	if ($debug)
		self::mc_trace("make_calendar for $year $month, current date in $timezone = $current_year, $current_month, $current_day, start_day = $start_day");

	$num_columns = 7;										// without week numbers, we have 7 columns
	if (($weekHdr != '') && ($start_day == 1))  			// if start day not Monday, don't do week numbers
		$num_columns = 8;
	else
		$weekHdr = '';
	
	$month_class = sprintf("month-%02d", $month);
	$html = '<table class="mod_minical_table '.$month_class.' '.$table_class.'">';
	
// draw the month and year heading

    $month_string = self::month_name($month).' '.$year;
    
	$html .= '<tr class="mod_minical_month">';
	if ($links)
        {
		$html .= '<th class="mod_minical_left" id="minical_left" data-year="'.$year.'" data-month="'.$month.'"><span class="mod_minical_left" ></span></th>';
    	$html .= '<th colspan="'.($num_columns - 2).'">'.$month_string.'</th>';
		$html .= '<th class="mod_minical_right" id="minical_right" data-year="'.$year.'" data-month="'.$month.'"><span class="mod_minical_right" ></span></th>';
        }
    else
    	$html .= '<th colspan="'.$num_columns.'">'.$month_string.'</th>';
	$html .= '</tr>';
	
// draw the day names heading

	if ($day_name_length > 0)
		{
    	$html .= '<tr class="mod_minical_day">';
		if ($weekHdr != '')
			$html .= "<th>".$weekHdr."</th>";
		$days = self::get_day_names($start_day);
		for ($i = 0; $i < 7; $i++)
			{
			$day_name = $days[$i];
			$day_short_name = mb_substr($day_name,0,$day_name_length,'UTF-8');
			$html .= "<th>$day_short_name</th>";
			}
		$html .= '</tr>';
		}
	
// draw the days

	$day_time = gmmktime(5,0,0,$month,1,$year);			// GMT of first day of month
	$first_weekday = gmdate("w",$day_time);				// w = day of week (0=Sunday ... 6=Saturday)
	$first_column = ($first_weekday + 7 - $start_day) % 7; 	// column for first day
	$days_in_month = cal_days_in_month(CAL_GREGORIAN,$month,$year);
	$html .= '<tr>';
	if ($weekHdr != '')
		{
		$weeknumber = gmdate("W",$day_time);			// first week number
		$html .= '<td class="mod_minical_weekno">'.$weeknumber.'</td>';
		}
	if ($first_column > 0)
		$html .= '<td colspan="'.$first_column.'" class="mod_minical_nonday"></td>';		// days before the first of the month
	$column_count = $first_column;
	for ($day = 1; $day <= $days_in_month; $day++)
		{
		if ($column_count == 7)
			{
			$html .= "</tr>\n<tr>";
			$column_count = 0;
			if ($weekHdr != '')
				{
				$day_time += 604800; 					// add one week
				$weeknumber = gmdate("W",$day_time);	// week number
				if ($debug)
					self::mc_trace(" next week: ".gmdate('Y-m-d H:i',$day_time)." week $weeknumber");
				$html .= '<td class="mod_minical_weekno">'.$weeknumber.'</td>';
				}
			}
		if (($year == $current_year) && ($month == $current_month) && ($day == $current_day))
			$html .= '<td class="mod_minical_today"'.'>'.$day.'</td>';	// highlight today's date
		else
			$html .=  '<td>'.$day.'</td>';
		$column_count ++;
		}
	$end_cols = 7 - $column_count;
	if ($end_cols > 0)
		$html .= '<td colspan="'.$end_cols.'" class="mod_minical_nonday"></td>';				// days after the last day of the month
	$html .= "</tr></table>\n";
    return $html;
}

//---------------------------------------------------------------------------------------------
// Draw the number of calendars requested in the module parameters
//
static function make_all_calendars($timezone, $year, $month, $day_name_length, $start_day, $weekHdr, $numMonths, $fullwidth, $links, $debug)
{
	$inner_class = 'mod_minical_inner';
	$table_class = '';
    if ($fullwidth)
		{
		$inner_class = 'mod_minical_inner full-width';
		$table_class = 'full-width';
		}
    $html = '';
    for ($i = 1; $i <= $numMonths ; $i ++)
        {
        $html .= '<div class="'.$inner_class.'">';
        $html .= self::make_calendar($timezone, $year, $month, $day_name_length, $start_day, $weekHdr, $table_class, $links, $debug);
        $links = false;						// only draw links on first calendar
        $html .= '</div>';
        $month ++;
        if ($month > 12)
            {
            $month = 1;
            $year ++;
            }
        }
    return $html;
}

//---------------------------------------------------------------------------------------------
// The forward and backward links call here via com_ajax
//
static function getAjax()
{
	$jinput = JFactory::getApplication()->input;
	$offset = $jinput->get('offset','0', 'STRING');     // -1 for back one month, or +1 for forward one month
	$year = $jinput->get('year','0', 'STRING');
	$month = $jinput->get('month','0', 'STRING');
    
// Calculate the new starting month required

    $startdate = mktime(0,0,0,$month + $offset, 1, $year);
    $month = date('m',$startdate);
    $year = date('Y',$startdate);
    
// get the module parameters

	$db = JFactory::getDbo();
	$query = "select `params` from `#__modules` where `module` = 'mod_minicalendar'";
	$db->setQuery($query);
	try {
		$mparams = $db->loadResult();
		}
	catch (\RuntimeException $e) {
		echo $e->getMessage();
		return;
		}
	$params = new JRegistry($mparams);
    $day_name_length = trim($params->get('dayLength',1));
    $start_day = trim($params->get('firstDay',0));
    $weekHdr = trim($params->get('weekHdr',''));
    $numMonths = trim($params->get('numMonths',1));
    $timezone = $params->get('timeZone',0);
    $fullwidth = trim($params->get('fullwidth',1));
    $debug = $params->get('debug',0);
    
// re-make all the calendars and send them back as the Ajax response    
    
    if ($debug)
        self::mc_trace("getAjax() calling make_all_calendars() for $year, $month, numMonths = $numMonths");
    echo self::make_all_calendars($timezone, $year, $month, $day_name_length, $start_day, $weekHdr, $numMonths, $fullwidth, 1, $debug);
}

//---------------------------------------------------------------------------------------------
// Initialise debugging
//
static function mc_init_debug()
{
	$locale = setlocale(LC_ALL,0);
	$tz = date_default_timezone_get();
	$langObj = JFactory::getLanguage();
	$xml_array = JInstaller::parseXMLInstallFile(JPATH_ROOT.'/modules/mod_minicalendar/mod_minicalendar.xml');
	self::mc_trace("MiniCalendar : ".$xml_array['version']);
	self::mc_trace("PHP          : ".phpversion());
	self::mc_trace("Locale       : ".$locale);
	self::mc_trace("Timezone     : ".$tz);
	self::mc_trace("Server       : ".PHP_OS);
	self::mc_trace("Joomla       : ".JVERSION);
	self::mc_trace("Language     : ".$langObj->get('tag'));
	self::mc_trace("---------------------------");
}

//---------------------------------------------------------------------------------------------
// Send a line to the trace file
//
static function mc_trace($data)
{
   	@file_put_contents(JPATH_ROOT.'/modules/mod_minicalendar/trace.txt', $data."\n",FILE_APPEND);
}

}