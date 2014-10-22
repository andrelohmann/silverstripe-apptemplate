# Silverstripe App Template - (c) Andre Lohmann (and others) 2014

## Silverstripe Version 3.1.6

## Maintainer Contact 
 * Andre Lohmann
   <lohmann.andre (at) gmail (dot) com>
	
## Requirements
 * composer/installers
 * andrelohmann/silverstripe-framework
 * silverstripe/cms
 * andrelohmann/silverstripe-themes-bootstrap

## Optional
 * php-ffmpeg/php-ffmpeg
 * andrelohmann/silverstripe-geoip
 * andrelohmann/silverstripe-localegeoip
 * andrelohmann/silverstripe-dependentdropdownfield
 * andrelohmann/silverstripe-emailverified_member
 * andrelohmann/silverstripe-bootstrap_extra_fields
 * andrelohmann/silverstripe-bootstrap_navbar_languageform
 * andrelohmann/silverstripe-bootstrap_navbar_loginform
 * andrelohmann/silverstripe-extendedobjects
 * andrelohmann/silverstripe-geoform
 * andrelohmann/silverstripe-gridfieldextensions
 * andrelohmann/silverstripe-legacyfields
 * andrelohmann/silverstripe-mobiledetector
 * andrelohmann/silverstripe-smtpmailer
 

## Overview
The module provides a template to start from, when writing a new Silverstripe Application without using the regular Silverstripe Installer.

It recommends to use composer to install all necessary Modules for special kinds of Applications.

This framework Module was patched with the fixes from andrelohmann/silverstripe-framework-fixes

## Installation

### Github

 * clone the project
 * remove all git files and directories (.git/, .gitignore, ...)
 * create new .gitignore File with following contents

```yaml
/.htaccess
/htaccess_*
!/htaccess_default
/_ss_environment*
!/_ss_environment_default.php
/assets/*
!/assets/.htaccess
/cms/
/framework/
/silverstripe-cache/
/nbproject/
/debug.log
/silverstripe.log
/vendor
/composer.lock
.DS_Store
```
 * for each modules you are going to use from the following list, add the module folder to .gitignore

```yaml
/themes
/localegeoip
/dependentdropdownfield
/email_verified_member
/bootstrap_extra_fields
/bootstrap_navbar_languageform
/bootstrap_navbar_loginform
/extendedobjects
/geoform
/geoip
/gridfieldextensions
/legacyfields
/mobile_detector
/smtpmailer
```

 * create a new Git Project from this base

### Modules
 * create a composer.json file to install needed modules
```json
{
    "name": "VENDOR/PROJEKTNAME",
        "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-framework-fixes"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-themes-bootstrap"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-localegeoip"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-dependentdropdownfield"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-email_verified_member"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-bootstrap_extra_fields"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-bootstrap_navbar_languageform"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-bootstrap_navbar_loginform"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-extendedobjects"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-geoform"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-geoip"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-gridfieldextensions"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-legacyfields"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-mobile_detector"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-smtpmailer"
            }
	],
	"require": {
		"php": ">=5.3.2",
		"composer/installers": "*",
                "php-ffmpeg/php-ffmpeg": "~0.5",
                "silverstripe/cms": "3.1.6",
                "silverstripe/framework": "3.1.6",
                "andrelohmann-silverstripe/framework-fixes": "3.1.6.3",
                "andrelohmann-silverstripe-themes/bootstrap": "3.1.6.3",
                "andrelohmann-silverstripe/smtpmailer": "1.1",
                "andrelohmann-silverstripe/geoip": "1.0",
                "andrelohmann-silverstripe/localegeoip": "1.1",
                "andrelohmann-silverstripe/geoform": "1.1",
                "andrelohmann-silverstripe/extendedobjects": "1.2",
                "andrelohmann-silverstripe/dependentdropdownfield": "1.0",
                "andrelohmann-silverstripe/email_verified_member": "1.0",
                "andrelohmann-silverstripe/bootstrap_extra_fields": "1.2",
                "andrelohmann-silverstripe/bootstrap_navbar_languageform": "1.1",
                "andrelohmann-silverstripe/bootstrap_navbar_loginform": "1.1",
                "andrelohmann-silverstripe/gridfieldextensions": "1.0",
                "andrelohmann-silverstripe/legacyfields": "1.1",
                "andrelohmann-silverstripe/mobile_detector": "1.1"
	},
        "scripts": {
            "post-install-cmd": [
                "cp vendor/andrelohmann-silverstripe/framework-fixes/* -r framework/"
            ],
            "post-update-cmd": [
                "cp vendor/andrelohmann-silverstripe/framework-fixes/* -r framework/"
            ]
        },
	"minimum-stability": "stable"
}
```

 * select the modules you like to use

### Configuration

 * rename project_* folders to your preferences
 * check README Files of installed modules
 * set configuration in _ss_environment.php, .htaccess, project_config/_config.php
 * checkin to new repository

### Installation of the newly created project

 * Clone Project
 * run 'composer install' (see https://getcomposer.org/)
 * copy _ss_environment_default.php to _ss_environment.php
 * set database configuration and other config parameters within _ss_environment.php
 * copy htaccess_default to .htaccess
 * set parameters on .htaccess (RewriteBase) as needed
 * create directory "silverstripe-cache"
 * chmod 777 -R assets/ silverstripe-cache/
 * create apache vHost like in the following example
 * /dev/build the system (see http://www.silverstripe.org/)

#### Apache vHost Example:
```yaml
<VirtualHost *:80>
    ServerName YOURDOMAIN
    ServerAlias YOURDOMAINALIAS
    DocumentRoot /var/www/YOURPROJECT/

    ServerAdmin ADMINEMAIL

    # Logfiles:
    CustomLog /var/log/apache2/YOURPROJECT combined
    ErrorLog /var/log/apache2/error-YOURPROJECT
    LogLevel warn

    <Directory "/var/www/YOURPROJECT/">
            Options FollowSymLinks
            AllowOverride All
            Order deny,allow
            Deny from all
            Allow from localhost
            Allow from 127.0.0.1                                                                                                                                                            
            Allow from All                                                                                                                                                                      
    </Directory>                                                                                                                                                                                

    DirectoryIndex index.php index.html

    # PHP Flags
    php_admin_flag engine on
    php_admin_flag short_open_tag on
    #use only <?php

    php_admin_flag safe_mode off
    php_admin_flag register_globals off
    php_admin_flag allow_url_fopen on
    php_admin_flag allow_url_include off
    php_admin_flag display_errors off
    php_admin_flag display_startup_errors off
    #php_value error_reporting 2039

    #php_admin_value open_basedir "/var/www/YOURPROJECT/:/tmp"
    php_admin_value memory_limit 512M
    php_admin_value date.timezone "Europe/Berlin"
</VirtualHost>
```