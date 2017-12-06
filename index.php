<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);


define('DATABASE', 'ara59');
define('USERNAME', 'ara59');
define('PASSWORD', 'CkyYZ4sSq');
define('CONNECTION', 'sql1.njit.edu');

//Autoloader class
class HandleAutoload {
    public static function autoload($class) {        
        $path = str_replace('\\', '/', $class). '.php';
        include $path;
    }
}

spl_autoload_register(array('HandleAutoload', 'autoload'));

$httpResponse=\http\processHttpRequest::createHttpResponse();
?>