<?php
// HTTP
define('HTTP_SERVER', 'http://inloviestdemo.herokuapp.com');
define('HTTP_IMAGE', 'http://inloviestdemo.herokuapp.com/image/');
define('HTTP_ADMIN', 'http://inloviestdemo.herokuapp.com/admin/');
// HTTPS
define('HTTPS_SERVER', 'http://inloviestdemo.herokuapp.com');
define('HTTPS_IMAGE', 'http://inloviestdemo.herokuapp.com/image/');
// DIR
define('DIR_APPLICATION', __DIR__ . '/catalog/');
define('DIR_SYSTEM', __DIR__ . '/system/');
define('DIR_DATABASE', __DIR__ . '/system/database/');
define('DIR_LANGUAGE', __DIR__ . '/catalog/language/');
define('DIR_TEMPLATE', __DIR__ . '/catalog/view/theme/');
define('DIR_CONFIG', __DIR__ . '/system/config/');
define('DIR_IMAGE', __DIR__ . '/image/');
define('DIR_CACHE', __DIR__ . '/system/cache/');
define('DIR_DOWNLOAD', __DIR__ . '/download/');
define('DIR_LOGS', __DIR__ . '/system/logs/');
// DB
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', $url['host']);
define('DB_USERNAME', $url['user']);
define('DB_PASSWORD', $url['pass']);
define('DB_DATABASE', substr($url["path"],1));
define('DB_PREFIX', 'oc_');
?>