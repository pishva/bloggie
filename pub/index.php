<?php
set_include_path(
	realpath('../libs/' ) . PATH_SEPARATOR . realpath('../app/lib/propel/') .
	get_include_path()
);
// +---------------------------------------------------------------------------+
// | An absolute filesystem path to the agavi/agavi.php script.                |
// +---------------------------------------------------------------------------+
require('C:\workspace\bloggie\libs\agavi/agavi.php');

// +---------------------------------------------------------------------------+
// | An absolute filesystem path to our app/config.php script.                 |
// +---------------------------------------------------------------------------+
require('../app/config.php');

// +---------------------------------------------------------------------------+
// | Initialize the framework. You may pass an environment name to this method.|
// | By default the 'development' environment sets Agavi into a debug mode.    |
// | In debug mode among other things the cache is cleaned on every request.   |
// +---------------------------------------------------------------------------+
Agavi::bootstrap('development');

// +---------------------------------------------------------------------------+
// | Call the controller's dispatch method on the default context              |
// +---------------------------------------------------------------------------+
AgaviContext::getInstance('web')->getController()->dispatch();

?>