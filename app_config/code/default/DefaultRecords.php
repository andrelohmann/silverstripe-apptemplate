<?php

/**
 * _config.php
 * Page::add_extension('DefaultRecords');
 * SiteTree::set_create_default_pages(false);
 * 
 * http://www.sspaste.com/paste/show/4c56a06978bf7
 */

class DefaultRecords extends DataExtension{
        
    function requireDefaultRecords() {
        parent::requireDefaultRecords();
        
        // Default Error Pages anlegen, sollte das Anlegen der Default Pages abgeschaltet sein
        // If-Block darf nur einmal durchlaufen werden
        if (!defined('RequireErrorPagesOnce') && !SiteTree::get_create_default_pages()){
            define('RequireErrorPagesOnce', true);
            SiteTree::set_create_default_pages(true);
            singleton('ErrorPage')->requireDefaultRecords();
            SiteTree::set_create_default_pages(false);
        }
        
    }
}