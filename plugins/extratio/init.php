<?php

require_once( 'rules.php' );

$mngr = rRatioRulesList::load();
if($mngr->setHandlers())
{
	$theSettings->registerEventHook($plugin["name"],"LabelChanged");
	$theSettings->registerPlugin($plugin["name"],$pInfo["perms"]);
}
else
	$jResult .= "plugin.disable(); noty('retrackers: '+theUILang.pluginCantStart,'error');";
