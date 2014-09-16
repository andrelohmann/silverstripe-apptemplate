# Silverstripe App Template - (c) Andre Lohmann (and others) 2014

## Silverstripe Version 3.1.6

## Maintainer Contact 
 * Andre Lohmann
   <lohmann.andre (at) gmail (dot) com>
	
## Requirements
 * andrelohmann/silverstripe-themes-bootstrap

## Optional
 * silverstripe/geoip
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
/_ss_environment*
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
                "andrelohmann-silverstripe-themes/bootstrap": "3.1.6.1",
                "andrelohmann-silverstripe/smtpmailer": "1.1",
                "andrelohmann-silverstripe/geoip": "1.0",
                "andrelohmann-silverstripe/localegeoip": "1.0",
                "andrelohmann-silverstripe/geoform": "1.0",
                "andrelohmann-silverstripe/extendedobjects": "1.1",
                "andrelohmann-silverstripe/dependentdropdownfield": "1.0",
                "andrelohmann-silverstripe/email_verified_member": "1.0",
                "andrelohmann-silverstripe/bootstrap_extra_fields": "1.0",
                "andrelohmann-silverstripe/bootstrap_navbar_languageform": "1.0",
                "andrelohmann-silverstripe/bootstrap_navbar_loginform": "1.0",
                "andrelohmann-silverstripe/gridfieldextensions": "1.0",
                "andrelohmann-silverstripe/legacyfields": "1.0",
                "andrelohmann-silverstripe/mobile_detector": "1.0"
	},
	"minimum-stability": "stable"
}
```

 * select the modules you like to use

### Configuration

 * rename project_* folders to your preferences
 * check README Files of installed modules
 * set configuration in _ss_environment.php, .htaccess, project_config/_config.php