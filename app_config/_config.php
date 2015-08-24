<?php

global $project;
$project = 'app_config';
 
global $database;
 
// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");
        
Config::inst()->update('Email', 'admin_email', ADMIN_EMAIL);

Config::inst()->update('GDBackend', 'default_quality', 100);

Controller::add_extension('AppControllerExtension');

Config::inst()->update('RootURLController', 'default_homepage_link', 'home');

Config::inst()->update('Security', 'default_login_dest', DEFAULT_LOGIN_DESTINATION);

// hash links will not be rewritten, to allow "Back to Top Button" and smooth scrolling on OnePagers
Config::inst()->update('SSViewer', 'rewrite_hash_links', false);

// Locale
LocaleGeoip::set_available_languages(array(
    'en_US' => 'ENGLISH',
    'de_DE' => 'GERMAN'
));
// Country -> Locale Map (benötigt für die GeoIP erkennung und das mapping in die entsprechende Sprache)
LocaleGeoip::set_country_locale_code_map(array(
    'US' => 'en_US',
    'DE' => 'de_DE'
));
LocaleGeoip::set_default_locale_code('en_US');
// apt-get install geoip-bin php5-geoip
Geoip::set_default_country_code('US');
