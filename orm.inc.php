<?php
if (!defined ('ORM_PATH')) {
	define ('ORM_PATH', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
}
require (ORM_PATH . 'src'. DIRECTORY_SEPARATOR .'config.inc.php');

if (!defined ('ROOT_MAIL')) {
	if (!\vsc\infrastructure\vsc::isCli()) {
		define ('ROOT_MAIL', 'root@' . $_SERVER['HTTP_HOST']);
	} else {
		define ('ROOT_MAIL', 'root@localhost');
	}
}
