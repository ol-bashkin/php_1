<?php

define('SITE_ROOT', __DIR__);
define('WWW_ROOT', SITE_ROOT . '/public');

define('DATA_DIR', SITE_ROOT . '/data');
define('LIB_DIR', SITE_ROOT . '/lib');
define('TPL_DIR', SITE_ROOT . '/templates');
       
define('TITLE', 'Четвертый урок');
define('LAYOUT', TPL_DIR . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'base.php');
       
require_once(LIB_DIR . '/functions.php');
