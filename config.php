<?php

$db_type = 'mysqli';
$db_host = 'localhost';
$db_name = 'famabb';
$db_username = 'famabb';
$db_password = '23230647';
$db_prefix = 'fbb_';
$p_connect = false;

$cookie_name = 'pun_cookie_974466';
$cookie_domain = '';
$cookie_path = '/';
$cookie_secure = 0;
$cookie_seed = '90d190928809ff61';

$base_url = 'http://127.0.0.1/xman2/famabb';

define('PUN', 1);

define('PUN_DEBUG', 1);
define('PUN_SHOW_QUERIES', 1);

// Define cache directory
define('FORUM_CACHE_DIR', PUN_ROOT.'cache/');

// The maximum size of a post, in bytes, since the field is now MEDIUMTEXT this allows ~16MB but lets cap at 1MB...
define('PUN_MAX_POSTSIZE', 1048576);
define('PUN_SEARCH_MIN_WORD', 3);
define('PUN_SEARCH_MAX_WORD', 20);
define('FORUM_MAX_COOKIE_SIZE', 4048);

define('PUN_DISABLE_BUFFERING', 1);