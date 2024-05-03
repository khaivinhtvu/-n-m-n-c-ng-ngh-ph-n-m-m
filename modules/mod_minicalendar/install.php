<?php
/********************************************************************
Product		: MiniCalendar
Date		: 7 March 2023
Copyright	: Les Arbres Design 2010-2023
Contact		: https://www.lesarbresdesign.info
Licence		: GNU General Public License
*********************************************************************/
defined('_JEXEC') or die('Restricted Access');

class mod_MiniCalendarInstallerScript
{
var $app;
var $_db;
var $previous_version;

public function preflight($type, $parent) 
{
    if (defined('JVERSION'))
        $joomla_version = JVERSION;         // get the Joomla version (JVERSION did not exist before Joomla 2.5)
    else
        $joomla_version = '1.x';

    $this->app = JFactory::getApplication();

	if (version_compare($joomla_version,"3.2.0","<"))   // com_ajax was added to Joomla in 3.2
		{
        $this->app->enqueueMessage("Minicalendar requires at least Joomla 3.2.0. This is $joomla_version ", 'error');
		return false;
		}

	if (!function_exists('mb_substr'))
		{
        $this->app->enqueueMessage("Minicalendar cannot run on this server because it does not support the PHP Multibyte String Functions", 'error');
		return false;
		}

// get the previously installed version, if any

	if (file_exists(JPATH_SITE.'/modules/mod_minicalendar/mod_minicalendar.xml'))
		{
		$xml_array = JInstaller::parseXMLInstallFile(JPATH_SITE.'/modules/mod_minicalendar/mod_minicalendar.xml');
		$this->previous_version = $xml_array['version'];
		}
	return true;
}

//-------------------------------------------------------------------------------
// The main install function
//
public function postflight($type, $parent)
{
	if ($type == 'uninstall')
		return;

// check the Joomla version

	if (substr(JVERSION,0,1) > "4")				// if > 4
        $this->app->enqueueMessage("This version of Minicalendar has not been tested on this version of Joomla.", 'notice');
		
// get the module version from the manifest xml file		

    $module_version = $parent->getManifest()->version;

// we now install language files in the module directories, so must remove them from the system-wide directories, since they would take precedence

    $dirs = glob(JPATH_SITE.'/language/*',GLOB_ONLYDIR);
    foreach ($dirs as $dir)
        {
        $sub_dir = basename($dir);
    	@unlink($dir.'/'.$sub_dir.'.mod_minicalendar.ini');
    	@unlink($dir.'/'.$sub_dir.'.mod_minicalendar.sys.ini');
        }

// remove redundant http update site, if present

	$this->_db = JFactory::getDBO();
	$this->ladb_execute_ignore("DELETE FROM `#__update_sites` WHERE `name`= 'MiniCalendar' AND SUBSTRING(`location`,1,5) = 'http:'");
        
// if update check caching is disabled, disable our update site as it causes excessive traffic

    $component = JComponentHelper::getComponent('com_installer');
    $params = $component->params;
    $cache_timeout = $params->get('cachetimeout', 6, 'int');
    if ($cache_timeout == 0)
        {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true)->update($db->quoteName('#__update_sites'))->set($db->quoteName('enabled') . ' = 0')->where($db->quoteName('name') . ' = ' . $db->quote('MiniCalendar'));
        $db->setQuery($query);
        try {$db->execute();} catch (RuntimeException $e) {}
        }

// we are done, show the update or install message

	if (isset($this->previous_version) && version_compare($this->previous_version,$module_version,"<"))
		{
		$url = 'https://www.lesarbresdesign.info/version-history/minicalendar';
		$link = JHtml::link($url, $url, 'target="_blank"');
        $this->app->enqueueMessage("Minicalendar updated to version $module_version. Here's what changed: $link", 'message');
		}
    else
	    $this->app->enqueueMessage("Minicalendar version $module_version installed.", 'message');
	return true;
}

//-------------------------------------------------------------------------------
// Execute a SQL query ignoring any errors
//
function ladb_execute_ignore($query)
{
	try
		{
		$this->_db->setQuery($query);
		$this->_db->execute();
		}
	catch (RuntimeException $e)
		{
		return;
		}
	return;
}

}