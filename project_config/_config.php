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

// if Email Verified Member will be used
    // Validation Domain for the Email validation Link
    //EmailVerifiedMember::set_validation_domain(EMAILVERIFIEDMEMBER_VALIDATION_DOMAIN);
    //BootstrapNavbarLoginForm::set_AuthenticatorClass("EmailVerifiedMemberAuthenticator");
    //BootstrapNavbarLoginForm::set_LoginFormClass("EmailVerifiedMemberLoginForm");
    //EmailVerifiedMember::set_login_after_validation(true);
    // Add all new Users to the Frontend Group
    //EmailVerifiedMember::set_default_add_to_frontend_group(true);
    // Set the redirect destination Path to use after verification of email was successfull
    //EmailVerifiedSecurity::set_default_verified_dest('profile/me');
    
 // if bootstrap_social_connect Plugin in stalled
    //FacebookAuthRequest::set_facebook_app_id(FACEBOOK_APP_ID);
    //FacebookAuthRequest::set_facebook_app_secret(FACEBOOK_APP_SECRET);
    //FacebookAuthRequest::set_facebook_redirect_url(FACEBOOK_REDIRECT_URL);
    //FacebookAuthRequest::set_facebook_scope(FACEBOOK_SCOPE);
    //FacebookAuthRequest::set_signup_path('facebook/signup');
    //FacebookAuthRequest::set_error_path('facebook/error');
        
    //GoogleAuthRequest::set_google_client_id(GOOGLE_CLIENT_ID);
    //GoogleAuthRequest::set_google_client_secret(GOOGLE_CLIENT_SECRET);
    //GoogleAuthRequest::set_google_redirect_url(GOOGLE_REDIRECT_URL);
    //GoogleAuthRequest::set_google_scope(GOOGLE_SCOPE);
    //GoogleAuthRequest::set_signup_path('google/signup');
    //GoogleAuthRequest::set_error_path('google/error');
        
    //TwitterMember::set_twitter_consumer_key(TWITTER_CONSUMER_KEY);
    //TwitterMember::set_twitter_consumer_secret(TWITTER_CONSUMER_SECRET);
    //TwitterMember::set_twitter_callback_url(TWITTER_CALLBACK_URL);
    //TwitterMember::set_signup_path('twitter/signup');
    //TwitterMember::set_error_path('twitter/error');

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

// Google Maps API Key
// If using one of the GeoLocation Fields and Requests to Google Maps Api exceeds the Number of free Requests
//GoogleMaps::setApiKey(GOOGLE_MAPS_API_KEY);