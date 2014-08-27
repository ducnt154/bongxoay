<?php
/*======================================================================*\
|| #################################################################### ||
|| # Best 9Gag Clone Script 5.0.0 - Mobile Module v4.1                  ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright 2012-2013 PHPism Inc. All Rights Reserved.               ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # --------- Best 9Gag Clone Script IS NOT FREE SOFTWARE ---------- # ||
|| # ---- http://www.phpism.com | http://www.phpism.com/eula.php ---- # ||
|| #################################################################### ||
\*======================================================================*/

include("config.php");
STemplate::assign('pagetitle',"Recover Password");
STemplate::assign('error',$error);

//TEMPLATES BEGIN
STemplate::setTplDir($config['mobiledir']."/themes");
STemplate::display('header.tpl');
STemplate::display('recover.tpl');
STemplate::display('footer.tpl');
//TEMPLATES END
?>