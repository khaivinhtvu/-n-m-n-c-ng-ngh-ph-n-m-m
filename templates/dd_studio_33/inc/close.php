<?php
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
//on off
$fbc = htmlspecialchars($tplparams->get('fbc'));
$twc = htmlspecialchars($tplparams->get('twc'));
$flc = htmlspecialchars($tplparams->get('flc'));
$rsc = htmlspecialchars($tplparams->get('rsc'));
$emc = htmlspecialchars($tplparams->get('emc'));
$allicon = htmlspecialchars($tplparams->get('allicon'));
?>