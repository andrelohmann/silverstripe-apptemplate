# Silverstripe App Template - (c) Andre Lohmann (and others) 2015

## Silverstripe Version 3.2.1

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
 * andrelohmann/silverstripe-bootstrap_orderable_frontend
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
/bootstrap_orderable_frontend
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
                "url": "https://github.com/andrelohmann/silverstripe-geoip"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-gridfieldextensions"
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
                "url": "https://github.com/andrelohmann/silverstripe-minify"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-bootstrap_backtotop_button"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-benchmark"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-bootstrap_orderable_frontend"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-googlesitemaps"
            },
            {
                "type": "vcs",
                "url": "https://github.com/andrelohmann/silverstripe-translatable-dataobject"
            }
	],
	"require": {
		"php": ">=5.4",
		"composer/installers": "*",
                "php-ffmpeg/php-ffmpeg": "0.6.0",
                "silverstripe/framework": "3.2.1",
                "unclecheese/betterbuttons":"1.2.8",
                "andrelohmann-silverstripe/framework-errorpage-patch": "3.2.1",
                "andrelohmann-silverstripe/cache-backends": "1.*",
                "andrelohmann-silverstripe/extended-file": "1.*",
                "andrelohmann-silverstripe/extended-image": "1.*",
                "andrelohmann-silverstripe/extended-date": "1.*",
                "andrelohmann-silverstripe-themes/bootstrap": "4.*",
                "andrelohmann-silverstripe/smtpmailer": "2.*",
                "andrelohmann-silverstripe/geoip": "2.*",
                "andrelohmann-silverstripe/localegeoip": "2.*",
                "andrelohmann-silverstripe/geolocation": "1.*",
                "andrelohmann-silverstripe/geoform": "2.*",
                "andrelohmann-silverstripe/dependentdropdownfield": "2.*",
                "andrelohmann-silverstripe/email_verified_member": "2.*",
                "andrelohmann-silverstripe/bootstrap_social_connect": "2.*",
                "andrelohmann-silverstripe/bootstrap_extra_fields": "2.*",
                "andrelohmann-silverstripe/bootstrap-tagfield": "1.*",
                "andrelohmann-silverstripe/bootstrap_navbar_languageform": "2.*",
                "andrelohmann-silverstripe/bootstrap_navbar_loginform": "2.*",
                "andrelohmann-silverstripe/gridfieldextensions": "2.*",
                "andrelohmann-silverstripe/legacyfields": "2.*",
                "andrelohmann-silverstripe/mobile_detector": "2.*",
                "andrelohmann-silverstripe/session_extender": "2.*",
                "andrelohmann-silverstripe/gua-cookie-policy": "1.*",
                "andrelohmann-silverstripe/shariff": "1.*",
                "andrelohmann-silverstripe/minify": "1.*",
                "andrelohmann-silverstripe/bootstrap_backtotop_button": "1.*",
                "andrelohmann-silverstripe/mediafiles": "1.*",
                "andrelohmann-silverstripe/vimeo_video": "2.*",
                "andrelohmann-silverstripe/benchmark": "1.*",
                "andrelohmann-silverstripe/bootstrap_orderable_frontend": "1.*",
                "andrelohmann-silverstripe/googlesitemaps": "2.*",
                "andrelohmann-silverstripe/translatable-dataobject": "1.*"
	},
        "scripts": {
            "post-install-cmd": [
                "cp -r vendor/andrelohmann-silverstripe/framework-fixes/* framework/",
                "cp -r vendor/andrelohmann-silverstripe/cache-backends/* framework/"
            ],
            "post-update-cmd": [
                "cp -r vendor/andrelohmann-silverstripe/framework-fixes/* framework/",
                "cp -r vendor/andrelohmann-silverstripe/cache-backends/* framework/"
            ]
        },
	"minimum-stability": "stable"
}
```

 * select the modules you like to use

### Configuration

 * rename app_* folders to your preferences
 * check README Files of installed modules
 * set configuration in _ss_environment.php, .htaccess, app/_config.php
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
apt-get install libapache2-mod-php5 php5-cli php5-curl php5-gd php5-imagick php5-mcrypt php5-tidy php5-geoip geoip-bin php5-mysql mysql-server-5.6 mysql-client-5.6 mysql-server-core-5.6 mysql-client-core-5.6 php5-redis redis-server phpmyadmin libfaac0 libfaac-dev libx264-dev libx264-142 x264 libav-tools mcrypt
```
Activate rewrite and mcrypt modules

```
php5enmod mcrypt
a2enmod rewrite
service apache2 restart
```

##### MongoDB
If MongoDB is necessary (as caching backend e.g.) install the following ways:
 * http://docs.mongodb.org/manual/tutorial/install-mongodb-on-ubuntu/
 * http://docs.mongodb.org/ecosystem/drivers/php/

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