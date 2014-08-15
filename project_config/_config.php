<?php
 
global $database;
 
// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");

//SS_Log::add_writer(new SMTP_LogEmailWriter(LOG_EMAIL), SS_Log::NOTICE, '<=');

/////////////////////////////////////////////////////
// SMTP Mailer
/////////////////////////////////////////////////////
SmtpMailer::set_charset_encoding(SMTPMAILER_CHARSET_ENCODING); # E-mails characters encoding, e.g. : 'utf-8' or 'iso-8859-1'
SmtpMailer::set_smtp_server_address(SMTPMAILER_SERVER_ADDRESS); # SMTP server address
SmtpMailer::set_smtp_server_port(SMTPMAILER_SERVER_PORT); # SMTP server port. Set to 25 if no encryption or tls. Set to 465 if ssl
SmtpMailer::set_use_secure_connection(SMTPMAILER_SECURE_CONNECTION); # SMTP encryption method : Set to '' or 'tls' or 'ssl'
SmtpMailer::set_do_authenticate(SMTPMAILER_DO_AUTHENTICATE); # Turn on SMTP server authentication. Set to false for an anonymous connection
SmtpMailer::set_username(SMTPMAILER_USERNAME); # SMTP server username, if SMTPAUTH == true
SmtpMailer::set_password(SMTPMAILER_PASSWORD); # SMTP server password, if SMTPAUTH == true
SmtpMailer::set_debug_messaging_level(SMTPMAILER_DEBUG_LEVEL); # Print debugging informations. 0 = no debuging, 1 = print errors, 2 = print errors and messages, 4 = print full activity
SmtpMailer::set_language_of_message(SMTPMAILER_LANGUAGE); # Language for messages. Look into code/vendor/language for available languages
        
Config::inst()->update('Email', 'admin_email', ADMIN_EMAIL);

Config::inst()->update('MySQLDatabase', 'connection_charset', 'utf8');

// Enable nested URLs for this site (e.g. page/sub-page/)
if(class_exists('SiteTree')) Config::inst()->update('SiteTree', 'nested_urls', true);

// prevent from setting up default pages
Config::inst()->update('SiteTree', 'create_default_pages', false);

Page::add_extension('DefaultRecords');

Config::inst()->update('GDBackend', 'default_quality', 100);

Config::inst()->update('RootURLController', 'default_homepage_link', 'home');
Config::inst()->update('Security', 'default_login_dest', 'profile/me');

// Validation Domain for the Email validation Link
EmailVerifiedMember::set_validation_domain('http://__DOMAIN__');

BootstrapNavbarLoginForm::set_AuthenticatorClass("EmailVerifiedMemberAuthenticator");
BootstrapNavbarLoginForm::set_LoginFormClass("EmailVerifiedMemberLoginForm");

EmailVerifiedMember::set_login_after_validation(true);
EmailVerifiedSecurity::set_default_verified_dest('profile/me');
// Add all new Users to the Frontend Group
EmailVerifiedMember::set_default_add_to_frontend_group(true);

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

// Set the site locale
//i18n::set_locale('de_DE');
/*if(Member::currentUser()) i18n::set_locale(Member::currentUser()->LocaleCode);
elseif(Session::get('LocaleCode')) i18n::set_locale(Session::get('LocaleCode'));
elseif(($Locale = LocaleGeoip::countryCode2Locale(Geoip::ip2country($_SERVER['REMOTE_ADDR'], true)))) i18n::set_locale($Locale);
elseif(($Locale = LocaleGeoip::countryCode2Locale(Geoip::get_default_country_code()))==true) i18n::set_locale($Locale);
else i18n::set_locale(LocaleGeoip::get_default_locale_code());*/

//i18n::set_locale('de_DE');

i18n::set_locale('de_DE');