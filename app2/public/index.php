<?php

use App\services\App;

$root   = rtrim(str_replace('\\', '/', dirname(__DIR__))).'/';
$public = $root.'public/';
$src    = $root.'src/';
$conf   = $root.'conf/';


define('PATH_ROOT', $root);
define('PATH_PUBLIC', $public);
define('PATH_SRC', $src);
define('PATH_CONF', $conf);

include($src.'functions/debug.php');
include($src.'functions/config.php');

set_error_handler('App\functions\errorHandler');

include($src.'features/Runnable.php');
include($src.'features/RunnableInterface.php');
include($src.'features/Stringable.php');
include($src.'features/StringableInterface.php');
include($src.'structures/Resource.php');
include($src.'structures/Service.php');
include($src.'resources/RouterInterface.php');
include($src.'resources/Router.php');
include($src.'services/AppInterface.php');
include($src.'services/App.php');

include($src.'routes/Home.php');
include($src.'routes/About.php');
include($src.'routes/Contact.php');


$app = App::getInstance();
$app();