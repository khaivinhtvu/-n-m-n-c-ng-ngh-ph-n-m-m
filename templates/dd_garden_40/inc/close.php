<?php
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
//on off
$fc = htmlspecialchars($tplparams->get('fc'));
$tc = htmlspecialchars($tplparams->get('tc'));
$ic = htmlspecialchars($tplparams->get('ic'));
$backc = htmlspecialchars($tplparams->get('backc'));
$infoc = htmlspecialchars($tplparams->get('infoc'));
$flashc = htmlspecialchars($tplparams->get('flashc'));
$allicon = htmlspecialchars($tplparams->get('allicon'));
?>