<?
// установки сервера и базы данных
define('CMS_DB_SERVER', 'localhost');
define('CMS_DB_USER', 'eahater');
define('CMS_DB_PASS', '2M!pp-q8IX[JtJYN');
define('CMS_DB_NAME', 'eahater');
define('CMS_DB_CODEPAGE', 'utf8');
define('DB_PREFIX','ea_');

// адрес и название проекта
define ('SITE_NAME', 'eahater');

// включение лога заросов
// define ('BETA_ENABLED', 1);

// установки CMS
define('CMS_AUTHOR','itimur.com');
define('CMS_THEME','default');
define('DEFAULT_LANG','en');

//define('RECAPTCHA_KEY', '6Le6MFAbAAAAAP3or_eLJt1J3dTfGNBwxyA32EHt');
//define('RECAPTCHA_SECRET', '6Le6MFAbAAAAADaCWQm1YHm10T7NOsEN5DY8hitD');
//define('USE_CAPTCHA', 1);

// define('MAP_LINK', 'https://www.google.com/maps/place/Full+Basket+Butchery/@49.2120772,-122.9226656,17z/data=!4m12!1m6!3m5!1s0x54867792bbbc6ce7:0x8ff4d3bf803a81b9!2sFull+Basket+Butchery!8m2!3d49.21206!4d-122.9204559!3m4!1s0x54867792bbbc6ce7:0x8ff4d3bf803a81b9!8m2!3d49.21206!4d-122.9204559');

define ('SERVER_ROOT_DEBUG', dirname(dirname(__FILE__))."/eahater.com/");
define ('SERVER_HTTP_DEBUG', 'https://eahater.com');
define ('DEBUG_ON', 1);
// define ('SKIP_MINIFY', 1);
?>