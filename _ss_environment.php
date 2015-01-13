<?php

/**
 * Default Environment File
 * altenate to your local needs and remove _default from filename
 * 
 * see http://doc.silverstripe.org/framework/en/topics/environment-management
 */

/* Database connection */
define('SS_DATABASE_CLASS', 'MySQLDatabase');
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_USERNAME', '__USERNAME__');
define('SS_DATABASE_PASSWORD', '__PASSWORD__');
define('SS_DATABASE_NAME', '__DATABASE__');


/* What kind of environment is this: dev, test, or live (ie, production)? */
define('SS_ENVIRONMENT_TYPE', 'live');

// These two defines sets a default login which, when used, will always log
// you in as an admin, even creating one if none exist.
define('SS_DEFAULT_ADMIN_USERNAME', '__ADMIN__');
define('SS_DEFAULT_ADMIN_PASSWORD', '__PASSWORD__');
 
// This causes errors to be written to the silverstripe.log file in the same directory as this file, so /var.
// Before PHP 5.3.0, you'll need to use dirname(__FILE__) instead of __DIR__
//define('SS_ERROR_LOG', '/'.__DIR__ . '/silverstripe.log');

// You can set a specific TEMP_FOLDER
// Default silverstripe-cache is used, if available
//define('TEMP_FOLDER', __DIR__ . '/silverstripe-cache');

// On Development Environments all Emails can be directed to only one Email Adress
// Also you can specify the Form field
//define('SS_SEND_ALL_EMAILS_TO','');
//define('SS_SEND_ALL_EMAILS_FROM','');

// To be able to use opcode for manifest files define one of the following
//define('SS_MANIFESTCACHE', 'ManifestCache_File_PHP');
//define('SS_MANIFESTCACHE', 'ManifestCache_APC');

// if varnish stays in front and geoip is used, this variable will read the geolocation from x-forwarded-for
//define('GEOIP_SERVER_VAR', 'HTTP_X_FORWARDED_FOR');

// Self Defined Variables
// Admin Email Address (From)
define('ADMIN_EMAIL','__EMAIL__');
// Error Log Email Address
define('LOG_EMAIL','__EMAIL__');
// need to check if logging is working, maybe following line is important
// _config.php -> SS_Log::add_writer(new SMTP_LogEmailWriter(LOG_EMAIL), SS_Log::NOTICE, '<=');

// Modules

// smtpmailer
define('SMTPMAILER_CHARSET_ENCODING','utf-8');
define('SMTPMAILER_SERVER_ADDRESS','smtp.gmail.com');
define('SMTPMAILER_SERVER_PORT','465');
define('SMTPMAILER_SECURE_CONNECTION','ssl'); // 'ssl', 'tls', ''
define('SMTPMAILER_DO_AUTHENTICATE',true); // true, false
define('SMTPMAILER_USERNAME','__EMAILADDRESS__');
define('SMTPMAILER_PASSWORD','__PASSWORD__');
define('SMTPMAILER_DEBUG_LEVEL',0);# Print debugging informations. 0 = no debuging, 1 = print errors, 2 = print errors and messages, 4 = print full activity
define('SMTPMAILER_LANGUAGE','de');# Language for messages. Look into code/vendor/language for available languages

// EmailVerifiedMember
//define('EMAILVERIFIEDMEMBER_VALIDATION_DOMAIN','http://__DOMAIN__'); // Domain used in validation email

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['__ABSOLUTEPATH__'] = 'http://__DOMAIN__';

// Social Connect
//define('FACEBOOK_APP_ID','YOUR_FACEBOOK_APP_ID');
//define('FACEBOOK_APP_SECRET','YOUR_FACEBOOK_APP_SECRET');
//define('FACEBOOK_REDIRECT_URL','YOUR_FACEBOOK_REDIRECT_URL');
//define('FACEBOOK_SCOPE','YOUR_FACEBOOK_SCOPE');
//define('GOOGLE_CLIENT_ID','YOUR_GOOGLE_CLIENT_ID');
//define('GOOGLE_CLIENT_SECRET','YOUR_GOOGLE_CLIENT_SECRET');
//define('GOOGLE_REDIRECT_URL','YOUR_GOOGLE_REDIRECT_URL');
//define('GOOGLE_SCOPE','YOUR_GOOGLE_SCOPE');
//define('TWITTER_CONSUMER_KEY','YOUR_TWITTER_CONSUMER_KEY');
//define('TWITTER_CONSUMER_SECRET','YOUR_TWITTER_CONSUMER_SECRET');
//define('TWITTER_CALLBACK_URL','YOUR_TWITTER_CALLBACK_URL');

// Session Extender
//define('SESSIONID','PHPSESSID');
//define('SESSIONLIFETIME',(60*60*2)); // two hours
// if redis should be used for Session Savepath
//define('SESSIONSAVEHANDLER', 'redis');
//define('SESSIONSAVEPATH', 'tcp://127.0.0.1:6379?prefix=mySessionPrefix');
// if memcached should be used for Session Savepath
//define('SESSIONSAVEHANDLER', 'memcached');
//define('SESSIONSAVEPATH', '127.0.0.1:11211');

// Google Maps API Key
// If using one of the GeoLocation Fields and Requests to Google Maps Api exceeds the Number of free Requests
//define('GOOGLE_MAPS_API_KEY', 'ABQIAAAAbnvDoAoYOSW2iqoXiGTpYBTIx7cuHpcaq3fYV4NM0BaZl8OxDxS9pQpgJkMv0RxjVl6cDGhDNERjaQ'); // Old API Key for Localhost
