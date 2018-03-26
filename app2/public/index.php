<?php

use App\services\App;

$root   = rtrim(str_replace('\\', '/', dirname(__DIR__))).'/';
$public = $root.'public/';
$src    = $root.'src/';

define('PATH_ROOT', $root);
define('PATH_PUBLIC', $public);
define('PATH_SRC', $src);

include($src.'functions/debug.php');

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

$app = App::getInstance();
$app();