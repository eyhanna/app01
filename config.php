<?php
// HTTP
define('HTTP_SERVER', 'http://recettesenpot.com/');

// HTTPS
define('HTTPS_SERVER', 'https://recettesenpot.com/');

// DIR
define('DIR_APPLICATION', '/data/www/html/recettesenpot.com/production/catalog/');
define('DIR_SYSTEM', '/data/www/html/recettesenpot.com/production/system/');
define('DIR_IMAGE', '/data/www/html/recettesenpot.com/production/image/');
define('DIR_STORAGE', '/data/www/html/recettesenpot.com/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'ocbdadmapp01');
define('DB_PASSWORD', 'App01OCPass01!!');
define('DB_DATABASE', 'opencartapp01');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
