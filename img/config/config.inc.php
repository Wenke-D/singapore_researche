<?php

define('_LINK', 'http://'.$_SERVER['HTTP_HOST'] . '/Singapore Research/');
define('_BASE_DIR',$_SERVER['DOCUMENT_ROOT'] . '/');

# link URL
define('_IMG', _LINK."img".'/');
define('_CSS', _LINK."css".'/');
define('_JS', _LINK."js".'/');


# path of system
define('_INC', _BASE_DIR."components".'/');

include (__DIR__.'/text.inc.php');
# End of file