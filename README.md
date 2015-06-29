# Silverstripe App Template - (c) Andre Lohmann (and others) 2015

## Silverstripe Version 3.1.13

## Maintainer Contact 
 * Andre Lohmann
   <lohmann.andre (at) gmail (dot) com>
	
## Requirements
 * composer/installers
 * silverstripe/framework
 * andrelohmann/silverstripe-framework-fixes
 * andrelohmann/silverstripe-themes-bootstrap

## Optional
 * php-ffmpeg/php-ffmpeg
 * unclecheese/betterbuttons
 * andrelohmann/silverstripe-geoip
 * andrelohmann/silverstripe-localegeoip
 * andrelohmann/silverstripe-dependentdropdownfield
 * andrelohmann/silverstripe-emailverified_member
 * andrelohmann/silverstripe-bootstrap_social_connect
 * andrelohmann/silverstripe-bootstrap_extra_fields
 * andrelohmann/silverstripe-bootstrap_navbar_languageform
 * andrelohmann/silverstripe-bootstrap_navbar_loginform
 * andrelohmann/silverstripe-extendedobjects
 * andrelohmann/silverstripe-geoform
 * andrelohmann/silverstripe-gridfieldextensions
 * andrelohmann/silverstripe-legacyfields
 * andrelohmann/silverstripe-mobile_detector
 * andrelohmann/silverstripe-session_extender
 * andrelohmann/silverstripe-smtpmailer
 * andrelohmann/silverstripe-gua-cookie-policy
 * andrelohmann/silverstripe-shariff
 * andrelohmann/silverstripe-benchmark
 

## Overview
This module provides a template to start from, when writing a new Silverstripe Application without using the regular Silverstripe Installer or the CMS Module.

It recommends to use composer to install all necessary Modules for special kinds of Applications.

This framework-fixes are patching the silverstripe/framework module with some bugfixes and some error handling for nicer 404 Error Pages.

Feel free to modify the app_* Folders to your needs.

## Installation

### Github

 * clone the project
 * remove all git files and directories (.git/, .gitignore, ...)
 * create new .gitignore File with following contents

```
/.htaccess
/htaccess_*
!/htaccess_default
/_ss_environment*
!/_ss_environment_default.php
/assets/*
!/assets/.htaccess
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

```
/themes
/localegeoip
/dependentdropdownfield
/email_verified_member
/bootstrap_social_connect
/bootstrap_extra_fields
/bootstrap-tagfield
/bootstrap_navbar_languageform
/bootstrap_navbar_loginform
/extendedobjects
/geoform
/geoip
/gridfieldextensions
/legacyfields
/mobile_detector
/session_extender
/smtpmailer
/betterbuttons
/gua-cookie-policy
/shariff
/benchmark
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
                "url": "https://github.com/andrelohmann/silverstripe-bootstrap_social_connect"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-bootstrap_extra_fields"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-bootstrap-tagfield"
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
                "url": "https://github.com/andrelohmann/silverstripe-session_extender"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-smtpmailer"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-gua-cookie-policy"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-shariff"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-benchmark"
            }
	],
	"require": {
		"php": ">=5.4",
		"composer/installers": "*",
                "php-ffmpeg/php-ffmpeg": "0.6.0",
                "silverstripe/framework": "3.1.13",
                "unclecheese/betterbuttons":"1.2.8",
                "andrelohmann-silverstripe/framework-fixes": "3.1.13.0",
                "andrelohmann-silverstripe-themes/bootstrap": "3.1.13.6",
                "andrelohmann-silverstripe/smtpmailer": "1.2",
                "andrelohmann-silverstripe/geoip": "1.1",
                "andrelohmann-silverstripe/localegeoip": "1.1",
                "andrelohmann-silverstripe/geoform": "1.15",
                "andrelohmann-silverstripe/extendedobjects": "1.6",
                "andrelohmann-silverstripe/dependentdropdownfield": "1.0",
                "andrelohmann-silverstripe/email_verified_member": "1.6",
                "andrelohmann-silverstripe/bootstrap_social_connect": "1.5",
                "andrelohmann-silverstripe/bootstrap_extra_fields": "1.13",
                "andrelohmann-silverstripe/bootstrap-tagfield": "0.1",
                "andrelohmann-silverstripe/bootstrap_navbar_languageform": "1.7",
                "andrelohmann-silverstripe/bootstrap_navbar_loginform": "1.9",
                "andrelohmann-silverstripe/gridfieldextensions": "1.2",
                "andrelohmann-silverstripe/legacyfields": "1.3",
                "andrelohmann-silverstripe/mobile_detector": "1.3",
                "andrelohmann-silverstripe/session_extender": "1.2",
                "andrelohmann-silverstripe/gua-cookie-policy": "0.4",
                "andrelohmann-silverstripe/shariff": "0.6",
                "andrelohmann-silverstripe/benchmark": "0.1"
	},
        "scripts": {
            "post-install-cmd": [
                "cp -r vendor/andrelohmann-silverstripe/framework-fixes/* framework/"
            ],
            "post-update-cmd": [
                "cp -r vendor/andrelohmann-silverstripe/framework-fixes/* framework/"
            ]
        },
	"minimum-stability": "stable"
}
```

 * select the modules you like to use

### Configuration

 * rename app_* folders to your preferences
 * check README Files of installed modules
 * set configuration in _ss_environment.php, .htaccess, app_config/_config.php
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

#### Updates/Extensions to Member Object

If Extensions are added to the Member Object, a simple dev/build within the Browser does not work.
In this case, go to the console, root directory of silverstripe and run the following command

```
php framework/cli-script.php dev/build flush 1
```

#### Ubuntu Packages

In Ubuntu 14.04 install the following Packages

```
apt-get install libapache2-mod-php5 php5-cli php5-curl php5-gd php5-imagick php5-mcrypt php5-tidy php5-xcache php5-geoip geoip-bin php5-mysql mysql-server-5.6 mysql-client-5.6 mysql-server-core-5.6 mysql-client-core-5.6 php5-redis redis-server phpmyadmin libfaac0 libfaac-dev libx264-dev libx264-142 x264 libav-tools mcrypt
```
Activate rewrite and mcrypt modules

```
php5enmod mcrypt
a2enmod rewrite
service apache2 restart
```

#### Apache vHost Example:

```
<VirtualHost *:80>
    ServerName YOURDOMAIN
    ErrorLog /var/log/apache2/error-YOURPROJECT
    LogLevel notice
    RedirectMatch permanent ^/(.*) http://www.YOURDOMAIN/$1
</VirtualHost>

<VirtualHost *:80>
    ServerName www.YOURDOMAIN
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
            Require all granted                                                                                                                                                                    
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

#### Apache 2.4
On Apache 2.4 you should remove index.php file when mod_rewrite is installed and enabled.